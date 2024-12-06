<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Conge;
use App\Models\Pause;
use App\Models\Absence;
use App\Models\Pointage;
use App\Http\Utils\DatetimeCalculator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User; // Assurez-vous que le nom de la classe User est correct

class Employe extends Model
{
    use HasFactory;

    protected $table = 'employe';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;
    public $appends = ["heureTotal", "congesTotal"];

    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'adresse',
        'phone',
        'role',
        'foi',
        'total_absences',
        'userId'
    ];
    public function incrementAbsences()
    {
        $this->total_absences += 1;
        $this->save();
    }

    // Relations
    public function conges() {
        return $this->hasMany(Conge::class, 'employeId', 'id');
    }

    public function pauses() {
        return $this->hasMany(Pause::class, 'employeId', 'id');
    }

    public function pointages()
    {
        return $this->hasMany(Pointage::class, 'employeId');
    }
    public function absences()
    {
        return $this->hasMany(Absence::class, 'employeId');
    }

    public function user() {
        return $this->belongsTo(User::class, 'userId', 'id');
    }
    
   
    // Accessor pour obtenir la somme totale des heures de travail
    public function getHeureTotalAttribute() {
        $liste = [];

        foreach ($this->pointages as $pointage) {
            $liste[] = $pointage->duree;
        }

        return DatetimeCalculator::calculerSommeHeures($liste);
    }

    // Accessor pour obtenir le total des jours de congé
    public function getCongesTotalAttribute() {
        $sum = 0;

        foreach ($this->conges as $conge) {
            $sum += $conge->nbr;
        }

        return $sum;
    }
    public function heuresParMois($mois)
    {
        return DatetimeCalculator::calculerTotalParMois($this->id, $mois);
    }

    public function heuresAnnuelParMois($annee)
    {
        $heuresParMois = [];

        // Boucler sur les mois de 1 à 12
        for ($mois = 1; $mois <= 12; $mois++) {
            // Formater le mois et l'année en format YYYY-MM
            $date = Carbon::create($annee, $mois)->format('Y-m');

            // Appeler la méthode heuresParMois pour chaque mois
            $heuresParMois[$mois] = $this->heuresParMois($date);
        }
        
        return $heuresParMois;
    }

    public function updateAbsentStatus(Request $request, $id)
{
    // Trouve l'employé correspondant
    $employe = Employe::findOrFail($id);

    // Vérifie si l'employé est marqué absent
    if ($request->has('absent')) {
        $employe->absent = true;
        // Incrémente le total des absences
        $employe->total_absences = $employe->total_absences + 1;
    } else {
        $employe->absent = false;
    }

    $employe->save();

    return redirect()->back()->with('status', 'L\'état d\'absence a été mis à jour.');
}

}
