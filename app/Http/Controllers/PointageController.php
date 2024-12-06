<?php

namespace App\Http\Controllers;
use App\Models\Absence;
use App\Models\Employe;
use App\Models\Pointage;
use Illuminate\Http\Request;
use App\Exports\PointageExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class PointageController extends Controller
{
    // Récupérer tous les employés et pointages
    public function findAll() {
        $pointages = Pointage::with('employe')
            ->orderBy('employeid') // Tri par employé
            ->get();
    
        return view('pointage', [
            'pointages' => $pointages,
            'employes' => Employe::all(),
        ]);
    }

    public function getHoursPerEmployeeForMonth($month)
        {
            $startDate = Carbon::createFromFormat('Y-m', $month)->startOfMonth();
            $endDate = Carbon::createFromFormat('Y-m', $month)->endOfMonth();

            $pointages = DB::table('pointages')
                ->select('employeId', DB::raw('SUM(TIMESTAMPDIFF(HOUR, heure_entree_matin, heure_sortie_matin)) AS heures_matin'),
                        DB::raw('SUM(TIMESTAMPDIFF(HOUR, heure_entree_apresmidi, heure_sortie_apresmidi)) AS heures_apresmidi'))
                ->whereBetween('date_pointage', [$startDate, $endDate])
                ->groupBy('employeId')
                ->get();
            return response()->json($pointages);
            
        }


    // Enregistrer un nouveau pointage (entrée)
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'employee_id' => 'required|exists:employe,id',
            'types_pointage' => 'required|in:Matin,Après-midi',
        ]);
    
        // Création d'un nouveau pointage
        $pointage = Pointage::create([
            'employeId' => $request->employee_id,
            'date_pointage' => now()->toDateString(),
            'heure_entree_matin' => $request->types_pointage == 'Matin' ? now()->toTimeString() : null,
            'heure_sortie_matin' => null,
            'heure_entree_apresmidi' => $request->types_pointage == 'Après-midi' ? now()->toTimeString() : null,
            'heure_sortie_apresmidi' => null,
        ]);
    
        // Retourne le pointage avec le type pour l'utiliser dans le JavaScript
        return response()->json([
            'id' => $pointage->id,
            'date_pointage' => $pointage->date_pointage,
            'heure_entree_matin' => $pointage->heure_entree_matin,
            'heure_sortie_matin' => $pointage->heure_sortie_matin,
            'heure_entree_apresmidi' => $pointage->heure_entree_apresmidi,
            'heure_sortie_apresmidi' => $pointage->heure_sortie_apresmidi,
            'types_pointage' => $request->types_pointage, // Assurez-vous de renvoyer ce champ
        ]);
    }
    

    // Mise à jour de l'heure de sortie en fonction du type de pointage (Matin ou Après-midi)
    public function enregistrerPointage(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employes,id',
            'types_pointage' => 'required|in:Matin,Après-midi',
        ]);
    
        // Vérifier si un pointage existe déjà pour cet employé et ce jour
        $pointage = Pointage::where('employeId', $validatedData['employee_id'])
            ->where('date_pointage', now()->toDateString())
            ->first();
    
        if (!$pointage) {
            // Créer un nouveau pointage si inexistant
            $pointage = new Pointage();
            $pointage->employeId = $validatedData['employee_id'];
            $pointage->date_pointage = now()->toDateString();
        }
    
        // Mettre à jour l'heure d'entrée
        if ($validatedData['types_pointage'] === 'Matin') {
            $pointage->heure_entree_matin = now()->format('H:i:s');
        } else {
            $pointage->heure_entree_apresmidi = now()->format('H:i:s');
        }
    
        $pointage->save();
    
        return response()->json($pointage);
    }
    

    public function sortie($id)
    {
        $pointage = Pointage::find($id);
    
        if ($pointage) {
            $type = request('type');
            if ($type === 'Matin') {
                $pointage->heure_sortie_matin = now()->format('H:i:s');
            } else if ($type === 'Après-midi') {
                $pointage->heure_sortie_apresmidi = now()->format('H:i:s');
            }
            $pointage->save();
    
            return response()->json([
                'heure_sortie_matin' => $pointage->heure_sortie_matin,
                'heure_sortie_apresmidi' => $pointage->heure_sortie_apresmidi,
            ]);
        }
    
        return response()->json(['error' => 'Pointage non trouvé'], 404);
    }
    
public function exportExcel(Request $request)
{
    $month = $request->input('month');
    return Excel::download(new PointageExport($month), 'rapport_pointage_'.$month.'.xlsx');
}

}



