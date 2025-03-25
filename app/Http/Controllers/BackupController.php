<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function index()
    {
        // Show database backup page
        return view('backup.index');  // Ensure you have the backup.index view
    }
}
