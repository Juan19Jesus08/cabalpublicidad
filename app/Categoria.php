<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';
    public $timestamps = false;
    public $incrementing=true;
    protected  $primaryKey = 'id_categoria';

   /* protected $fillable = [
        'id_categoria','descripcion'
        ];

        public function curso()
        {
            return $this->hasMany('App\Cursos');
        }*/
}
