<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function displayEmployeeTable() {
        return view('admin-pages.employee_table');
    }
}
