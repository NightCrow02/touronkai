<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_data extends Model
{
    use HasFactory;
    protected $table = 'user_datas'; // Specify the table name if not following Laravel's naming convention

    protected $fillable = [
        'nim',
        'email',
        'password',
        'rememberToken',
        // Add other columns as needed
    ];
    public function userpost(){
        return $this->hasMany(post_data::class);
    }
    public function usergroup(){
        return $this->hasMany(group_data::class);
    }
}
