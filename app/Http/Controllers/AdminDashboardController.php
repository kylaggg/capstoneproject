<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function displayAdminDashboard()
    {
        return view('dashboard.admin_dashboard');
    }
}
