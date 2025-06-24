<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController; // HelloControllerをインポート

Route::get('/', function () {
    // return view('welcome'); // テキストをそのまま表示
    return '<html><body><h1>Welcome to My Laravel Application</h1></body></html>'; // HTMLを直接返す
});

Route::get('/hello/{msg}', function ($msg) { // パラメータを受け取るルート
    return "<html><body><h1>About Us</h1><p>parameter is 「" . e($msg) . "」</p></body></html>"; // パラメータを含むHTMLを返す
});

Route::get('/hello', [HelloController::class, 'index']); // HelloControllerのindexメソッドを呼び出す