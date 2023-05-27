<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluationYearController extends Controller
{
    public function displayEvaluationYear() {
        return view('admin-pages.evaluation_year');
    }
}
