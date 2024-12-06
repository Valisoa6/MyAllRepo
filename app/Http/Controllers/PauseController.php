<?php

namespace App\Http\Controllers;

use App\Models\Pause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PauseController extends Controller
{
    public function index()
    {
        $construction = DB::table('pause')->get();
        return json_encode($construction);
    }  


    public function findAll() {
        $pauses = Pause::with("employe")->get();
        return view("pause", ["pauses" => $pauses]);
    }

    public function update(Request $request)
    {
       
        $pause = json_decode( $request->data );
 
        Pause::where("id", $pause->id)->update( [
            'date_debut' => $request->dateDebut,
            'date_fin' => $request->dateFin,
            'employeId' => $request->employeId,
        ] );

        return 'success';
        
    } 

    public function store(Request $request)
    {
        Pause::create([ 
           'date_debut' => $request->dateDebut,
            'date_fin' => $request->dateFin,
            'employeId' => $request->employeId,
        ]);

        return "success";    
    }

    public function destroy($id)
    {
        DB::table('pause')->where('id',$id)->delete();
        return json_encode('supprimer avec succes');
    }
    
}
