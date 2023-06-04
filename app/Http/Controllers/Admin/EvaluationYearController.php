<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EvalYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EvaluationYearController extends Controller
{
    public function viewEvaluationYears()
    {
        return view('admin-pages.evaluation_years');
    }

    public function displayEvaluationYear()
    {
        $evalyears = EvalYear::all();
        return response()->json(['success' => true, 'evalyears' => $evalyears]);
    }

    public function addEvalYear(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sy_start' => 'required',
            'sy_end' => 'required',
            'kra_start' => 'required',
            'kra_end' => 'required',
            'pr_start' => 'required',
            'pr_end' => 'required',
            'eval_start' => 'required',
            'eval_end' => 'required'
        ], [
                'sy_start.required' => 'Please choose a date for the start of the school year.',
                'sy_end.required' => 'Please enter an Adamson email address.',
                'kra_start.required' => 'Please enter a valid email address.',
                'kra_end.required' => 'Please enter an employee number.',
                'pr_start.required' => 'Please enter a valid employee number.',
                'pr_end.required' => 'Please enter the employee\'s first name.',
                'eval_start.required' => 'Please enter the employee\'s last name.',
                'eval_end.required' => 'Please choose a user level.',
            ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('startNewEvalYear', true);
        } else {
            $eval_year = EvalYear::create([
                'sy_start' => $request->input('sy_start'),
                'sy_end' => $request->input('sy_end'),
                'kra_start' => $request->input('kra_start'),
                'kra_end' => $request->input('kra_end'),
                'pr_start' => $request->input('pr_start'),
                'pr_end' => $request->input('pr_end'),
                'eval_start' => $request->input('eval_start'),
                'eval_end' => $request->input('eval_end')
            ]);

            return response()->json(['success' => true]);
        }
    }
}
