<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

//Route::get('admin/plans', 'Admin\PlanController@index')->name('plans.index');
//Route::get('admin/plans/create', 'App\Http\Controllers\Admin\PlanController@create');
//Route::get('admin/plans', 'App\Http\Controllers\Admin\PlanController@index');
//Route::post('admin/plans', 'App\Http\Controllers\Admin\PlanController@index');

Route::get('admin/plans', [PlanController::class, "index"])->name('plans.index');
//Route::get('admin/plans/{url}', [PlanController::class, "show"])->name('plans.show');
Route::get('admin/plans/create', [PlanController::class, "create"])->name('plans.create');
Route::post('admin/plans', [PlanController::class, "store"])->name('plans.store');

Route::get('/', function () {
    return view('welcome');
});
