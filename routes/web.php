<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->group(function () {

    Route::controller(App\http\Controllers\EmployeeController::class)->group(function () {  

        Route::get('employee','index');
        Route::get('employee/create','create');
        Route::post('employee','store');
    
    });


});
