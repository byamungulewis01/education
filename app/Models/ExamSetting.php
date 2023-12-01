<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'training_id',
        'questions_answers',
        'total_marks',
        'status'
    ];
}
