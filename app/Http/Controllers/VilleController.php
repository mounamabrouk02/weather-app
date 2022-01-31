<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;

use Illuminate\Support\Facades\Auth;

class VilleController extends Controller
{
    public function create(){
        $villes = Ville::all();
        return view('ville')->with('villes',$villes);        
    }
    public function store(Request $request){

        $ville  = new Ville();

        $ville->nom = $request->input('nom');
        $ville->user_id = Auth::id();
        $ville->save();
        session()->flash("success","La ville est bien enregistré");
        return back();
    }
    public function destroy($id){
        $ville= Ville::find($id);
        $ville->delete();
        return back();
    } 
}
