<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientConsultancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id' , 'consultance_id',
    ];
}
