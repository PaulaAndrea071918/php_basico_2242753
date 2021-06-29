<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaReproduccion extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    //Relacion m:n entre lista de reproducciones y canciones
    public function canciones(){
        //belongsToMany(Para muchos a muchos con trabla intermedia)

        //parametros //1. modelo a relacionar
                     //2. La tabla pivote
                     //3. FK del modelo actual povote
                     //4. FK del modelo a relacionar en el pivote

        return $this->belongsToMany('App\Cancion',
                             'playlisttrack' ,
                             'PlaylistId',
                             'TrackId'
                            );


    }
}
