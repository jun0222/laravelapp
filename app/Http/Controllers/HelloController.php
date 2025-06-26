<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller {
    // controllerのindexメソッド

    public function index() {
        $data = ['msg' => ''];
        return view('hello.index', $data); // hello/index.blade.php ビューを
    }

    // フォーム送信用postメソッド
    public function post(Request $request) {
        $msg = $request->msg;
        // echo "msg: {$msg}"; // 受け取ったメッセージを表示（デバッグ用）
        $data = ['msg' => $request->msg]; // リクエストからmsgを取得
        return view('hello.index', $data);
    }

    // // RequestとResponseを受け取って、その内容をHTMLとして表示するメソッド
    // public function index(Request $request, Response $response) {
    //     // $html = <<<EOF
    //     //     <html>
    //     //         <body>
    //     //             <h1>Hello</h1>
    //     //             <h2>Request</h2>
    //     //             <p>{$request}</p>  <!-- Requestインスタンスの内容をそのまま表示（オブジェクト型なので意味は薄い） -->
    //     //             <h2>Response</h2>
    //     //             <p>{$response}</p> <!-- Responseインスタンスも同様に表示 -->
    //     //         </body>
    //     //     </html>
    //     // EOF;

    //     $html = '<div>dummy</div>';

    //     return $html;
    // }

    /*
    // パラメータ（idとpass）をURLから受け取り、HTMLに埋め込んで返す。
    // 例えば `/hello/taro/secret` のようなURLに対応。
    // デフォルト値も設定されているので省略も可能。
    public function index($id='noname', $pass='unknown')
    {
        return <<<EOF
            <html>
                <body>
                    <h1>Hello</h1>
                    <ul>
                        <li>ID: {$id}</li>
                        <li>PASS: {$pass}</li>
                    </ul>
                </body>
            </html>
        EOF;
    }
    */

    /*
    // 他のルートで呼び出す用のサブアクション。
    // グローバル変数 $head, $style, $body, $end を使ってHTMLを組み立てる構成になっていた。
    // 試作時に変数でHTMLパーツを分けたい場合などに使用。
    public function other() {
        global $head, $style, $body, $end;

        $html = <<<EOF
            <html>
                <head>
                    <title>Other Page</title>
                    <style>
                        body { font-family: Arial, sans-serif; }
                        h1 { color: #333; }
                        p { font-size: 16px; }
                    </style>
                </head>
                <body>
                    <h1>Other Page</h1>
                    <p>This is another page in the application.</p>
                </body>
            </html>
        EOF;

        return $html;
    }
    */

    /*
    // シングルアクションコントローラとして使う場合（__invoke）。
    // ルートに `[HelloController::class]` だけ書いたときに動作する特殊なメソッド。
    public function __invoke() {
        return <<<EOF
            <html>
                <body>
                    <h1>Hello</h1>
                    <p>これはシングルアクションコントローラのアクションです。</p>
                </body>
            </html>
        EOF;
    }
    */
}
