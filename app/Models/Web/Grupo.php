<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';
    protected $fillable = ['nome','descricao','tipo_evento','status'];
}
