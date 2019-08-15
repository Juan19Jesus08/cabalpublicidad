<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    protected $table='clases';
    public $timestamps = false;
    public $incrementing=true;
    protected  $primaryKey = 'id_clase';

    /*protected $fillable = [
        'id_clase','nombre','url','descripcion','duracion'
        ];

        public function cursos()
        {
            return $this->belongsTo('App\Cursos');
        }*/
        
        
}
