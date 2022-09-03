<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;

class DaysWorship extends Model
{
    use UuidTrait;

    public $incrementing = false;

    protected $keyType = 'uuid';
    
    protected $table = 'days_worships';

    protected $fillable = [
        'church_id', 'monday', 'sunday', 'youth_meeting', 'tuesday',
        'wednesday', 'thursday', 'friday', 'saturday'
    ];
}

