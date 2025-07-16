<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinyUrl extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_url',
        'short_url',
        'location',
        'ip_address',
        'browser',
        'device',
        'active'
    ];

    
}
