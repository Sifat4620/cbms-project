<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Show orders list
        return view('orders.index');  // Ensure you have the orders.index view
    }

    public function clientOrders()
    {
        // Show client orders list
        return view('orders.client_orders');  // Ensure you have the client_orders view
    }
}
