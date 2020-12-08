<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamStudent;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ExamStudentController extends Controller
{
    public function index(Request $request) {
    $examStudent = Exam::all()->where("user_id", Auth::user()->id);
    return view('exam.index', compact('examStudent'));
}
}


 // $exams = Exam::all()->where("user_id", Auth::user()->id);


        // return view("exams.index", $exams);
