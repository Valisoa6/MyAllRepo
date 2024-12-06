<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Utils\DatetimeCalculator;
use Carbon\Carbon;

class CongeController extends Controller
{
    public function index()
    {
        $conges = Conge::with('employe')->get();
        $employes = Employe::all();
        
        return view('conges.index', compact('conges', 'employes'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'employeId' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'raison' => 'required',
        ]);

        $employeId = $request->employeId;
        $currentYear = date('Y');

        // Calculate the total number of working days off for the current year
        $totalWorkingDaysOff = Conge::where('employeId', $employeId)
            ->whereYear('date_debut', $currentYear)
            ->get()
            ->sum(function ($conge) {
                return DatetimeCalculator::compterJoursOuvrables($conge->date_debut, $conge->date_fin);
            });

        // Calculate the new leave days
        $newLeaveDays = DatetimeCalculator::compterJoursOuvrables($request->date_debut, $request->date_fin);

        if ($totalWorkingDaysOff + $newLeaveDays > 30) {
            return response()->json(['error' => 'Le nombre total de jours de congé ouvrables ne peut pas dépasser 30 jours.'], 400);
        }

        $conge = Conge::create($request->all());

        return response()->json(['success' => 'Congé ajouté avec succès!'], 200);
    }


    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'employeId' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'raison' => 'required',
        ]);

        $conge = Conge::findOrFail($id);
        $oldLeaveDays = DatetimeCalculator::compterJoursOuvrables($conge->date_debut, $conge->date_fin);
        $employeId = $request->employeId;
        $currentYear = date('Y');

        // Calculate the total number of working days off for the current year, excluding the old leave days
        $totalWorkingDaysOff = Conge::where('employeId', $employeId)
            ->whereYear('date_debut', $currentYear)
            ->where('id', '!=', $id) // Exclude the current leave being updated
            ->get()
            ->sum(function ($conge) {
                return DatetimeCalculator::compterJoursOuvrables($conge->date_debut, $conge->date_fin);
            });

        // Calculate the new leave days
        $newLeaveDays = DatetimeCalculator::compterJoursOuvrables($request->date_debut, $request->date_fin);

        if ($totalWorkingDaysOff + $newLeaveDays > 30) {
            return response()->json(['error' => 'Le nombre total de jours de congé ouvrables ne peut pas dépasser 30 jours.'], 400);
        }

        // Update the leave record
        $conge->update($request->all());

        return response()->json(['success' => 'Congé modifié avec succès!'], 200);
    }

    public function destroy($id)
    {
        $conge = Conge::findOrFail($id);
        $conge->delete();

        return response()->json(['success' => 'Congé supprimé avec succès.'], 200);
    }

    public function calculateDuration(Request $request)
    {
        $duree = DatetimeCalculator::getDiffDay($request->debut, $request->fin);
        return $duree;
    }

    public function obtenirFinMois(Request $request)
    {
        $date = $request->get('date');
        $finMois = DatetimeCalculator::obtenirFinMois($date);
        return response()->json(['finMois'=> $finMois]);
    }

    public function estOuvrable(Request $request)
    {
        $date = $request->get('date');
        $resultat = DatetimeCalculator::estOuvrable($date);
        return response()->json(['resultat'=>$resultat]);
    }

    public function compterJoursOuvrables(Request $request)
    {
        $dateDebut = $request->get('dateDebut');
        $dateFin = $request->get('dateFin');
        $resultat = DatetimeCalculator::compterJoursOuvrables($dateDebut, $dateFin);
        return response()->json($resultat);
    }

    public function calculerJoursRestants($id)
    {
        $conge = Conge::findOrFail($id);
        $joursRestants = $conge->jourRestant;

        return response()->json(['joursRestants' => $joursRestants]);
    }
}
