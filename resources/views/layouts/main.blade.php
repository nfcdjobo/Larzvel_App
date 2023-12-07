<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('layouts.sidbar')
    <div class="main">
        @include('layouts.Topbar')
        @yield('content')
    </div>
</body>
<script src="{{ asset('javascript/menu.js')}}"></script>
<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</html>
