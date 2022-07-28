<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table = 'vendors';

    public function books() {
        return $this->hasMany('App\Models\Book');
    }
    public function users() {
        return $this->hasMany('App\Models\User');
    }
}
