  
<?php


use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseSubjectController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPasswordController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ExamStudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes(["register" => true]);

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::middleware('can:canAccessCalendar')->group(function () {
        Route::resource('calendar', CalendarController::class)->only('index');
    });
    Route::middleware('can:canAdminSubjects')->group(function () {
        Route::resource('subject', SubjectController::class)->only(['create', 'store', 'edit', 'update', 'delete', 'index', 'destroy']);
    });
    Route::middleware('can:canAdminUsers')->group(function () {
        Route::resource('user', UserController::class);
    });
    Route::middleware('can:canAdminEnrollments')->group(function () {
        Route::resource('enrollment', EnrollmentController::class)->only(['create', 'store', 'edit', 'update', 'delete', 'index', 'destroy']);
    });
    Route::middleware('can:canShowCourses')->group(function () {
        Route::resource('course', CourseController::class)->only(['index']);
    });
    Route::middleware('can:canModifyCourses')->group(function () {
        Route::resource('course', CourseController::class)->only(['create', 'store', 'edit', 'update', 'delete', 'destroy']);
    });
    Route::middleware('can:canShowSchedules')->group(function () {
        Route::resource('course/{course}/subjects/{subject}/schedules', ScheduleController::class)->only(['index']);
    });
    Route::middleware('can:canModifySchedules')->group(function () {
        Route::resource('course/{course}/subjects/{subject}/schedules', ScheduleController::class)->only(['create', 'store', 'edit', 'update', 'delete', 'destroy']);
    });
    Route::middleware('can:canShowCoursesSubjects')->group(function () {
        Route::resource('course/{course}/courseSubject', CourseSubjectController::class)->only(['index']);
    });
    Route::middleware('can:canModifyCoursesSubjects')->group(function () {
        Route::resource('course/{course}/courseSubject', CourseSubjectController::class)->only(['create', 'store', 'edit', 'update', 'delete', 'destroy']);
    });
    Route::middleware('can:canAdminExam')->group(function () {
        Route::resource('exam', ExamController::class);
    });
    Route::middleware('can:canAdminWork')->group(function () {
        Route::resource('work', WorkController::class);
    });
    Route::middleware('can:canAdminExam')->group(function () {
        Route::resource('examStudent', ExamStudentController::class)->only(['index']);
    });
    Route::get('profile/modify', [UserProfileController::class, 'index'])->name('profile/modify');
    Route::post('profile/modify', [UserProfileController::class, 'update'])->name('profile/modify');
    Route::get('profile/modify/password', [UserPasswordController::class,'edit'])->name('profile/modify/password');
    Route::put('profile/modify/password', [UserPasswordController::class,'update'])->name('profile/modify/password');
});