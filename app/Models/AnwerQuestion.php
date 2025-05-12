<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerQuestion extends Model
{
    protected $fillable = [
        'question_uz',
        'question_ru',
        'question_en',
        'answer_uz',
        'answer_ru',
        'answer_en',
    ];
}
