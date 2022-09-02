<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table='Participantes';
    protected $fillable = ['grupo_id','nome','departamento', 'email'];
}
