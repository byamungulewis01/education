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
        'is_payed',
        'payment_date',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
