<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    public $timestamps = false;
   

    /*protected $fillable = [
        'email','nombre','password'
        ];

        public function rol()
        {
            return $this->belongsTo('App\Rol');
        }

        public function adquirir()
        {
            return $this->hasMany('App\Adquirir');
        }

        public function cursos_completados()
        {
            return $this->hasMany('App\Cursos_Completados');
        }*/
}
