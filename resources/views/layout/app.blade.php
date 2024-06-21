@php
    $navbar = $navbar ?? true;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
</head>

<body>
    @includeWhen($navbar, 'include.navbar')
    @include('include.alert')

    @yield('content')
</body>

</html>
