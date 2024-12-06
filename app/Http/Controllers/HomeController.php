<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employe;
use App\Models\Pointage;
use App\Models\Absence; // Assurez-vous d'importer le modèle Absence
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Dans le HomeController
public function afficherRapportMensue(Request $request)
{
    // Fetch total employees
    $totalEmployees = Employe::count();
    $moisSelectionne = $request->input('mois', date('m')); 
    // Fetch today's date
    $today = now()->format('Y-m-d');
    $pointages = Pointage::with('employe') // Assurez-vous qu'il y a une relation entre Pointage et Employe
    ->whereDate('date_pointage', $today)
    ->get();
    // Fetch today's absences
    $absences = Absence::with('employe') // Assuming there's a relationship between Absence and Employe models
                       ->whereDate('date_debut', $today)
                       ->orWhereDate('date_fin', $today)
                       ->get();

    // Fetch the number of present employees for today (either morning or afternoon)
    $presentEmployees = Pointage::whereDate('date_pointage', $today)
                                ->where(function ($query) {
                                    $query->whereNotNull('heure_entree_matin')
                                          ->orWhereNotNull('heure_entree_apresmidi');
                                })
                                ->count();
    // Récupérer le nombre d'absences par employé
    $absencesParEmploye = Absence::select('employeId', DB::raw('count(*) as total_absences'))
    ->groupBy('employeId')
    ->get();
    // Calculate absent employees
    $absentEmployees = $totalEmployees - $presentEmployees;

    // Calculate the percentage of present employees
    $presencePercentage = ($totalEmployees > 0) ? round(($presentEmployees / $totalEmployees) * 100, 2) : 0;

    // Pass variables to the view
    return view('home', compact('absencesParEmploye','moisSelectionne','totalEmployees', 'presentEmployees', 'absentEmployees', 'presencePercentage', 'absences','pointages'));
}


    public function afficherRapportMensuel($month)
    {
        // Récupérer les données de somme d'heures pour le mois donné
        $sommeHeures = Pointage::select('employeId', DB::raw('SUM(TIMESTAMPDIFF(MINUTE, heure_entree_matin, heure_sortie_matin) + TIMESTAMPDIFF(MINUTE, heure_entree_apresmidi, heure_sortie_apresmidi)) as total_minutes'))
            ->whereMonth('date_pointage', '=', date('m', strtotime($month)))
            ->whereYear('date_pointage', '=', date('Y', strtotime($month)))
            ->groupBy('employeId')
            ->get();

        return response()->json($sommeHeures);
    }

    public function afficherGraphiqueAbsences(Request $request)
    {
        $mois = $request->input('mois', date('m')); // Prendre le mois actuel par défaut
        $absencesParEmploye = Absence::select('employeId', \DB::raw('count(*) as total_absences'))
        ->whereMonth('created_at', $mois)
        ->groupBy('employeId')
        ->get();


        // Débogage : Afficher les résultats de la requête
        if ($absencesParEmploye->isEmpty()) {
            // Si aucune absence trouvée, essayez de retourner toutes les absences
            $absencesParEmploye = Absence::select('employeId', \DB::raw('count(*) as total_absences'))
                ->groupBy('employeId')
                ->get();
        }

        return view('graphique_absences', [
            'absencesParEmploye' => $absencesParEmploye,
            'moisSelectionne' => $mois,
        ]);
    }
}











