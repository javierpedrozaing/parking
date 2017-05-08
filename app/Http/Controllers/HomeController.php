<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugares;

class HomeController extends Controller
{
	function welcome(){
		$lugares_disponibles = Lugares::all();

		//dd($lugares_disponibles); // para imprimir datos por consola
		return view("welcome", ["lugares_disponibles" => $lugares_disponibles] );
	}


    function get_data_intro(){
    	 return response()
            ->json(['result' => 'ok'])
            ->withCallback($request->input('callback'));
    }
}
