<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='rol';
    public $timestamps = false;
    public $incrementing=false;
    protected  $primaryKey = 'id_rol';
    /*protected $fillable = [
        'id_rol','descripcion'
        ];

        public function usuario()
        {
            return $this->hasMany('App\Usuario');
        }*/

}
