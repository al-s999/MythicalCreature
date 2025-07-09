<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Catatan Legenda')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    @yield('back-button')
    
    <div class="item">
        <h1><b>@yield('page-title', 'Catatan Legenda: Makhluk Mitologi')</b></h1>
    </div>
    
    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')
    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>