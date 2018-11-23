<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    //la funcion view() devuelve la vista que se encuentra en resources/views
    public function mostrarFormulario(){
      return view('nuevoUsuario');
    }


    public function mostrarNuevoUsuario(){
      //muestro el dato que llega por post y devuelvo la vista
      echo $_POST['username'];
      return view('nuevoUsuario');
    }
}
