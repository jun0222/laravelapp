<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController; // HelloControllerをインポート

// ルートパス `/` にアクセスしたとき、直接HTMLを返す。
// ※ 本来は view('welcome') を返すが、HTMLを手書きで試したい場合はこちらが便利。
Route::get('/', function () {
    // return view('welcome'); // Laravelのデフォルトビューを返す（コメントアウト中）
    return '<html><body><h1>Welcome to My Laravel Application</h1></body></html>'; // 直接HTMLを返す
});

// `/hello` にアクセスしたとき、HelloController の index メソッドを呼び出す
Route::get('hello', [HelloController::class, 'index']); // ベーシックなルート定義

// 以下は検証用に残してあるルート定義のバリエーション（コメントアウト中）

// パラメータを1つ受け取るルート。`/hello/abc` のようなURLでアクセスすると、
// $msg に "abc" が渡り、HTMLに表示される。
// e() 関数はXSS対策（エスケープ）として使用。
//
// Route::get('/hello/{msg}', function ($msg) {
//     return "<html><body><h1>About Us</h1><p>parameter is 「" . e($msg) . "」</p></body></html>";
// });

// オプションパラメータ付きで HelloController の index メソッドを呼び出すルート。
// `/hello/aaa/bbb` のようなURLに対応。id, pass はコントローラの引数に渡される。
// デフォルトは `noname`, `unknown` に設定されている。
//
// Route::get('/hello/{id?}/{pass?}', [HelloController::class, 'index']);

// index メソッドをシンプルに呼び出すルート（上と同様、パラメータ無し）
// 重複のためコメントアウト
//
// Route::get('/hello', [HelloController::class, 'index']);

// other メソッドを呼び出すルート。HelloController の別アクションを確認したい場合に使用。
//
// Route::get('/hello/other', [HelloController::class, 'other']);
