<!doctype html>
<html lang="en">

<head>
    @include('dashboard.partials.head')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('dashboard.partials.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('dashboard.partials.header')
            <!--  Header End -->
            <div class="container-fluid">
                @yield('contents')
            </div>
        </div>
        @include('dashboard.partials.footer')
</body>

</html>
