<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BecomeSupplier extends Model
{
     //
     protected $table = 'become_supplier';
// protected $guard='blog';
protected $fillable = [
    'name',
    'email',
    'number',
    'subject',
    'message'
];
}
