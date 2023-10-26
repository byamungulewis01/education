<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'training_id',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
