<?php

namespace App\Http\Controllers;

use App\Events\NewExam;
use App\Http\Requests\ExamStoreRequest;
use App\Http\Requests\ExamUpdateRequest;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExamController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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
        return view('exam.create');
    }

    /**
     * @param \App\Http\Requests\ExamStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamStoreRequest $request)
    {
        $exam = Exam::create($request->validated());

        event(new NewExam($exam));

        $request->session()->flash('exam.name', $exam->name);

        return redirect()->route('exam.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Exam $course)
    {
        $exams = Exam::all();

        return view('exam.show', compact('exam'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Exam $exam)
    {
        $exam = $exam->toArray();
        $exam['date_start'] = Carbon::parse($exam['date_start'])->format('Y-m-d');
        $exam['date_end'] = Carbon::parse($exam['date_end'])->format('Y-m-d');
        $exam = (object)$exam;

        return view('exam.edit', compact('exam'));
    }

    /**
     * @param \App\Http\Requests\ExamUpdateRequest $request
     * @param \App\Models\Exam $Exam
     * @return \Illuminate\Http\Response
     */
    public function update(ExamUpdateRequest $request, Exam $exam)
    {
        $exam->update($request->validated());

        $request->session()->flash('exam.id_exam', $exam->id);

        return redirect()->route('exam.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Exam $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Exam $course)
    {
        $exam->delete();

        return redirect()->route('exam.index');
    }
}
