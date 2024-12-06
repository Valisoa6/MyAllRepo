<?php

namespace App\Http\Controllers;

use App\Models\User; // Assurez-vous que le nom de la classe User est correct
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Utils\DatetimeCalculator;

class EmployeController extends Controller
{
    public function index() {
        $employes = Employe::with('user')->get(); // Utilisez 'user' ici
        $users = User::all(); // Récupérer tous les utilisateurs
        return view('employe.index', compact('employes', 'users'));
    }
    
    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        return response()->json($employe);
    }
    public function update(Request $request, $id) {
        $employe = Employe::findOrFail($id);
        $employe->update($request->all());
        $employe->save();

        return redirect()->back()->with('success', 'Utilisateur mis à jour avec succès.');
    }
    public function modifier(Request $request, $id) {
        $employe = Employe::findOrFail($id);
        $employe->update($request->all());
        $employe->save();

        return redirect()->back()->with('success', 'Utilisateur mis à jour avec succès.');
    }
    

    public function store(Request $request)
    {
        // Validation et création de l'employé
        $employe = Employe::create($request->all());

        return redirect()->back()->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function storePost(Request $request)
    {
        // Validation et création de l'employé
        $employe = Employe::create($request->all());

        return $employe;
    }
    public function destroy($id)
    {
        // Suppression de l'employé
        $employe = Employe::findOrFail($id);
        $employe->delete();

        return redirect()->back()->with('status', 'deleted');
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
