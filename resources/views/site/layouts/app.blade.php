<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABCD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/frontend/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    {{-- @include('site.layouts.topbar') --}}
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">ABC</a>
            </div>
            @include('site.layouts.topmenu')
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    {{-- <input type="hidden" id="token" value="{{ csrf_token() }}">
    <input type="hidden" id="base_url" value="{{ url('/') }}">
    <input type="hidden" id="app_path" value="{{ config('app.app_path', '/') }}"> --}}
</body>

</html>
