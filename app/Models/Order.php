<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function book() {
        return $this->belongsTo('App\Models\Book');
    }
    public function vendor() {
        return $this->belongsTo('App\Models\Vendor');
    }
}
