<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PAW PRAKTIKUM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            scroll-behavior: smooth;

        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .section {
            padding: 60px 0;
        }
        .bg-dark {
            background-color: #343a40 !important;
        }
        .cartoon-item {
            margin-bottom: 30px;
        }
        header {
            background-image: url('https://4.bp.blogspot.com/-sWjcMJ7ufs8/WkWyw0m4wpI/AAAAAAAAEpk/gfk6-lcd7lktGl3CvEmOnv3YGb8bMJXCACEwYBhgL/s1600/1%2BGunung%2BFuji%2Bmanymanyadventures.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        header .container {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .footer .icon {
            font-size: 24px;
            margin-right: 10px;
        }
        .footer .footer-item {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <main role="main">
        <!-- Navbar -->
        @include('pages.navbar_page')

        @yield('content')
</main>
@include('pages.footer_page')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
