<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\OauthController;

use Illuminate\Support\Facades\Http;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');



Route::middleware('auth:sunctum')->group(function(){
    
    Route::apiResource('/Crud',CrudController::class);
    Route::apiResource('/Role',RoleController::class);
    Route::apiResource('/Permission',PermissionController::class);

    Route::post('/AssignPermission/{roleId}',[PermissionController::class,'assignPermission']);
    Route::post('/AssignRole/{roleId}',[RoleController::class,'assignRole']);
    Route::post('/logout',[OauthController::class,'logout']);
});

Route::post('/register',[OauthController::class,'register']);
Route::post('/login',[OauthController::class,'login']);

Route::get('/log',[OauthController::class,'index']);

// Route::get('/get/{id}',[CrudController::class,'get']);

