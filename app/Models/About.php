<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'description_uz',
        'description_ru',
        'description_en',
        'description_title_uz',
        'description_title_ru',
        'description_title_en',
        'content_title_uz',
        'content_title_ru',
        'content_title_en',
        'about_or_company_uz',
        'about_or_company_ru',
        'about_or_company_en',
        'content_uz',
        'content_ru',
        'content_en',
        'clinical_trials',
        'insulin',
        'using_product',
        'percent',
        'image',
        'content_image',
    ];
}
