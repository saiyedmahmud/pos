<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function products(){
        $products = DB::table('products')
        ->join('catagories', 'products.catagory_id', 'catagories.catagory_id')
        ->join('clients', 'products.client_id', 'clients.client_id' )
        ->select('products.*', 'catagories.catagory_name', 'clients.name')
        ->get();
        $data = compact('products');
        // return view('tables')->with($data);
        return response()->json($data, 200);
    }
}
