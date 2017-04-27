<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function get_data_intro(){
    	 return response()
            ->json(['result' => 'ok'])
            ->withCallback($request->input('callback'));
    }
}
