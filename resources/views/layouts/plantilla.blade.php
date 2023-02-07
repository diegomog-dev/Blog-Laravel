<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
    <!--<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>-->
</head>
<body>
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
    <!-- script -->
</body>
</html>
