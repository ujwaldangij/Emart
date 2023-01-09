<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="asset/normal/images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="asset/normal/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- range slider -->

    <!-- font awesome style -->
    <link href="asset/normal/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="asset/normal/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="asset/normal/css/responsive.css" rel="stylesheet" />
    @yield('head')
</head>

<body class="@yield('sub_page')">
    {{-- ! including header --}}
    @include('normal.include.menu')

    @yield('body')

    {{-- ! footer will load here --}}
    @include('normal.include.footer')
    <!-- jQery -->
    <script src="asset/normal/js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="asset/normal/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="asset/normal/js/custom.js"></script>
    @yield('script')
</body>

</html>
