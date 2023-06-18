<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $primaryKey = 'catagory_id';
    public function getproduct(){
        return $this->hasMany('App\Models\Product', 'product_id', 'product_id');
    }
}
