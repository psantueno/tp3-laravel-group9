<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    protected $table = 'commentaries';

    protected $fillable = [
        'username',
        'email',
        'content',
    ];
}
