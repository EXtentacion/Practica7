<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{

    public function metodoInicio(){
        return view('inicio');
    }
    public function metodoScreen1(){
        return view('Screen1');
    }
    public function metodoScreen2(){
        return view('Screen2');
    }

    public function metodoGuardar(validadorFormDiario $request){
        

        return redirect('/Screen1')->with('confirmacion', 'Tu recuerdo llego al controlador');
    }
}