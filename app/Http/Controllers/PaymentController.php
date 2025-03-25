<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        // Show payment history
        return view('payments.index');  // Ensure you have the payments.index view
    }
}
