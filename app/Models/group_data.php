<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group_data extends Model
{
    use HasFactory;
    public function postedBy(){
        return $this->belongsToMany(user_data::class);
    }
}
