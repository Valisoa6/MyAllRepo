<?php

namespace App\Models;

use App\Http\Utils\DatetimeCalculator;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conge extends Model
{
    use HasFactory;

    protected $table = "conge";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = "integer";
    public $timestamps = false;
    public $appends = ["nombreJour", "jourRestant"];
    
    protected $fillable = [
        'id',
        'date_debut',
        'date_fin',
        'raison',
        'employeId',
    ];

    public function employe() {
        return $this->belongsTo(Employe::class, 'employeId', 'id');
    }

    public function getNombreJourAttribute() {
        $jours = DatetimeCalculator::compterJoursOuvrables($this->date_debut, $this->date_fin);
        return $jours . ' ' . Str::plural('jour', $jours);
    }

    public function getJourRestantAttribute() {
        $joursPris = $this->jours_pris; // Assurez-vous que vous avez une méthode ou un attribut pour les jours pris
        $joursRestants = DatetimeCalculator::calculerJoursRestants($this->date_fin, $joursPris);
        return $joursRestants . ' ' . Str::plural('jour', $joursRestants);
    }
}

