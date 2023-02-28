<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    function authorName (){
        return $this->belongsTo(auther::class,'auther_id');
    }
}
