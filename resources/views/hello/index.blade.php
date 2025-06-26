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
    @isset($msg)
        <p>コントローラーからのメッセージ: {{$msg}}</p>
    @else
        <p>コントローラーからのメッセージはありません。</p>
    @endisset

    @if ($msg != '')
        <p>こんにちは、{{$msg}}さん。</p>
    @else
        <p>名前を入れてください</p>
    @endif

    @empty($forData)
        <p>forDataは空です。</p>
    @else
        @foreach ($forData as $data)
            <li>post用のcontrollerメソッドにてforで回したデータ: {{$data}}</li>
        @endforeach
    @endempty

    <h2>日付</h2>
    <p>{{date('Y-m-d H:i:s')}}</p>
    <h2>フォーム</h2>
    <form method="POST" action="/hello">
        @csrf <!-- CSRFトークンを埋め込む。vueに似たディレクティブのシンタックス -->
        <input type="text" name="msg" placeholder="名前を入力してください">
        <input type="submit" value="送信">
    </form>
    <p>{!! "<span>エスケープ</span><b>しない</b><span>HTML</span>" !!}</p>
</body>
</html>