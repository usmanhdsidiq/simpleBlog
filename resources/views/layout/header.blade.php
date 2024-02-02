<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HDLabs</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('hdAssets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables/dataTables.bootstrap5.min.css') }}">

    <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap5.min.js') }}"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>

<body>
    @yield('container')

    <!-- Footer -->
    <footer class="footer mt-5 py-3 bg-primary">
        <div class="container">
            <p class="text-end" style="color: white;">&copy; 2023 HDLabs</p>
        </div>
    </footer>
    <!-- End footer -->

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.6.4.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('hdAssets/script.js') }}"></script>
    
</body>

</html>