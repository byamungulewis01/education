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
        'user_id',
        'imageName',
        'price',
        'status',
        'exam_status',
        'category_id',
        'exam_duration',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    public function students()
    {
        return Enroll::where('training_id', $this->id)->count();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function quetions()
    {
        return $this->hasMany(Question::class);
    }
}
