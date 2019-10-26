<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return voidphp
     */


    public function index()
    {   $products =product::inRandomOrder()->take(5)->get();

        return view('home.index')->with('products',$products);
    }
    public function show(product $product){

        return view('home.show', compact('product'))->with('product', $product);

    }
}



