<?php

namespace App\Models;

use App\Models\Statut;
use App\Models\Absence;
use App\Models\Employe;
use App\Http\Utils\DatetimeCalculator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pointage extends Model
{
    use HasFactory;

    protected $table = 'pointages';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;
    public $appends = ["sommeHeure"];
    protected $fillable = [
        'employeId',
        'date_pointage',
        'heure_entree_matin',
        'heure_sortie_matin',
        'heure_entree_apresmidi',
        'heure_sortie_apresmidi'
    ];

    // Relation avec l'employé
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employeId');
    }

    public function calculerHeuresTravail()
    {
        $heuresTravailMatin = 0;
        $heuresTravailApresMidi = 0;

        if ($this->heure_entree_matin && $this->heure_sortie_matin) {
            $heuresTravailMatin = \Carbon\Carbon::parse($this->heure_sortie_matin)->diffInHours(\Carbon\Carbon::parse($this->heure_entree_matin));
        }

        if ($this->heure_entree_apresmidi && $this->heure_sortie_apresmidi) {
            $heuresTravailApresMidi = \Carbon\Carbon::parse($this->heure_sortie_apresmidi)->diffInHours(\Carbon\Carbon::parse($this->heure_entree_apresmidi));
        }

        return $heuresTravailMatin + $heuresTravailApresMidi;
    }

    public function getSommeHeureAttribute()
    {
        // Remplacez par l'ID de l'employé souhaité et le mois désiré
        $employeId = $this->employeId; // ou passer l'ID de l'employé en paramètre
        $month = date('Y-m'); // ou un mois spécifique

        return DatetimeCalculator::getSommeHeure($employeId, $month);
    }
}
