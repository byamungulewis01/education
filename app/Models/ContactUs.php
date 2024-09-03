<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'header_section',
        'company_desc_title',
        'company_descr',
        'addr_title',
        'company_addr_details',
        'contact_title',
        'contact_details',
        'head_phone',
        'head_email',
        'branch_phone',
        'branch_email',
    ];
}
