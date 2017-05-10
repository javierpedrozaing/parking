<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parking;

class HomeController extends Controller
{
	function welcome(){
		$lugares_disponibles = parking::where('estado_id', 1)->get();
		//dd($lugares_disponibles); // para imprimir datos por consola
		return view("welcome", ["lugares_disponibles" => $lugares_disponibles] );
	}

    function get_data_intro(){
    	 return response()
            ->json(['result' => 'ok'])
            ->withCallback($request->input('callback'));
    }
}
