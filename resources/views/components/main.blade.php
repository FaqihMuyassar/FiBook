<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>FiBook | {{ $title }}</title>
    <link rel="icon" href="./img/Logo-YFIB.png">
</head>
<body>

    @include('components.navbar')

    @yield('content')

</body>
</html>
