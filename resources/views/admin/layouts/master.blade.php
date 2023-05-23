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

    <!--Data table css-->
    <link
        href="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.css"
        rel="stylesheet" />
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="/css/admin/styles.css" rel="stylesheet" />
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
    <script src="{{mix("/js/all.js")}}"></script>
    <!---Data table js--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.js">
    </script>
    <script src="/js/admin/scripts.js"></script>
    <script src={{mix("/js/admin.js")}}></script>
    @yield('before-body')
</body>

</html>
