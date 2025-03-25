<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Get the list of users
        return view('users.index');  // Ensure you have the users.index view
    }
}
