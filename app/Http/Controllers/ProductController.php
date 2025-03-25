<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Show products list
        return view('products.index');  // Ensure you have the products.index view
    }
}
