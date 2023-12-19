<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $table = 'feed';

    protected $fillable = [
        'name',
        'email',
        'rating',
        'feedback',
        'contact',
    ];
}
