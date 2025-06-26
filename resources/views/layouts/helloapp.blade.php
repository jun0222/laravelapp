<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 50px;
        }
        nav {
            margin: 10px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Laravel アプリケーション</h1>
            <nav>
                <ul>
                    <li><a href="/">ホーム</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Laravel アプリケーション. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>