<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	
    // Afficher la liste des utilisateurs
    public function index()
    {
        $userss = User::all();
        return view('users', compact('userss'));
    }

    // Créer un nouvel utilisateur
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|phone:MG',  // Vous pouvez spécifier les pays, par exemple FR pour la France, US pour les États-Unis
            'password' => 'required|min:8',
        ]);
        
        

        User::create([
            'type' => $request->type,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Utilisateur créé avec succès.');
    }

    // Mettre à jour un utilisateur existant
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'type' => 'required',
            'phone' => 'required|phone|unique:user,phone,'.$id,
            'password' => 'nullable|min:6',
        ]);
        $user->type = $request->type;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->back()->with('success', 'Utilisateur mis à jour avec succès.');
    }

    // Supprimer un utilisateur
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès.');
    }
}
