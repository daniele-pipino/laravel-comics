<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
</head>
<body>
    {{-- header --}}
    @include('includes.header')
    {{-- jumbo --}}
    @include('includes.jumbo')
    {{-- blu-bar --}}
    @include('includes.blubar')
    {{-- footer --}}
    @include('includes.footer')
</body>
</html>