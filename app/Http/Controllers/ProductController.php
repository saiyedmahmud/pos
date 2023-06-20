<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Catagory;
use App\Models\Client;
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
        return view('tables')->with($data);
        // return response()->json($data, 200);
    }

    public function createproduct(Request $request){
        if($request->isMethod('post')){
        $product = new Product;
        $product->p_code = $request['productCode'];
        $product->buying_price = $request['buyingPrice'];
        $product->selling_price = $request['sellingPrice'];
        $product->in_stock = $request['inStock'];
        $product->total_stock = $request['totalStock'];
        $product->available_color = $request['availableColor'];
        $product->available_size = $request['availableSize'];
        $product->client_id = $request['clientId'];
        $product->catagory_id = $request['CatagoryId'];
        $product->save();
    }

    $categories = Catagory::query()->orderBy("created_at", "DESC")->get(); 
    $clients = Client::query()->orderBy("created_at", "DESC")->get();

        return view('addProduct', compact("categories", "clients"));
    }

}
