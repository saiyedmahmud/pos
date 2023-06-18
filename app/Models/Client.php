<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'client_id';
    public function getProduct(){
        return $this->hasMany('App\Models\Product', 'product_id', 'product_id');
    }
}
