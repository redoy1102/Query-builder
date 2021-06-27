<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetriveController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\mergeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;


Route::get('/',[RetriveController::class,'allRows']);
Route::get('/singleRow',[RetriveController::class,'singleRow']);
Route::get('/singlecolumn',[RetriveController::class,'singlecolumn']);
Route::get('/multicolumn',[RetriveController::class,'multicolumn']);
Route::get('/condition',[RetriveController::class,'condition']);

//select
Route::get('/uniqueSelect',[SelectController::class,'uniqueSelect']);
Route::get('/singleColumn',[SelectController::class,'singleColumn']);
Route::get('/multiColumn',[SelectController::class,'multiColumn']);

//merge
Route::get('/mergeData',[mergeController::class,'mergeData']);

//join
Route::get('/join',[JoinController::class,'leftJoinData']);

//insert
Route::get('/insertData',[InsertController::class,'insertData']);

//delete
Route::get('/delete',[DeleteController::class,'deleteSingleRow']);

//update
Route::get('/update',[UpdateController::class,'update']);






