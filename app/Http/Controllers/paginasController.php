<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class paginasController extends Controller
{
    public function contactos(){
    	
    	return view('contacto')->with(['nombreapellido' => 'pablo salinas', 'curso'=>'sd']);
    }
}
