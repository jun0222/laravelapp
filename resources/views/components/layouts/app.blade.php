{{-- livewireがデフォルトで読み込むコンポーネント --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Livewire Page' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    {{ $slot }}
    @livewireScripts
</body>
</html>
