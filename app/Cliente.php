<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false;

    //Relacion 1:m con compra
    public function compras(){
        return $this->hasMany('App\Compra' ,'CustomerId');
    }
}