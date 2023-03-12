<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DepartmentController;


Route::group([], function(){

    Route::get('/', [FrontendController::class, 'index']);
    
});

/*
Route::get('/', function () {
    return view('index');
});
*/
Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', [FrontendController::class, 'home']);
    Route::post('/appointment', [FrontendController::class, 'appointment']);
    Route::get('/your-appointment', [FrontendController::class, 'yourAppointment']);

});


/*Route::get('/home', function () {
    return view('home');
});
*/

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard', [AdminController::class, 'index']);
    Route::get('doctors', [AdminController::class, 'allDoctors']);
    Route::get('add-doctor', [AdminController::class, 'addDoctor']);
    Route::post('save-doctor', [AdminController::class, 'saveDoctor']);
    Route::get('doctor/{DoctorId}/edit', [AdminController::class, 'editDoctor']);
    Route::get('doctor/{DoctorId}/delete', [AdminController::class, 'deleteDoctor']);
    Route::put('update-doctor/{DoctorId}', [AdminController::class, 'updateDoctor']);

    Route::get('departments', [DepartmentController::class, 'index']);
    Route::get('add-department', [DepartmentController::class, 'addDepartment']);
    Route::post('save-department', [DepartmentController::class, 'saveDepartment']);
    Route::get('department/{departmentId}/edit', [DepartmentController::class, 'editDepartment']);
    Route::get('department/{departmentId}/delete', [DepartmentController::class, 'deleteDepartment']);
    Route::put('update-department/{departmentId}', [DepartmentController::class, 'updateDepartment']);

});

Auth::routes();

