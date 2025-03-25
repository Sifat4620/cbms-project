<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function profitLoss()
    {
        // Show profit and loss report
        return view('reports.profit_loss');  // Ensure you have the reports.profit_loss view
    }

    public function expenses()
    {
        // Show expenses report
        return view('reports.expenses');  // Ensure you have the reports.expenses view
    }
}
