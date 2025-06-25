<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown')
    {
        return <<<EOF
            <html>
                <body>
                    <h1>Welcome to My Laravel Application</h1>
                    <ul>
                        <li>ID: {$id}</li>
                        <li>PASS: {$pass}</li>
                    </ul>
                </body>
            </html>
        EOF;
    }
}
