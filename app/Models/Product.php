<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    public function catagory(){
        return $this->belongsTo(Catagory::class, 'catagory_id', 'catagory_id' );
    }
    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'client_id' );
    }

}
