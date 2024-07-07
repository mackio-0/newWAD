<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @stack('style')
</head>

<body>
    <a href="{{ url('/home') }}">Home page</a>
    <a href="{{ url('/about') }}">About page</a>
    <a href="{{ url('/contact') }}">Contact page</a>
    <div>
        @yield('content')
    </div>

    @stack('script')
</body>

</html>
