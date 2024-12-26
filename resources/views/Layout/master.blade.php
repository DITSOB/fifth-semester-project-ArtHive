<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link href="{{ asset('css/style.css'); }}" rel="stylesheet">
    <title>ArtHive</title>
</head>
<body>
    <!-- Nav Start -->
     @include('Layout.navbar')
    <!-- Nav End -->

    <!-- Content Start  -->
    @yield('content')
    <!-- Content End  -->

    <!-- Footer Start  -->
    @include('Layout.footer')
    <!-- Footer End  -->
</body>
</html>