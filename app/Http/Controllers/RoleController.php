<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // Get the list of roles
        return view('roles.index');  // Ensure you have the roles.index view
    }
}
