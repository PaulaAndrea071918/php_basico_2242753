<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{

    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

     //ESTABLECER RELACION 1 ARTISTA - M DISCOS
     public function discos(){
        //hasmany: parametros
        //1. Modelo a relacionar
        //2. FK del artista(papa) en los discos(hijo)
        return $this->hasMany('App\Disco' ,'ArtistId');
    }

    //ESTABLECER RELACION 1 ARTISTA -M CANCION
    public function canciones(){
        //hasManyThrough: Establecer relacion 1M con tabla inermedia


        return $this->hasManyThrough('App\Cancion' ,
                                     'App\Disco' ,
                                     'ArtistId',
                                     'AlbumId',
                                     'ArtistId',
                                     'AlbumId');
    }
}
