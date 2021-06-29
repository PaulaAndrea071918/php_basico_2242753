<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "employee";
     protected $primaryKey = "EmployeeId";
     public $timestamps = false;

     //Relacion 1:m a Compras

     public function compras(){
        return $this->hasManyThrough('App\Compra' ,
                                     'App\Cliente',
                                     'SupportRepId',
                                     'CustomerId' ,
                                      'EmployeeId' ,
                                     'CustomerId'  );
    }
}
