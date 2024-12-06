<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absence;
use App\Models\Employe;
use App\Models\Pointage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenceController extends Controller
{
    public function index()
    {
        // Récupérer toutes les absences avec les informations de l'employé
        $absences = Absence::with('employe')->get();
        $employes = Employe::all();

        // Envoyer les données à la vue
        return view('absences.index', compact('absences', 'employes'));
    }
    public function show($id)
    {
        $absence = Absence::with('employe')->findOrFail($id);
        return response()->json($absence);
    }
    
    

    

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'employeId' => 'required|exists:employe,id',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'raison' => 'required|string|max:255',
            'is_prevu' => 'required|boolean',
        ]);
    
        // Créer une nouvelle absence
        Absence::create([
            'employeId' => $validated['employeId'],
            'date_debut' => $validated['date_debut'],
            'date_fin' => $validated['date_fin'],
            'raison' => $validated['raison'],
            'is_prevu' => $validated['is_prevu'],
            'status' => 'en attente',
        ]);
    
        return redirect()->route('absences.index')->with('success', 'Absence ajoutée avec succès.');
    }
    public function update(Request $request, $id)
{
    // Valider les données
    $validated = $request->validate([
        'employeId' => 'required|exists:employe,id',
        'date_debut' => 'required|date',
        'date_fin' => 'nullable|date|after_or_equal:date_debut',
        'raison' => 'required|string|max:255',
        'is_prevu' => 'required|boolean',
    ]);

    // Trouver l'absence à modifier
    $absence = Absence::findOrFail($id);

    // Mettre à jour les données de l'absence
    $absence->update([
        'employeId' => $validated['employeId'],
        'date_debut' => $validated['date_debut'],
        'date_fin' => $validated['date_fin'],
        'raison' => $validated['raison'],
        'is_prevu' => $validated['is_prevu'],
    ]);

    return redirect()->route('absences.index')->with('success', 'Absence modifiée avec succès.');
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

public function destroy($id)
{
    // Suppression de l'employé
    $absences = Absence::findOrFail($id);
    $absences->delete();

    return redirect()->back()->with('absence', 'deleted');
}
}
