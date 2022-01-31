<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Ville;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(Request $request)
    {

        $villesfav = Ville::where(['user_id' => Auth::id() ])->get();
        if(!$villesfav){
            return view("dashboard", [
                "error" => true,
                "errorMsg"=>"Veuillez sélectionner une ville",
                "ville" => $ville,
                "villesfav" => $villesfav
            ]);
        }
        $key = env("WEATHER_API_KEY");
        $ville = $request->get("ville");
        $response = Http::get("http://api.weatherstack.com/current?access_key=$key&query=$ville&units=m");
        $data = $response->object();
        if (!isset($data->current)) {
            return view("dashboard", [
                "error" => true,
                "ville" => $ville,
                "villesfav" => $villesfav
            ]);
        }
        return view("dashboard", [
            "ville" => $ville,
            "data" => $data->current,
            "villesfav" => $villesfav
        ]);
    }
}
