<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BecomePartner extends Model
{
     //
     protected $table = 'become_partner';
// protected $guard='blog';
protected $fillable = [
    'name',
    'email',
    'number',
    'subject',
    'message'
];
}
