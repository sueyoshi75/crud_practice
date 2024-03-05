<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>CRUD practice</title>
</head>

<body>
    @include('layout.nav')
    <div class="w-1/4 mx-auto">
        @yield('content')
    </div>
</body>

</html>