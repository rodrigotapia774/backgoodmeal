<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Product;
 
class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return response()->json([
            'products' => $products
        ], 200);
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {

        $product = Product::find($id);

        return response()->json([
            'product' => $product
        ], 200);
    }
}