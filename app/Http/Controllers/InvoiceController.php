<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        // Show invoices
        return view('invoices.index');  // Ensure you have the invoices.index view
    }
}
