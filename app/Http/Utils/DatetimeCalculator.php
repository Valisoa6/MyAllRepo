<?php

namespace App\Http\Utils;
use Carbon\Carbon;
use App\Models\Pointage;
use Illuminate\Support\Facades\Log;

class DatetimeCalculator {
    
    public static function getDiffDay($debut, $fin) {
        $date_debut = Carbon::parse($debut);
        $date_fin = Carbon::parse($fin);
        $duree = $date_debut->diffInDays($date_fin);
        return $duree;
    }

   // app/Http/Utils/DatetimeCalculator.php
   public static function calculerDuree($heureDebut, $heureFin)
{
    // Assurez-vous que ces valeurs sont des objets Carbon
    $debut = Carbon::parse($heureDebut);
    $fin = Carbon::parse($heureFin);
    
    // Assurez-vous que $heureFin est après $heureDebut
    if ($debut->greaterThan($fin)) {
        // Échange les valeurs si nécessaire
        $temp = $debut;
        $debut = $fin;
        $fin = $temp;
    }

    // Calcul de la durée en minutes
    $dureeMinutes = $fin->diffInMinutes($debut);

    // Convertir la durée en heures et minutes
    $heures = intdiv($dureeMinutes, 60); // Diviser par 60 pour obtenir les heures
    $minutes = $dureeMinutes % 60;      // Reste de la division pour obtenir les minutes

    // Retourner la durée formatée en heures et minutes
    
    return sprintf('%d h %d min', $heures, $minutes);
}

   



   public static function obtenirNomJour($date)
   {
    $dateCarbon = Carbon::parse($date);

    $dateCarbon->locale('fr');


    $dateComplete = $dateCarbon->translatedFormat('l j F Y');

    return  $dateComplete;
   }
   
   public static function calculerSommeHeures($heures) {
    $totalMinutes = 0;

    foreach ($heures as $heure) {
        // Vérifier que l'heure est bien au format H:i
        if (!preg_match('/^\d{2}:\d{2}$/', $heure)) {
            // Ignorer les valeurs non valides, par exemple, "en cours"
            continue;
        }

        $time = \Carbon\Carbon::createFromFormat('H:i', $heure);
        $totalMinutes += $time->hour * 60 + $time->minute;
    }

    $totalHeures = intdiv($totalMinutes, 60);
    $resteMinutes = $totalMinutes % 60;

    return sprintf('%02d:%02d', $totalHeures, $resteMinutes);
}



   public static function obtenirFinMois()
   {
    $dateCarbon = Carbon::now();
    $finMois = $dateCarbon->endOfMonth()->format('d-m-Y');
    return $finMois;
   }

   public static function estOuvrable($date)
   {
        $date = Carbon::parse($date);
        if($date->isWeekday()){
            return true;
        }
        else {
            return false;
        }
   }

   public static function compterJoursOuvrables($dateDebut, $dateFin)
   {
       $start = Carbon::parse($dateDebut);
       $end = Carbon::parse($dateFin);
       $joursOuvrables = 0;

       while ($start <= $end) {
           // Check if the day is a weekday (Monday to Friday)
           if ($start->isWeekday()) {
               $joursOuvrables++;
           }
           $start->addDay();
       }

       return $joursOuvrables;
   }

   // Recuperer la date ouvrable
   public static function previousDay() {
        $yesterday = Carbon::now()->subDay();
        $dayName = $yesterday->format('l');
        
        if($dayName=="saturday") {
            $yesterday = $yesterday->subDay();
        }
        else if($dayName=="sunday") {
            $yesterday = $yesterday
            ->subDay()
            ->subDay();
        }
        
        return $yesterday->format("Y-m-d");
   }
   public static function compteAbsent(){
    
   }


    public static function calculerJoursRestants($dateFin, $joursPris)
    {
        $dateFin = Carbon::parse($dateFin);
        $dateActuelle = Carbon::now();

        // Calculer les jours entre aujourd'hui et la fin du congé
        $joursRestants = $dateFin->diffInWeekdays($dateActuelle, false);

        // Soustraire les jours de congé déjà pris
        return   $joursPris - $joursRestants;
    }

    public static function calculerTotalParMois($employeId, $mois)
{
    $pointages = Pointage::where('employeId', $employeId)
        ->whereBetween('date_pointage', [Carbon::parse($mois.'-01')->startOfMonth(), Carbon::parse($mois.'-01')->endOfMonth()])
        ->get();

    $total = 0;

    foreach ($pointages as $pointage) {
        if ($pointage->heure_debut && $pointage->heure_fin) {
            $duree = self::calculerDuree($pointage->heure_debut, $pointage->heure_fin);
            if (is_numeric($duree)) {
                $total += $duree;
            }
        }
    }

    return $total; // Total en heures décimales
}
//somme heure par mois
public static function getSommeHeure($employeId, $month)
{
    // Récupérer les pointages pour cet employé et le mois spécifié
    $pointages = Pointage::where('employeId', $employeId)
        ->where('date_pointage', 'like', "$month%")
        ->get();

    $totalMinutes = 0;

    foreach ($pointages as $pointage) {
        // Calculer les heures du matin
        if ($pointage->heure_entree_matin && $pointage->heure_sortie_matin) {
            $totalMinutes += (strtotime($pointage->heure_sortie_matin) - strtotime($pointage->heure_entree_matin)) / 60;
        }

        // Calculer les heures de l'après-midi
        if ($pointage->heure_entree_apresmidi && $pointage->heure_sortie_apresmidi) {
            $totalMinutes += (strtotime($pointage->heure_sortie_apresmidi) - strtotime($pointage->heure_entree_apresmidi)) / 60;
        }
    }

    return self::formatMinutesToHours($totalMinutes);
}

private static function formatMinutesToHours($minutes)
{
    $hours = floor($minutes / 60);
    $remainingMinutes = $minutes % 60;

    return sprintf('%dh: %dmin', $hours, $remainingMinutes);
}



}


