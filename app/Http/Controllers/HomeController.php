<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parking;
use App\type_vehicle;

class HomeController extends Controller
{
	function welcome(){

		$tipo_vehiculos = type_vehicle::all();

		$lugares_disponibles = parking::where('estado_id', 1)->get();
		//dd($lugares_disponibles); // para imprimir datos por consola
		return view("welcome", ["lugares_disponibles" => $lugares_disponibles, "tipo_vehiculos" => $tipo_vehiculos	] );
	}

    function list_parkings(){
    	 
    }
}
