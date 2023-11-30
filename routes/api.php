<?php

use App\Http\Controllers\UsersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Маршруты CRUD ресурсного контроллера
//Route::resource('users', UsersController::class);
Route::get('/users', [UsersController::class, 'index']);            // index (Отображение списка ресурсов):
/*Route::get('/users/create', 'UsersController@create');      // create (Отображение формы создания нового ресурса):
Route::post('/users', 'UsersController@store');             // store (Сохранение нового ресурса):
Route::get('/users/{id}', 'UsersController@show');          // show (Отображение информации о конкретном ресурсе):
Route::get('/users/{id}/edit', 'UsersController@edit');     // edit (Отображение формы редактирования ресурса):
Route::put('/users/{id}', 'UsersController@update');        // update (Обновление информации о ресурсе):
Route::delete('/users/{id}', 'UsersController@destroy');    // destroy (Удаление ресурса):*/

