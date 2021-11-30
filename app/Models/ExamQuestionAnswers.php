<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestionAnswers extends Model
{
    use HasFactory;

    protected $table = 'examquestionanswers';

    protected $fillable = [
        'examQuestions_id',
        'answer',
        'position',
        'value',
        'isActive'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
