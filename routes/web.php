<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Technological_equipmentController;
use App\Http\Controllers\Type_equipmentController;
use App\Http\Controllers\Academic_areaController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Loan_historyController;
use App\Http\Controllers\Maintenance_reportController;

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


    Route::resource('/responsibles', ResponsibleController::class);
    Route::resource('/vendors', VendorController::class);
    Route::resource('/technological_equipments', Technological_equipmentController::class);
    Route::resource('/type_equipments', Type_equipmentController::class);
    Route::resource('/academic_areas', Academic_areaController::class);
    Route::resource('/loans', LoansController::class);
    Route::resource('/registrations', RegistrationController::class);
    Route::resource('/loan_histories', Loan_historyController::class);
    Route::resource('/maintenance_reports', Maintenance_reportController::class);
});

require __DIR__ . '/auth.php';
