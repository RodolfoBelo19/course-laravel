<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employees', 'EmployeeController@getEmployee');

Route::get('employee/{id}', 'EmployeeController@getEmployeeById');

Route::post('addEmployee', 'EmployeeController@addEmployee');

Route::put('updateEmployee/{id}', 'EmployeeController@updateEmployee');

Route::delete('deleteEmployee/{id}', 'EmployeeController@deleteEmployee');