<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFiledsToVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehiculo', function (Blueprint $table) {                        
            $table->string("tipo_vehiculo");            
            $table->string("descripcion");
            $table->integer("lugar_id");
            $table->integer("user_id");                
            $table->string("foto");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Vehiculo', function (Blueprint $table) {
            //
        });
    }
}
