<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Login | {{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/public') }}/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/public') }}/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/public') }}/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('assets/public') }}/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('assets/public') }}/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('assets/public') }}/graindashboard/css/graindashboard.css">
</head>

<body class="">
    <main class="main col-12 d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="content">
            <div class="container-fluid pb-5">
                <div class="row align-items-center justify-content-md-center">
                    <div class="card-wrapper col-12 col-md-4 mt-5">
                        <div class="brand text-center mb-3">
                            <a href="/"><img src="{{ asset('assets/public') }}/img/logo-big.png"
                                    style="height: 100px; width: auto"></a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Login</h4>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" required=""
                                            value="{{ old('email') }}" autofocus="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password" required="">
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="mb-4" style="color: red">{{ $errors->first('email') }}</div>
                                    @elseif ($errors->has('password'))
                                        <div class="mb-4" style="color: red">{{ $errors->first('email') }}</div>
                                    @endif

                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-primary btn-block  mt-5">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <footer class="footer mt-3">
                            <div class="container-fluid">
                                <div class="footer-content text-center small">
                                    &copy; {{ \Carbon\Carbon::now()->year }} Shahadat Murshed.
                                    All Rights Reserved.
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/public') }}/graindashboard/js/graindashboard.js"></script>
    <script src="{{ asset('assets/public') }}/graindashboard/js/graindashboard.vendor.js"></script>
</body>

</html>
