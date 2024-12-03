<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     //
     protected $table = 'contact_from';
// protected $guard='blog';
protected $fillable = [
    'name',
    'email',
    'number',
    'subject',
    'message'
];
}
