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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 10px;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        header h1 {
            margin: 0;
            font-size: 1.5em;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
        }
        nav {
            margin: 5px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
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
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin: 10px 0;
            flex: 1;
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
            <p>&copy; {{ date('Y') }} Laravel アプリケーション</p>
        </div>
    </footer>
</body>
</html>