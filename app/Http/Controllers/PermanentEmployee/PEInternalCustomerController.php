<?php

namespace App\Http\Controllers\PermanentEmployee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PEInternalCustomerController extends Controller
{
    public function displayICOverview(){
        return view('pe-pages.pe_ic_overview');
    }
}
