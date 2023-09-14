<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
        // 'deleted_at',
        'published_at'
        
    ];

    // protected $fillable = ['title', 'body', 'images', 'published_at'];

    protected $fillable = [
        'title',
        'body',
        'category',
        'phone_number',
        'weekday',
        'opening_time',
        'closing_time',
        'image',
        'video_url',
        'address',
        'address2',
        'country',
        'state',
        'city',
        'zip_code',
        'estb_year',
        'service',
        'iso_certified',
        'fax_number',
        'toll_free_number',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url',        
        'published_at'
    ];
}