<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListAdd extends Model
{
    //
    protected $table = 'list_ads';
    
    protected $fillable = [
        'name',
        'email',
        'number',
        'subject',
        'message'
    ];
}
