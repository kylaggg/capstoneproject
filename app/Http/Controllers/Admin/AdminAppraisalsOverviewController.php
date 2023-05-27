<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAppraisalsOverviewController extends Controller
{
    public function displayAdminAppraisalsOverview() {
        return view('admin-pages.admin_appraisals_overview');
    }
}
