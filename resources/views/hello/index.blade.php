<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello/Index</title>
</head>
<body>
    <h1>Index</h1>
    <p>HelloのIndexビューテンプレート</p>
    <h2>controllerからのメッセージ</h2>
    <p>{{$msg}}</p>
    <h2>日付</h2>
    <p>{{date('Y-m-d H:i:s')}}</p>
    <h2>フォーム</h2>
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg" placeholder="名前を入力してください">
        <input type="submit" value="送信">
    </form>
</body>
</html>