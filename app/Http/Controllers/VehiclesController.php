<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;
use App\parking;
use App\Http\Requests\CreateVehicleRequest;

class VehiclesController extends Controller
{
     public function exit($placa)
	{
		// ir a buscar el carro por placa y mostrarlo en una vista 	
		$vehiculos = vehicle::find($id);
		dd($vehiculos);	
		return view('vehiculos.show', ['placa' => $placa]);
	}

	public function entry(CreateVehicleRequest $request){

		$placa = $request->input('placa');
		$lugar = $request->input('lugar_id');
		$lugar = intval($lugar);

		// dd($lugar);
		$vehicle = vehicle::create([
			'placa' => $placa,
			'color' => 'negro',
			'descripcion' => '',
			'lugar_id' => $lugar,
			'user_id' => '1',
			'foto' => 'null',
			'tipo_vehiculo' => $request->input('tipo_carro'),
		]);

		$lugar_asignado = parking::find($lugar);
		$lugar_asignado->estado_id = 2;
		$lugar_asignado->save();		 
		
		// dd($vehicle);

		return redirect('/');
	

	}
}
