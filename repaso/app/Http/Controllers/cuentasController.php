<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cuentasController extends Controller
{
    //function publica que recibe los dos parametros de la ruta y devuelve la suma
    public function sumar($n1,$n2){
      echo "<a href='/ejemplo'>ir a otro lado</a>";
      return $n1 + $n2;
    }
}
