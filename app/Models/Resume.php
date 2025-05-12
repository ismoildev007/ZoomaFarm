<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'position_applied',
        'cv_file',
        'status',
        'cover_letter',
    ];
}
