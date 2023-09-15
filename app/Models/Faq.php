<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
        // 'deleted_at',
        'published_at',
    ];

    protected $listing = ['title', 'body', 'status', 'published_at'];
}
