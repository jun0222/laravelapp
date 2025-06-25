<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // public function index($id='noname', $pass='unknown')
    // {
    //     return <<<EOF
    //         <html>
    //             <body>
    //                 <h1>Hello</h1>
    //                 <ul>
    //                     <li>ID: {$id}</li>
    //                     <li>PASS: {$pass}</li>
    //                 </ul>
    //             </body>
    //         </html>
    //     EOF;
    // }

    // public function other() {
    //     global $head, $style, $body, $end;

    //     $html = <<<EOF
    //         <html>
    //             <head>
    //                 <title>Other Page</title>
    //                 <style>
    //                     body { font-family: Arial, sans-serif; }
    //                     h1 { color: #333; }
    //                     p { font-size: 16px; }
    //                 </style>
    //             </head>
    //             <body>
    //                 <h1>Other Page</h1>
    //                 <p>This is another page in the application.</p>
    //             </body>
    //         </html>
    //     EOF;

    //     return $html;
    // }

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
}
