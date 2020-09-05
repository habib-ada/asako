<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::to('src/css/main.ss') }}">
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')
    @yield('main-content')
</body>
</html>