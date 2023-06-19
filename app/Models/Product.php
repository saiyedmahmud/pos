<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    public function catagory(){
        $this->belongsTo('App\Models\Catagory', 'catagory_id', 'catagory_id' );
    }
    public function client(){
        $this->belongsTo('App\Models\Client', 'client_id', 'client_id' );
    }
    
}
