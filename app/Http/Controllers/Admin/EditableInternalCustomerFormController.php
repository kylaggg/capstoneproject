<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditableInternalCustomerFormController extends Controller
{
    public function displayEditableInternalCustomerForm()
    {
        return view('admin-pages.editable_ic_form');
    }
}
