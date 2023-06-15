<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="head">
        @include('partials.header')
    </div>
   

        <div class="container">
            @yield('content')
        </div>


<script src="{{ asset('js/navbar.js') }}" ></script>
</body>
</html>