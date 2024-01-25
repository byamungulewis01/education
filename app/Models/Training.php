<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'user_id',
        'price',
        'status',
        'exam_status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
