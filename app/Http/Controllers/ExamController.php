<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function index(Request $request)
    {
        $exams = Exam::all();

        return view('exam.index', compact('exams'));
    }
}
