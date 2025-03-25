<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Show profile page
        return view('profile.index');  // Ensure you have the profile.index view
    }
}
