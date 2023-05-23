<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function displayEmployeeTable() {
        return view('admin-pages.employee_table');
    }
}
