<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    use UuidTrait;


    public $incrementing = false;

    protected $keyType = 'uuid';
    
    protected $table = 'churches';

    protected $fillable = [
       'user_id', 'code', 'name', 'city', 'state',
       'phone', 'latitude', 'longitude', 'status',
    ];


    public function daysWorship() {
        return $this->hasOne(DaysWorship::class, 'church_id', 'id');
    }
}