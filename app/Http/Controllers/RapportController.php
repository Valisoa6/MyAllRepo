<?php

namespace App\Http\Controllers;

use App\Models\Pointage;
use App\Models\Conge;
use App\Models\Employe;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PointageExport;
use Maatwebsite\Excel\Facades\Excel;

class RapportController extends Controller
{
    public function showReport(Request $request)
    {
        $month = $request->input('month', date('Y-m'));
        
        // Récupérer les employés avec leurs pointages et congés
        $employes = Employe::with('conges')->get()->map(function ($employe) use ($month) {
            $pointages = Pointage::where('employeId', $employe->id)
                ->whereMonth('date_pointage', date('m', strtotime($month)))
                ->whereYear('date_pointage', date('Y', strtotime($month)))
                ->get();
                
            $totalHours = $this->calculateTotalHours($pointages);

            $daysOff = Conge::where('employeId', $employe->id)
                ->where('date_debut', '<=', date('Y-m-t', strtotime($month)))
                ->where('date_fin', '>=', date('Y-m-01', strtotime($month)))
                ->count();

            return [
                'nom' => $employe->nom,
                'prenom' => $employe->prenom,
                'role' => $employe->role,
                'total_hours' => $totalHours,
                'days_off' => $daysOff,
            ];
        });

        return view('reports.pointage_report', compact('employes', 'month'));
    }
    public function generateReport(Request $request)
    {
        $month = $request->input('month', date('Y-m'));
    
        $employes = Employe::with('conges')->get()->map(function ($employe) use ($month) {
            $pointages = Pointage::where('employeId', $employe->id)
                ->whereMonth('date_pointage', date('m', strtotime($month)))
                ->whereYear('date_pointage', date('Y', strtotime($month)))
                ->get();
    
            $totalHours = $this->calculateTotalHours($pointages);
    
            $daysOff = Conge::where('employeId', $employe->id)
                ->where('date_debut', '<=', date('Y-m-t', strtotime($month)))
                ->where('date_fin', '>=', date('Y-m-01', strtotime($month)))
                ->count();
    
            return [
                'nom' => $employe->nom,
                'prenom' => $employe->prenom,
                'role' => $employe->role,
                'total_hours' => $totalHours,
                'days_off' => $daysOff,
            ];
        });
    
        // Charger la vue stylisée pour le PDF
        $pdf = Pdf::loadView('reports.pointage_table', compact('employes', 'month'));
    
        return $pdf->download('rapport_pointage.pdf');
    }
    

    private function calculateTotalHours($pointages)
    {
        $totalMinutes = 0;
        foreach ($pointages as $pointage) {
            if (!$pointage->absent_matin && $pointage->heure_entree_matin && $pointage->heure_sortie_matin) {
                $totalMinutes += $this->calculateMinutes($pointage->heure_entree_matin, $pointage->heure_sortie_matin);
            }
            if (!$pointage->absent_apresmidi && $pointage->heure_entree_apresmidi && $pointage->heure_sortie_apresmidi) {
                $totalMinutes += $this->calculateMinutes($pointage->heure_entree_apresmidi, $pointage->heure_sortie_apresmidi);
            }
        }

        return floor($totalMinutes / 60) . 'h:' . ($totalMinutes % 60) . 'min';
    }

    private function calculateMinutes($startTime, $endTime)
    {
        $start = \Carbon\Carbon::parse($startTime);
        $end = \Carbon\Carbon::parse($endTime);
        return $end->diffInMinutes($start);
    }
    public function exportExcel(Request $request)
    {
        $month = $request->input('month', date('Y-m'));
        return Excel::download(new PointageExport($month), 'rapport_pointage.xlsx');
    }
}
