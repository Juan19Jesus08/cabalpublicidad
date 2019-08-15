<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adquirir extends Model
{
    protected $table='adquirir';
    protected $fillable = [
        'fecha_de_adquisicion','avance','certificado','comentario','calificacion'
        ];

    

}
