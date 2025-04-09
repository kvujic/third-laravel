<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// indexアクションを呼ぶルーティングにミドルウェアを設定
// indexを呼び出す前に認証済みかどうかチェックするようになる
//　認証できていない場合、ログインページが表示される
Route::middleware('auth')->group(function() {
    Route::get('/', [AuthController::class, 'index']);
});
