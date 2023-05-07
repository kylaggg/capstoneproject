<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // User Authentication
    
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
}
