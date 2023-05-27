<?php

namespace App\Http\Controllers\PermanentEmployee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PEDashboardController extends Controller
{
    public function displayPEDashboard(){
        return view('pe-pages.pe_dashboard');
    }
}
