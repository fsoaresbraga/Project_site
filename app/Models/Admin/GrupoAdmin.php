<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\ParticipanteAdmin;
class GrupoAdmin extends Model
{
    protected $table = 'grupos';

    public function participantes() {
        return $this->hasMany(ParticipanteAdmin::class, 'grupo_id', 'id');
    }
}
