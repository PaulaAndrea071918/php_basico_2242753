<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get("variables" , function(){

    $mensaje = 20;
    // el var_dump sirve para analizar el contenido de una variable
    // analizando el tipo de dato, datos contenidos
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Hola tu";
    var_dump($mensaje);

} );

Route:: get('arreglos' , function(){
  //definicion de un areglo en php
  //Tamaño numero de elementos en este caso 3
   $estudiantes = [ "1"=> "Ana" ,
                    "2" => "Maria" ,
                    "3" => "Jorgue"];
   echo"<pre>";
   print_r($estudiantes);
   echo "</pre>";



} );

Route::get('paises' , function(){

     $paises = [
         "Colombia" => [
             "capital" => "Bogota",
             "moneda" => "Peso",
             "poblacion"=> 51
         ],

         "Peru" => [

            "capital" => "Lima",
             "moneda" => "Sol",
             "poblacion"=> 33.19

         ],

         "Paraguay" => [

            "capital" => "Asuncion",
            "moneda" => "Guarani",
            "poblacion"=> 7

         ]
     ];

     foreach($paises as $indice => $valor){
         echo "<h1> $indice <h1>";
         echo"<pre>";
         print_r($valor ["capital"]);
         echo "</pre>";
         echo"<hr />";
     }


});
