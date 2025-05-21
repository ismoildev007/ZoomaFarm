<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    protected $fillable = [
    'title_uz',
    'title_ru',
    'title_en',
    'description_uz',
    'description_ru',
    'description_en',
    'image',
    'attachment',
];

}
