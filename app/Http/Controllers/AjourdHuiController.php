<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pointage;
use Illuminate\Http\Request;
use App\Http\Utils\DatetimeCalculator;

class AjourdHuiController extends Controller
{
    public function index()
    {
        $moisCourant = now()->format('Y-m'); // Format YYYY-MM pour le mois courant

        // Format du mois en lettres
        $moisEnLettres = Carbon::now()->format('F Y'); // Exemple : "September 2024"

        // Récupère les pointages de tous les employés pour le mois courant
        $pointages = Pointage::with('employe') // Assurez-vous de charger la relation
            ->whereMonth('date', Carbon::now()->month)
            ->whereYear('date', Carbon::now()->year)
            ->get();
        // Crée un tableau pour stocker les durées totales par employé
        $pointagesGrouped = [];

        foreach ($pointages as $pointage) {
            $employeId = $pointage->employeId;

            if (!isset($pointagesGrouped[$employeId])) {
                $pointagesGrouped[$employeId] = [
                    'employe' => $pointage->employe,
                    'totalParMois' => 0, // Stocke la durée totale en minutes pour la conversion ultérieure
                ];
            }
            // Calcul de la durée en minutes
            $duree = DatetimeCalculator::calculerDuree($pointage->heure_debut, $pointage->heure_fin);
           
            // Extraire les minutes de la chaîne formatée
            $dureeMinutes = $this->convertToMinutes($duree);

            // Assurez-vous que $dureeMinutes est un nombre
            if (is_numeric($dureeMinutes)) {
                $pointagesGrouped[$employeId]['totalParMois'] += $dureeMinutes;
            } else {
                // Gérer l'erreur ou définir une valeur par défaut si la durée n'est pas un nombre
                $pointagesGrouped[$employeId]['totalParMois'] += 0; // ou gérer autrement
            }
        }
        // Convertir la durée totale en heures et minutes après la boucle
        foreach ($pointagesGrouped as &$pointageGrouped) {
            $totalMinutes = $pointageGrouped['totalParMois'];
            $heures = intdiv($totalMinutes, 60);
            $minutes = $totalMinutes % 60;
            $pointageGrouped['totalParMois'] = sprintf('%d h %d min', $heures, $minutes);
        }
       
        return view('pointageNow.index', [
            'pointages' => $pointagesGrouped,
            'mois' => $moisEnLettres // Passez le mois en lettres à la vue
        ]);
    }
    private function convertToMinutes($duree)
    {
        // Convertir une durée formatée comme 'd h min' en minutes
        if (preg_match('/(\d+) h (\d+) min/', $duree, $matches)) {
            return (int)$matches[1] * 60 + (int)$matches[2];
        }
        return 0; // Valeur par défaut si le format n'est pas correct
    }
}

