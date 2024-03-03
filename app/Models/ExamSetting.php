<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamSetting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'training_id',
        'questions_answers',
        'total_marks',
        'status'
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

}
