<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EvalYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $sy = '_' . $request->input('sy_start') . '_' . $request->input('sy_end');

            // Appraisals Table
            Schema::connection('mysql')->create('appraisals' . $sy, function($table){
                $table->bigIncrements('appraisal_id');
                $table->string('evaluation_type');
                $table->integer('employee_id');
                $table->integer('evaluator_id')->nullable();
                $table->date('date_submitted')->nullable();
                $table->string('status');
                $table->binary('signature')->nullable();
            });

            Schema::connection('mysql')->create('form_questions' . $sy, function($table){
                $table->bigIncrements('question_id');
                $table->string('form_type');
                $table->string('table');
                $table->text('question');
                $table->integer('question_order');
            });

            Schema::connection('mysql')->create('appraisal_answers' . $sy, function ($table) {
                $table->bigIncrements('appraisal_answer_id');
                $table->integer('appraisal_id')->nullable();
                $table->integer('kra_id')->nullable();
                $table->integer('question_id')->nullable();
                $table->decimal('score');
            });

            Schema::connection('mysql')->create('kras' . $sy, function ($table) {
                $table->bigIncrements('kra_id');
                $table->integer('appraisal_id');
                $table->text('kra')->nullable();
                $table->decimal('kra_weight')->nullable();
                $table->text('objective')->nullable();
                $table->text('performance_indicator')->nullable();
                $table->text('actual_result')->nullable();
                $table->decimal('weighted_total')->nullable();
                $table->integer('kra_order');
            });

            Schema::connection('mysql')->create('learning_development_plans' . $sy, function ($table) {
                $table->bigIncrements('development_plan_id');
                $table->integer('appraisal_id');
                $table->text('learning_need')->nullable();
                $table->text('methodology')->nullable();
                $table->integer('development_plan_order');
            });

            Schema::connection('mysql')->create('work_performance_plans' . $sy, function ($table) {
                $table->bigIncrements('performance_plan_id');
                $table->integer('appraisal_id');
                $table->text('continue_doing')->nullable();
                $table->text('stop_doing')->nullable();
                $table->text('start_doing')->nullable();
                $table->integer('performance_plan_order');
            });

            Schema::connection('mysql')->create('comments' . $sy, function ($table) {
                $table->bigIncrements('comment_id');
                $table->integer('appraisal_id');
                $table->text('customer_service')->nullable();
                $table->text('suggestion')->nullable();
                $table->integer('comment_order');
            });

            return redirect()->back()->with('success', 'Evaluation Year added successfully.');        }
    }
}
