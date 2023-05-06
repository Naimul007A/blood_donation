<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/all.css') }}">
    @yield('before_head')
</head>

<body>
    @include('partisal.header')
    <section id="main-section">
        <div class="container">
            @yield('main')
        </div>
    </section>
    <footer class="bg-light py-4 text-center">
        <strong>Copyright © 2023 <a href="#">Naimul Islam</a></strong>
    </footer>
    <script src="{{ mix('js/all.js') }}"></script>
    <script src="{{ mix('js/userAction.js') }}"></script>
    @yield('before_body')
</body>

</html>
