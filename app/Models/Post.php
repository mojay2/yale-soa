<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'title',
        'body',
        'status',
    ];

    protected $attributes = [
        'status' => 'pending',
    ];
}
