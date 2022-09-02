<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $table = 'churches';

    protected $fillable = [
        'name', 'city', 'state', 'latitude', 'longitude', 'status',
    ];
}
