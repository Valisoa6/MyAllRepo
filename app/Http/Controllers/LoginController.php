<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function pagelog() {
        return view("login");
    }
    public function login(Request $request)
    {
        // Valider les données de la requête
        $credentials = $request->only('phone', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }
        else {
            return back()->with("error","Invalid credentials");
        }
        // Tenter de récupérer l'utilisateur avec les credentials
        $user = User::where('phone', $credentials['phone'])->first();
   
        // Déterminez la route de redirection en fonction du type d'utilisateur
        $route = $user->type === 'simple' ? '/dashboard' : '/dashboard';
       
        return redirect()->intended($route);
    }

    public function logout()
    {
        // Invalider le token JWT
        try {
            JWTAuth::invalidate(JWTAuth::getToken());

            // Supprimer le token de la session
            session()->forget('jwt_token');

            // Rediriger vers la page de login
            return redirect()->route('login')->with('success', 'Vous avez été déconnecté avec succès.');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Erreur lors de la déconnexion.');
        }
    }

    public function register(Request $request)
    {
        $user = User::create([
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return $user;
    }
}