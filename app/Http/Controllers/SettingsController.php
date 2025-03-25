<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        // Show settings page
        return view('settings.index');  // Ensure you have the settings.index view
    }
}
