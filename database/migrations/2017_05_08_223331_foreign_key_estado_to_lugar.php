<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyEstadoToLugar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lugar', function (Blueprint $table) {
            $table->integer('estado_id')->unsigned()->index()->nullable()->change(); 
            $table->foreign('estado_id')->references('id')->on('estados_lugar');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lugar', function (Blueprint $table) {
            //
        });
    }
}
