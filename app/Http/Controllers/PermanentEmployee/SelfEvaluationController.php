<?php

namespace App\Http\Controllers\PermanentEmployee;

use App\Http\Controllers\Controller;
use App\Models\FormQuestions;

use Illuminate\Http\Request;

class SelfEvaluationController extends Controller
{
    public function displaySelfEvaluationForm() {
        return view('pe-pages.pe_self_evaluation');
    }

    public function getQuestions(Request $request)
    {
        $SID = FormQuestions::where('table_initials', 'SID')->get();
        $SR = FormQuestions::where('table_initials', 'SR')->get();
        $S = FormQuestions::where('table_initials', 'S')->get();

        $data = [
            'success' => true,
            'SID' => $SID,
            'SR' => $SR,
            'S' => $S
        ];

        return response()->json($data);
    }

}
