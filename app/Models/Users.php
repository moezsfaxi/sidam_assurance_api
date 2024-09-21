<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;


    protected $table = 'users';

    protected $fillable = ['name','username','mail','password',
    'roleid','isActive','created_at','updated_at','isConnected',
    'last_login','last_logout','failed_attempts','last_attempt'];

 
    public $timestamps = false;
}
