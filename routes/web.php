<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;

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

//トップページ
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

//基礎情報
Route::get('information',function(){
    return view('information');
});

//楽曲一覧
Route::get('archive',function(){
    return view('archive');
});

//レビュー一覧
Route::get('review_top',[ReviewController::class,'findall'])->name('reviewpage');

//個別レビュー
Route::get('reviews',[ReviewController::class,'findreviews']);
Route::post('reviews',[ReviewController::class,'comment_up']);

//レビュー追加
Route::get('review_addition',function(){
    if(!Auth::check()){
        return redirect()->route('reviewpage');
    }
    return view('review_addition');
});
Route::post('review_addition',[ReviewController::class,'addition']);

//レビュー編集
Route::get('review_update',[ReviewController::class,'review_updates']);
Route::post('review_update',[ReviewController::class,'update']);

//レビュー削除
Route::get('review_delete',[ReviewController::class,'delete']);

//マイページ
Route::get('mypage',[ReviewController::class,'mypage']);

//マイページ編集
Route::get('mypage_update',[ReviewController::class,'mypage_user']);
Route::post('mypage_update',[ReviewController::class,'mypage_update']);

//ログアウト
Route::get('logout',[ReviewController::class,'logout']);
Route::post('logout',[ReviewController::class,'logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('register',[ReviewController::class,'touroku']);
