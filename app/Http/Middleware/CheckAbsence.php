<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAbsence
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $employe = Auth::user(); // Récupère l'employé connecté

        // Vérifier s'il y a un congé en cours
        $congeEnCours = Conge::where('employe_id', $employe->id)
                             ->where('date_debut', '<=', now())
                             ->where('date_fin', '>=', now())
                             ->exists();

        // Si aucun congé en cours
        if (!$congeEnCours) {
            // Vérifier si l'employé a fait un pointage aujourd'hui
            $pointageAujourdHui = Pointage::where('employe_id', $employe->id)
                                           ->whereDate('created_at', today())
                                           ->exists();

            // Si aucun pointage n'a été fait aujourd'hui, enregistrer une absence
            if (!$pointageAujourdHui) {
                Absence::create([
                    'employeId' => $employe->id,
                    'date_debut' => today(),
                    'raison' => 'Absence non justifiée',
                    'type_absence' => 'Non justifiée',
                    'status' => 'en attente',
                ]);
            }
        }
        return $next($request);
    }
}
