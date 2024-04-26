<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/public') }}/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/public') }}/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/public') }}/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('assets/public') }}/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('assets/public') }}/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />

    <!-- Toaster CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/public') }}/graindashboard/css/graindashboard.css">
    <link rel="stylesheet" href="{{ asset('assets/assets') }}/css/styles.css" />
    @stack('styles')
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
    <!-- Header -->
    <header class="header bg-body">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- Navbar  End-->
    </header>
    <!-- End Header -->

    <main class="main">
        <!-- Sidebar Nav -->
        @include('layout.sidebar')
        <!-- End Sidebar Nav -->

        <div class="content">
            <div class="py-4 px-3 px-md-4">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('layout.footer')
            <!-- End Footer -->
        </div>
    </main>

    <!-- Scripts --->
    @include('layout.scripts')
    <!-- End Scripts --->

</body>

</html>
