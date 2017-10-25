<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use laravel\Http\Requests;
use laravel\usuario;
use Illuminate\Support\Facades\Redirect;
use laravel\Requests\BuscadorFormRequest;
use DB;


class Buscadorcontroller extends Controller
{
    public function __construct(){



    }

     public function index(Request $request){
    	if ($request){
    		$query=trim($request->get('searchText'));
    		$buscador = DB::table('user')->where('username','LIKE','%'.$query.'%') 
            -> orwhere('usertitle','LIKE','%'.$query.'%')
            -> orwhere('email','LIKE','%'.$query.'%')
            ->orwhere('passworddate','LIKE','%'.$query.'%')
    		->orderBy('userid','asc') 
    		->paginate(15);
    		//dd($buscador);
    		return view('buscador',["buscador"=>$buscador,"searchText"=>$query]);
    	}
    }

    public function create(){
        return view("administrador.create");
    }

    public function store(BuscadorFormRequest $request){
        $Buscador = new usuario;
        $Buscador ->usertitle=$request->get('usertitle');
        $Buscador ->username=$request->get('username');
        $Buscador ->email=$request->get('email');
        $Buscador ->passworddate=$request->get('passworddate');
        $Buscador ->save();
        return Redirect::to('Buscador');
    }
    public function show($id){
        return view("buscador.show",["Buscador"=>usuario::findOrFail($id)]);
    }

    public function edit($id){
        return view("buscador.edit",["buscador"=>usuario::findOrFail($id)]);
    }
    public function update(BuscadorFormRequest $request,$id){
        
        $Buscador ->usertitle=$request->get('usertitle');
        $Buscador ->username=$request->get('username');
        $Buscador ->email=$request->get('email');
        $Buscador ->passworddate=$request->get('passworddate');
        $Buscador->update();
        return Redirect::to('Buscador');
    }
    public function destroy($id){
        $Buscador=usuario::findOrFail($id);
        return Redirect::to('Buscador');
    }
}