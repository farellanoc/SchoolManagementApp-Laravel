<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Events\NewExam;
use App\Helpers\UserTypes;
use App\Http\Requests\ExamEditRequest;
use App\Http\Requests\ExamStoreRequest;
use App\Http\Requests\ExamUpdateRequest;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExamController extends Controller
{

    public function index(Request $request)
    {
        $exams = Exam::all();

        return view('exam.index', compact('exams'));
    }


    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        $subjects = Subject::all()->pluck('name','id');
        $students = User::where('type',UserTypes::getIdUserTypesByName('student'))->get()
            ->pluck('name','id');
        return view('exam.create', compact('subjects','students'));
    }

    
    /**
     * @param \App\Http\Requests\ExamStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamStoreRequest $request)
    {
        $exam = Exam::create($request->validated());

        event(new NewExam($exam));

        $request->session()->flash('exam.id', $exam->id);

        return redirect()->route('exam.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Exam $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Exam $exam)
    {
        $exams = Exam::all();

        return view('exam.show', compact('exam'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Exam $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Exam $exam)
    {
        $Subjects = Subject::all()->pluck('name','id');
        $students = User::where('type',UserTypes::getIdUserTypesByName('student'))->get()
            ->pluck('name','id');
        return view('exam.edit', compact('exam'), compact('subjects','students'));
    }

    /**
     * @param \App\Http\Requests\ExamUpdateRequest $request
     * @param \App\Models\Exam $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(EnrollmentUpdateRequest $request, Exam $exam)
    {
        $exam->update($request->validated());

        $request->session()->flash('exam.id', $exam->id);

        return redirect()->route('exam.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Exam $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Exam $exam)
    {
        $exam->delete();

        return redirect()->route('exam.index');
    }
}



