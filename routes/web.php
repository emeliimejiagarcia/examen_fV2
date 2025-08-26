<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TuitionController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Models\Grade;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



    //rutas de posts de tipo resource


    Route::resource('/students', StudentController::class);
    Route::resource('/tuitions', TuitionController::class);
    Route::resource('/careers', CareerController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/sections', SectionController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::resource('/grades', GradeController::class);



});

require __DIR__ . '/auth.php';
