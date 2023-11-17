<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'training_id',
        'choice_one',
        'choice_two',
        'choice_three',
        'choice_four',
        'answer',
        'marks',

    ];
}
