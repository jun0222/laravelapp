<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return <<<EOF
            <html>
                <body>
                    <h1>Welcome to My Laravel Application</h1>
                </body>
            </html>
        EOF;
    }
}
