<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $product = DB::table('product') ->select('product_id','name','price','detail','image ,brand_id')->get();
        $promotion = DB::table('promotion') ->select('promotion_id','image')->get();
        $brand = DB::table('brand') ->select('brande_id','name')->get();
        return view ('/home')->with([
            'product' => $product,
            'brand' => $brand,
            'promotion' => $promotion,
        ]);

        
    }
    public function product()
    {
        $product = DB::table('product') ->select('product_id','name','price','detail','image ,brand_id')->get();
        $brand = DB::table('brand') ->select('brande_id','name')->get();
        return view ('/promotion')->with([
            'product' => $product,
            'promotion' => $promotion,
        ]);

    }
}
