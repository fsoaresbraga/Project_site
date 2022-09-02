<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaysWorship extends Model
{
    protected $table = 'days_worships';

    protected $fillable = [
        'church_id', 'Sunday', 'youth_meeting', 'Tuesday',
        'Wednesday', 'Thursday', 'friday', 'saturday'
    ];
}

