<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auther extends Model
{
    use HasFactory;
    function getPosts()
    {
        return $this->hasMany(post::class);
    }
}