<?php

namespace App\Exports;

use App\Models\Employe;
use App\Models\Pointage;
use App\Models\Conge;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Request;

class PointageExport implements FromView
{
    protected $month;

    public function __construct($month)
    {
        $this->month = $month;
    }

    public function view(): View
    {
        $employes = Employe::with('conges')->get()->map(function ($employe) {
            $pointages = Pointage::where('employeId', $employe->id)
                ->whereMonth('date_pointage', date('m', strtotime($this->month)))
                ->whereYear('date_pointage', date('Y', strtotime($this->month)))
                ->get();

            $totalHours = $this->calculateTotalHours($pointages);

            $daysOff = Conge::where('employeId', $employe->id)
                ->where('date_debut', '<=', date('Y-m-t', strtotime($this->month)))
                ->where('date_fin', '>=', date('Y-m-01', strtotime($this->month)))
                ->count();

            return [
                'nom' => $employe->nom,
                'prenom' => $employe->prenom,
                'role' => $employe->role,
                'total_hours' => $totalHours,
                'days_off' => $daysOff,
            ];
        });

        return view('reports.pointage_table', [
            'employes' => $employes,
            'month' => $this->month
        ]);
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
}


