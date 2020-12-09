<?php

namespace App\Http\Controllers;

use App\Helpers\UserTypes;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SubjectUpdateRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SubjectTeacherController extends Controller
{

    protected $userTypes;
    /**
     * SubjectController constructor.
    */
    public function __construct()
    {
        $this->userTypes = new UserTypes();
    }

    public function index(Request $request) {

    $subjects = Subject::all()->where("user_id", Auth::user()->id);
    return view('subjectTeacher.index', compact('subjects'));
}



 /**
  * @param \Illuminate\Http\Request $request
  * @param \App\Models\Subject $subject
  * @return \Illuminate\Http\Response
  */
  public function edit(Request $request, Subject $subjectTeacher)
  {
      $teachers = User::where('type',$this->userTypes->getIdUserTypesByName('teacher'))->get()->pluck('name','id');
      $colors = json_encode(config('colors'));
      return view('subjectTeacher.edit', compact('subjectTeacher','teachers','colors'));
  }

  /**
 * @param \App\Http\Requests\SubjectUpdateRequest $request
 * @param \App\Models\Subject $subject
 * @return \Illuminate\Http\Response
 */
public function update(SubjectUpdateRequest $request, Subject $subject)
{
    $subject->update($request->validated());
    $request->session()->flash('subject.id', $subject->id);
    return redirect()->route('subjectTeacher.index');
}


}