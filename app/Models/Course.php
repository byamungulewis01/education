<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'school_id',
        'program_id',
        'price',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
