<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;

class VehiculosController extends Controller
{
    public function show($id)
	{
		// ir a buscar el carro por placa y mostrarlo en una vista 
		
		$vehiculos = Vehiculo::find($id);
		dd($vehiculos);	
		return view('vehiculos.show', ['placa' => $placa]);
	}
}
