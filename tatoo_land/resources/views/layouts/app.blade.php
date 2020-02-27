<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tatoo Land</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" media="screen" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="app">
    @include('layouts.navbar')
    @yield('content')

    <div id="snackbar">
        <i data-feather="bell" style="color: yellow"></i>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">{{ env('APP_NAME') }}</span>
            <span class="text-muted float-right">{{ date('Y') }}</span>
        </div>
    </footer>
</div>
<script src="{{ url('js/app.js') }}"></script>
<script> let domain = '{{ url('/') }}'</script>
@yield('js')
</body>
</html>

