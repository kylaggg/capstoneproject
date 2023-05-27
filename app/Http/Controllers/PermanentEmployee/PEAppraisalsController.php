<?php

namespace App\Http\Controllers\PermanentEmployee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PEAppraisalsController extends Controller
{
    public function displayPEAppraisalsOverview() {
        return view('pe-pages.pe_appraisals_overview');
    }
}
