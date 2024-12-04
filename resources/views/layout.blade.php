<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAGIGS</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="js/app.js"></script>
</head>
<body>
    <div class="bg-white">
        @include('partials._header')
        
        @yield('content')
    </div>
</body>
</html>