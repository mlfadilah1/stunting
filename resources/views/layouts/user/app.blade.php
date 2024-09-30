<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/stun.png">

    <!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('assets') }}/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('assets') }}/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/weather-icon/css/weather-icons.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/weather-icon/css/weather-icons-wind.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/prism/prism.css">

{{-- CSS Datatable --}}
<link rel="stylesheet" href="{{ asset('assets') }}/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
<link rel="stylesheet" href="{{ asset('assets') }}/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

{{-- trix --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css" />
{{-- toastr --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
{{-- fontaweswome --}}
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.css') }}">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <!-- Navbar -->
            @include('layouts.user.user.navbar')

            <!-- Sidebar -->
            @include('layouts.user.user.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    {{-- <div class="section-header">
                        <h1>Dashboard</h1>
                    </div> --}}
                    
                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
            @include('layouts.user.user.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
<script src="{{ asset('assets') }}/modules/jquery.min.js"></script>
<script src="{{ asset('assets') }}/modules/popper.js"></script>
<script src="{{ asset('assets') }}/modules/tooltip.js"></script>
<script src="{{ asset('assets') }}/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="{{ asset('assets') }}/modules/moment.min.js"></script>
<script src="{{ asset('assets') }}/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="{{ asset('assets') }}/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="{{ asset('assets') }}/modules/chart.min.js"></script>
<script src="{{ asset('assets') }}/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="{{ asset('assets') }}/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{ asset('assets') }}/modules/summernote/summernote-bs4.js"></script>
<script src="{{ asset('assets') }}/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="{{ asset('assets') }}/modules/fullcalendar/fullcalendar.min.js"></script>
<script src="{{ asset('assets') }}/modules/prism/prism.js"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets') }}/js/page/index-0.js"></script>
<script src="{{ asset('assets') }}/js/page/modules-calendar.js"></script>

<!-- Template JS File -->
<script src="{{ asset('assets') }}/js/scripts.js"></script>
<script src="{{ asset('assets') }}/js/custom.js"></script>

{{-- JS Datatable --}}
<script src="{{ asset('assets') }}/modules/datatables/datatables.min.js"></script>
<script src="{{ asset('assets') }}/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="{{ asset('assets') }}/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('assets')}}/js/page/modules-datatables.js "></script>
<!-- Page Specific JS File -->
<script src="{{ asset('assets')}}/js/page/bootstrap-modal.js"></script>
{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
        $(document).ready(function() {
        $('.select2').select2();
    });
</script>


@stack('myscript')


{{-- trix --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- fontsaweswone --}}
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/js/all.js') }}">

</body>

</html>