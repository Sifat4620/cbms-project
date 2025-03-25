<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        // Show tickets
        return view('tickets.index');  // Ensure you have the tickets.index view
    }

    public function history()
    {
        // Show ticket history
        return view('tickets.history');  // Ensure you have the tickets.history view
    }
}
