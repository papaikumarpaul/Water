<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
     protected $table = 'blog';
// protected $guard='blog';
protected $fillable = [
    'title',
    'slug',
    'image',
    'details',
    'tags',
    'image',
    'meta_tags',
    'meta_title',
    'meta_description',
];
}
