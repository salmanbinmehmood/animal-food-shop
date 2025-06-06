<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'message',
        'phone',
    ];
}
