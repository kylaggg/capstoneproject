<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function displayEmployeeTable() {
        $accounts = Accounts::with('employee')->get();
        return view('admin-pages.employee_table')->with('accounts', $accounts);
    }
}
