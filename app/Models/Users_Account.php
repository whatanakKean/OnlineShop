<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Account extends Model
{
    use HasFactory;
    protected $fillable = ['username','password','isSeller'];
}
