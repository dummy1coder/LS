<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product; 

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // get all products from the database

        return view('Frontend.product', compact('products'));
    }
}


