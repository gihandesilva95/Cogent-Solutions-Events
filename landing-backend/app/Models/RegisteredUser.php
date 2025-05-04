<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisteredUser extends Model
{
    
    use HasFactory;

    protected $table = 'registered_users';

    protected $fillable = [
        'full_name',
        'email',
        'message',
    ];

}
