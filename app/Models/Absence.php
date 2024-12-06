<?php

namespace App\Models;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absence extends Model
{
    use HasFactory;
    protected $table = 'absences';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $fillable = [
        'employeId',
        'date_debut',
        'date_fin',
        'raison',
        'status',
        'is_prevu',
    ];

    // Relation avec le modèle Employe
    // Dans le modèle Absence
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employeId');
    }

}
