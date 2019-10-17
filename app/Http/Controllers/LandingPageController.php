<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();

        return view('landing-page')->with('products', $products);
    }
    public function products(){
        $products = Product::all()->toArray();
        echo "<pre>";
        print_r($products);
    }
}
