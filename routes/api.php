<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('v1')->group(function () {
    Route::get('/skills', [SkillController::class, 'index']);
    Route::get('/skills/{skill}', [SkillController::class, 'show']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user}', [UserController::class, 'show']);

    Route::get('/projects', [ProjetController::class, 'index']);
    Route::get('/projects/{project}', [ProjetController::class, 'show']);

    Route::get('/galeries', [GaleryController::class, 'index']);
    Route::get('/galeries/{galery}', [GaleryController::class, 'show']);

    Route::get('/education', [EducationController::class, 'index']);
    Route::get('/education/{education}', [EducationController::class, 'show']);

    Route::get('/experience', [ExperienceController::class, 'index']);
    Route::get('/experience/{experience}', [ExperienceController::class, 'show']);

    Route::post('/login-admin', [LoginController::class, 'login']);

    Route::post('/send-email', [EmailController::class, 'sendlink']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout-admin', [LoginController::class, 'logout']);

        Route::post('/skills', [SkillController::class, 'store']);
        Route::put('/skills/{skill}', [SkillController::class, 'update']);
        Route::delete('/skills/{skill}', [SkillController::class, 'destroy']);

        Route::post('/users', [UserController::class, 'store']);
        Route::put('/users/{user}', [UserController::class, 'update']);
        Route::delete('/users/{user}', [UserController::class, 'destroy']);

        Route::post('/projects', [ProjetController::class, 'store']);
        Route::put('/projects/{project}', [ProjetController::class, 'update']);
        Route::delete('/projects/{project}', [ProjetController::class, 'destroy']);

        Route::post('/galeries', [GaleryController::class, 'store']);
        Route::put('/galeries/{galery}', [GaleryController::class, 'update']);
        Route::delete('/galeries/{galery}', [GaleryController::class, 'destroy']);

        Route::post('/education', [EducationController::class, 'store']);
        Route::put('/education/{education}', [EducationController::class, 'update']);
        Route::delete('/education/{education}', [EducationController::class, 'destroy']);

        Route::post('/experience', [ExperienceController::class, 'store']);
        Route::put('/experience/{experience}', [ExperienceController::class, 'update']);
        Route::delete('/experience/{experience}', [ExperienceController::class, 'destroy']);
    });
});