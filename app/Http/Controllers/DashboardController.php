<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Demo data for dashboard
        return view('dashboard', [
            'totalProducts' => 1200,           
            'totalOrders' => 800,              
            'ordersPercentage' => 70,         
            'totalInvoices' => 1500,           
            'invoicesPercentage' => 80,       
            'totalPayments' => 1300,           
            'paymentsPercentage' => 85,       
            'totalTickets' => 50,             
            'ticketsPercentage' => 60,         
            'productsPercentage' => 75,       
        ]);
    }
}
