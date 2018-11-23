<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculasController extends Controller
{
    //metodo con array estatico para recorrer
    public function listarArray(){
      $peliculas = ["Avatar","Rambo","Titanic"];

      foreach($peliculas as $peli){
        echo $peli."<br>";
      }
    }
    //metodo con array de la base de datos usando modelos para recorrer
    public function listarBD(){
      //Desde la logica (aca en el controlador), accedo a datos de la base de datos, a travez del modelo App/pelicula
      $peliculas = \App\pelicula::all();

      foreach($peliculas as $peli){
        echo $peli->title." - ".$peli->rating."<br>";
      }
    }


    public function peliculaporid($id){
      // \App\pelicula es el modelo. find es el metodo para buscar por id
      $pelicula = \App\pelicula::find($id);

      echo $pelicula->title;
    }

    public function peliculapornombre($nombre){
      //si armamos querys propias, se termina con get() para obtener el resultado
      $peliculas = \App\pelicula::where('title','=',$nombre)->get();
      foreach ($peliculas as $peli) {
          echo $peli->title."<br>";
      }

    }
}
