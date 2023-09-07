<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | ABSENSI OK</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/image/logo.png') }}">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
    <link
        href="{{ asset('assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/pickadate/themes/default.date.css') }}">
</head>

<body>
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('backend.partials.header')
        <div class="dlabnav">
            @include('backend.partials.sidemenu')
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
    @include('backend.partials.footer')
    @section('js')
        <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
        <script src="{{ asset('assets/vendor/chartjs/chart.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('assets/js/dashboard/statistics-page.js') }}"></script>
        <script src="{{ asset('assets/js/custom.min.js') }}"></script>
        <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
        </script>
        <script src="{{ asset('assets/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/pickadate/picker.js') }}"></script>
        <script src="{{ asset('assets/vendor/pickadate/picker.time.js') }}"></script>
        <script src="{{ asset('assets/vendor/pickadate/picker.date.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-init/clock-picker-init.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-init/material-date-picker-init.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-init/pickadate-init.js') }}"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
            $(document).ready(function() {

                var counters = $(".count");
                var countersQuantity = counters.length;
                var counter = [];

                for (i = 0; i < countersQuantity; i++) {
                    counter[i] = parseInt(counters[i].innerHTML);
                }

                var count = function(start, value, id) {
                    var localStart = start;
                    setInterval(function() {
                        if (localStart < value) {
                            localStart++;
                            counters[id].innerHTML = localStart;
                        }
                    }, 40);
                }

                for (j = 0; j < countersQuantity; j++) {
                    count(0, counter[j], j);
                }
            });
        </script>
        <script>
            $(".form_datetime").datepicker({
                format: 'yyyy-mm-dd'
            });
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>

    </body>

    </html>
