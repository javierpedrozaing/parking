<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estacionamientos extends Model
{
    
	public $table = "estacionamientos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "identificador"
	];

	public static $rules = [
	    "identificador" => "required"
	];

}
