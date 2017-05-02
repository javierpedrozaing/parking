<?php

namespace App\Libraries\Repositories;


use App\Models\Estacionamientos;
use Illuminate\Support\Facades\Schema;

class EstacionamientosRepository
{

	/**
	 * Returns all Estacionamientos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Estacionamientos::all();
	}

	public function search($input)
    {
        $query = Estacionamientos::query();

        $columns = Schema::getColumnListing('estacionamientos');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores Estacionamientos into database
	 *
	 * @param array $input
	 *
	 * @return Estacionamientos
	 */
	public function store($input)
	{
		return Estacionamientos::create($input);
	}

	/**
	 * Find Estacionamientos by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Estacionamientos
	 */
	public function findEstacionamientosById($id)
	{
		return Estacionamientos::find($id);
	}

	/**
	 * Updates Estacionamientos into database
	 *
	 * @param Estacionamientos $estacionamientos
	 * @param array $input
	 *
	 * @return Estacionamientos
	 */
	public function update($estacionamientos, $input)
	{
		$estacionamientos->fill($input);
		$estacionamientos->save();

		return $estacionamientos;
	}
}