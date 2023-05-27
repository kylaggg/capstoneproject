<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditableAppraisalFormController extends Controller
{
    public function displayEditableAppraisalForm() {
        return view('admin-pages.editable_appraisal_form');
    }
}
