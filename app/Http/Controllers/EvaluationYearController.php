<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationYearController extends Controller
{
    public function displayEvaluationYear() {
        return view('admin-pages.evaluation_year');
    }
}
