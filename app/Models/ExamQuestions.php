<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestions extends Model
{
    use HasFactory;

    protected $table = 'examquestions';

    protected $fillable = [
        'examsModule_id',
        'question',
        'position',
        'value',
        'isComment'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function answers(){
        return $this->belongsTo(ExamQuestionAnswers::class, 'id', 'examQuestions_id');
    }
}
