<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Catagory;
use App\Models\Client;
use GuzzleHttp\Psr7\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::query()
            ->with(["catagory", "client"])
            ->orderBy("created_at", "DESC")
            ->get();

        $data = compact('products');
        return view('tables')->with($data);
    }

    public function goToCreatePage()
    {
        $categories = Catagory::query()->orderBy("created_at", "DESC")->get();
        $clients = Client::query()->orderBy("created_at", "DESC")->get();

        return view('addProduct', compact("categories", "clients"));
    }

    public function createProduct(AddProductRequest $request)
    {
            $product = new Product;
            $product->p_code = $request->get('product_code');
            $product->buying_price = $request->get('buying_price');
            $product->selling_price = $request->get("selling_price");
            $product->in_stock = $request->get("in_stock") == "on" ? "yes" : "no";
            $product->total_stock = $request->get('total_stock');
            $product->available_color = $request->get('available_color');
            $product->available_size = $request->get('available_size');
            $product->client_id = $request->get('client_id');
            $product->catagory_id = $request->get('category_id');
            $product->save();

            return redirect()->route('product.all')->with('product-created', 'Product added successfully');
    }

    public function editProduct(Request $request , $id)
    {
        $product = Product::query()->find($id);
        $categories = Catagory::query()->orderBy("created_at", "DESC")->get();
        $clients = Client::query()->orderBy("created_at", "DESC")->get();

        if(!$product){
            return redirect()->route('product.all')->with('product-not-found', 'Product not found');
        }

        return view('editProduct', compact('product', 'categories', 'clients'));
    }

    public function updateProduct(AddProductRequest $request, $id)
    {
        $product = Product::query()->find($id);

        if(!$product){
            return redirect()->route('product.all')->with('product-not-found', 'Product not found');
        }

        $product->p_code = $request->get('product_code');
        $product->buying_price = $request->get('buying_price');
        $product->selling_price = $request->get("selling_price");
        $product->in_stock = $request->get("in_stock") == "on" ? "yes" : "no";
        $product->total_stock = $request->get('total_stock');
        $product->available_color = $request->get('available_color');
        $product->available_size = $request->get('available_size');
        $product->client_id = $request->get('client_id');
        $product->catagory_id = $request->get('category_id');
        $product->save();

        return redirect()->route('product.all')->with('product-created', 'Product updated successfully');
    }

}
