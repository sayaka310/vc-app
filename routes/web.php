<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::Httpメゾッド(URI,ACTION);
Route::get('/route/hello', function () {
    return '<h1>Hell from Route!';
});

Route::get('view/hello', function () {
    return view('message.hello');

});

Route::get('/view/ver', function () {
    return view('message.var',['variable' 
=> '$variable']);
});

Route::get('view/word/{msg}', function ($msg) {
    return view('massage.word', ['msg' => $msg]);
});

Route::get('view/word/{name}/{msg}', function($name, $msg) {
    return view('message.word', [
        'name' => $name,
        'msg' => $msg
    ]);
});

Route::get('controller/hello', [App\Http\Controllers\MessageContoroller::class, 'hell']);
Route::get('/controller/var', [App\Http\Controllers\MessageController::class, 'var']);
Route::get('/controller/word/{msg}', [App\Http\Controllers\MessageController::class, 'word']);
Route::get('/controller/word/{name}/{msg}', [App\Http\Controllers\MessageController::class, 'word2']);

Route::get('/language', [App\Http\Controllers\LanguageController::class,'index' ]);
