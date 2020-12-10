<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\WorkStudent;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class WorkStudentController extends Controller
{
    public function index(Request $request) {
    $workStudent = Work::all()->where("user_id", Auth::user()->id);
    return view('workStudent.index', compact('workStudent'));
}
}
