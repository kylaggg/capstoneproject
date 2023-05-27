<?php

namespace App\Http\Controllers\ImmediateSuperior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ISAppraisalsOverviewController extends Controller
{
    public function displayISAppraisalsOverview() {
        return view('is-pages.is_appraisals_overview');
    }
}
