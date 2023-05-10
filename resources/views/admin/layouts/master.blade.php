<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    @yield('title')
    {{-- fontawesome cdn --}}
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <link href="/css/admin/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/all.css">
    @yield('before-head')
</head>

<body class="sb-nav-fixed">
    @include('admin.partisial._navbar')
    <div id="layoutSidenav">
        @include('admin.partisial._aside')
        <div id="layoutSidenav_content">
            <main>
                @yield('main')
            </main>
            @include('admin.partisial._footer')
        </div>
    </div>
    <script src="/js/all.js"></script>
    <script src="/js/admin/scripts.js"></script>
    @yield('before-body')
</body>

</html>
