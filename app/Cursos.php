<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $table='cursos';
    
    public $incrementing=true;
    protected  $primaryKey = 'id_curso';
    /*protected $fillable = [
        'id_curso','nombre','descripcion','precio','fecha_creacion'
        ];

        public function categoria()
        {
            return $this->belongsTo('App\Categoria');
        }

        public function adquirir()
        {
            return $this->hasMany('App\Adquirir');
        }

        public function clases()
        {
            return $this->hasMany('App\Clases');
        }*/
}
