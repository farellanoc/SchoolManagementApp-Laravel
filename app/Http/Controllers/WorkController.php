<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Events\NewWork;
use App\Helpers\UserTypes;
use App\Helpers\WeekDays;
use App\Http\Requests\WorkEditRequest;
use App\Http\Requests\WorkStoreRequest;
use App\Http\Requests\WorkUpdateRequest;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WorkController extends Controller
{

    public function index(Request $request)
    {
        $works = Work::all();

        return view('work.index', compact('works'));
    }


    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        $days = config('calendar.days');
        $subjects = Subject::all()->pluck('name','id');
        $students = User::where('type',UserTypes::getIdUserTypesByName('student'))->get()
            ->pluck('name','id');
        return view('work.create', compact('subjects','students','days'));
    }

    
    /**
     * @param \App\Http\Requests\WorkStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkStoreRequest $request)
    {
        $work = Work::create($request->validated());

        event(new NewWork($work));

        $request->session()->flash('work.id', $work->id);

        return redirect()->route('work.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Work $work)
    {
        $works = Work::all();

        return view('work.show', compact('work'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Work $work)
    {
        $days = config('calendar.days');
        $subjects = Subject::all()->pluck('name','id');
        $students = User::where('type',UserTypes::getIdUserTypesByName('student'))->get()
            ->pluck('name','id');

        $selectedDays = WeekDays::stringDaysToNumberArray($work->days);

        return view('work.edit', compact('work'), compact('subjects','days','students','selectedDays'));
    }

    /**
     * @param \App\Http\Requests\ExamUpdateRequest $request
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function update(WorkUpdateRequest $request, Work $work)
    {
        $work->update($request->validated());

        $request->session()->flash('work.id', $work->id);

        return redirect()->route('work.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Work $work)
    {
        $work->delete();

        return redirect()->route('work.index');
    }
}
