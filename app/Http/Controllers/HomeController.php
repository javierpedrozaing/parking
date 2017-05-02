<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	function welcome(){
		$lugares_disponibles = []; // consulta a base de datos
		return view("welcome", ["lugares_disponibles" => $lugares_disponibles] );
	}


    function get_data_intro(){
    	 return response()
            ->json(['result' => 'ok'])
            ->withCallback($request->input('callback'));
    }
}
