<?php

use App\Http\Controllers\Academy\AcademyCategoryController;
use App\Http\Controllers\Academy\AcademyMaterialController;
use App\Http\Controllers\Auth\LoginApiController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Event\PhotoBoothController;
use App\Http\Controllers\Material\MaterialController;
use App\Http\Controllers\Message\MessageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\UserGroup\GroupController;
use App\Http\Controllers\UserNew\CommentController;
use App\Http\Controllers\UserNew\UserNewBookmarkController;
use App\Http\Controllers\UserNew\UserNewController;
use App\Http\Controllers\UserNew\UserNewGroupController;
use App\Http\Controllers\UserNew\UserNewLikeController;
use App\Http\Controllers\UserNew\UserNewReadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('test', [TestController::class, 'index']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('dashboard',[DashboardController::class,'index']);
    Route::prefix('user')->group(function () {
      Route::get('',[UserController::class,'show']);
    });
    Route::prefix('events')->group(function () {
        Route::get( '',[EventController::class,'index']);
        Route::get( '{event_id_code}',[EventController::class,'show']);
        Route::get('{event_id_code}/photo_booth',[PhotoBoothController::class,'index']);
        Route::post('{event_id_code}/photo_booth',[PhotoBoothController::class,'store']);
        Route::delete('photo_booth/{photo_booth_id_code}',[PhotoBoothController::class,'destroy']);
    });
    Route::prefix('messages')->group(function () {
        Route::get('',[MessageController::class,'index']);
        Route::get('{message_id_code}',[MessageController::class,'show']);
    });
    Route::prefix('materials') ->group(function() {
       Route::get('',[MaterialController::class,'index']);
    });
    Route::prefix('news')->group(function () {
        Route::get('',[UserNewController::class,'index']);
        Route::post('',[UserNewController::class,'store']);
        Route::get('groups',[UserNewGroupController::class,'index']);
        Route::get('groups/{group_id_code}',[UserNewGroupController::class,'show']);
        Route::put('{user_new_id_code}',[UserNewController::class,'update']);
        Route::delete('{user_new_id_code}',[UserNewController::class,'destroy']);
        Route::get('{user_new_id_code}',[UserNewController::class,'show']);
        Route::post('{user_new_id_code}/bookmark',[UserNewBookmarkController::class,'store']);
        Route::post('{user_new_id_code}/read',[UserNewReadController::class,'create']);
        Route::post('{user_new_id_code}/reaction',[UserNewLikeController::class,'store']);
        Route::post('{user_new_id_code}/comment',[CommentController::class,'store']);
    });
    Route::prefix('academy')->group(function () {
       Route::get('categories/{category_type}',[AcademyCategoryController::class,'index']);
       Route::get('materials/{category_id_code}',[AcademyMaterialController::class,'index']);
    });
    Route::prefix('groups')->group(function () {
        Route::get('',[GroupController:: class,'index']);
    });
    Route::prefix('auth')->group(function () {
        Route::get('me', [LoginApiController::class, 'getAuthUserData']);
    });
});
Route::prefix('auth')->group(function () {
    Route::post('login', [LoginApiController::class, 'loginViaApi']);
});
