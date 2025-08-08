<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return 'API works!';
});
Route::prefix('tasks')->group(function () {
    Route::get('/', [TasksController::class, 'getAll']);         // GET /tasks
    Route::get('/{id}', [TasksController::class, 'getOne']);     // GET /tasks/1
    Route::post('/', [TasksController::class, 'create']);        // POST /tasks
    Route::put('/{id}', [TasksController::class, 'update']);     // PUT /tasks/1
    Route::delete('/{id}', [TasksController::class, 'delete']);  // DELETE /tasks/1
});
