<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{

    public function validar_sesion(){
        




    }

    //
    public function index(){
        return view('login.index');
    }

    public function menu(){
        return "mostrar pagina de home";
    }

    public function mostrar_usuarios(){
        return "lista de usuarios del aplicativo";
    }
}
