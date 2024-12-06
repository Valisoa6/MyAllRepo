<?php

namespace App\Models;

use App\Models\Employe;
use App\Http\Utils\DatetimeCalculator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pause extends Model
{
    use HasFactory;
    protected $table = "pause";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = "integer";
    public $appends = ["duree"];
    public $timestamps = true;
    protected $fillable = [
        'id',
        'date_debut',
        'date_fin',
        'employeId',
    ];

    public function employe(){
        return $this->belongsTo(Employe::class, 'employeId', 'id');
    }

    public function getDureeAttribute() {
        return DatetimeCalculator::calculerDuree($this->heure_debut, $this->heure_fin);
    }
    
}
