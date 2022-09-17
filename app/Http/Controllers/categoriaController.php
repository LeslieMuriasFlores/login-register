<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriaController extends Controller
{
    //
    public function mostrar_categorias(){
        return "Mostarndo todas las categorias existentes en la BD";

    }

    public function mostrar_form($id){
        return view('categoria.form', ['form' => $id]);

        //usar compact('curso');

    } 


}
