{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>App Layout</title>
    @livewireStyles
</head>
<body>
    <div class="container mx-auto p-6">
        @yield('content')
    </div>
    @livewireScripts
</body>
</html>
