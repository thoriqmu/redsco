<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/img7.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/admin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/admin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('js/admin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('js/admin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/admin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('js/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/admin/main.js') }}"></script>
    <script>
        document.getElementById('statusSelect').addEventListener('change', function() {
            var status = this.value;
            var buktiPembayaran = document.getElementById('buktiPembayaran');
            var nomorResi = document.getElementById('nomorResi');
            if (status === 'dikemas') {
                buktiPembayaran.style.display = 'block';
                nomorResi.style.display = 'none';
            } else {
                buktiPembayaran.style.display = 'none';
                nomorResi.style.display = 'block';
            }
        });
    </script>
</body>

</html>
