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

    </body>

    </html>
