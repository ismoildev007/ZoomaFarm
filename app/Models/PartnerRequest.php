<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerRequest extends Model
{
    protected $fillable = [
        'company_name',
        'contact_person',
        'phone',
        'email',
        'message',
        'status',
        'inn',
    ];
}
