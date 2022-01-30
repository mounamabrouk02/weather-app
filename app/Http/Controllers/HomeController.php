<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $key = env("WEATHER_API_KEY");
        $ville = $request->get("ville", "Paris");
        $response = Http::get("http://api.weatherstack.com/current?access_key=$key&query=$ville&units=m");
        $data = $response->object();
        if (!isset($data->current)) {
            return view("dashboard", [
                "error" => true,
                "ville" => $ville
            ]);
        }
        return view("dashboard", [
            "ville" => $ville,
            "data" => $data->current
        ]);
    }
}
