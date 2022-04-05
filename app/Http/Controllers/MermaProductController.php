<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\MermaProduct;
 
class MermaProductController extends Controller
{

    public function index()
    {
        $products = MermaProduct::with([
            'merma', 'group', 'category', 'product'
        ])->all();

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

        $product = MermaProduct::with([
            'merma', 'group', 'category', 'product'
        ])->find($id);

        return response()->json([
            'product' => $product
        ], 200);
    }
}