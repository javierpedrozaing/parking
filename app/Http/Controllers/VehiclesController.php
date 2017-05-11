<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;
use App\parking;
use App\tariff;
use App\Http\Requests\CreateVehicleRequest;

class VehiclesController extends Controller
{
     public function show($placa)
	{
		// ir a buscar el carro por placa y mostrarlo en una vista 	
		$vehiculos = vehicle::find($id);
		dd($vehiculos);	
		return view('vehiculos.show', ['placa' => $placa]);
	}

	public function entry(CreateVehicleRequest $request){

		$placa = $request->input('placa');
		$lugar = $request->input('lugar_id');
		$tipo_vehiculo = $request->input('tipo_vehiculo');
		$tipo_tarifa = $request->input('tipo_tarifa');
		$tipo_vehiculo = intval($tipo_vehiculo);
		$lugar = intval($lugar);
		$tipo_tarifa = strval($tipo_tarifa);
		
		 
		// registramos datos del vehiculo
		$vehicle = vehicle::create([
			'placa' => $placa,
			'color' => 'negro',
			'descripcion' => '',
			'lugar_id' => $lugar,
			'user_id' => '1',
			'foto' => 'null',
			'fecha_ingreso' => '2017-05-02',
			'fecha_salida' => '2017-05-02',
			'hora_ingreso' => '03:10:00',
			'hora_salida' => '03:40:00',
			'type_vehicle_id' => $tipo_vehiculo,
		]);

		// consultamos lugar cambiamos de estado a ocupado
		$lugar_asignado = parking::find($lugar);
		$lugar_asignado->estado_id = 2;
		$lugar_asignado->save();		 

		// consultamos las tarifas del tipo de vehiculo que ingreso por fracción seleccionada
		$tarifa_tipo_vehiculo = tariff::where('type_vehicle_id', $tipo_vehiculo)->value($tipo_tarifa);
		
		// dd($tarifa_tipo_vehiculo);

		return redirect('/');
	
	}

	public function exit_vehicle(){
		
	}
}
