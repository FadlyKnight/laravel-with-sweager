<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ isset($metatitle) && $metatitle != '' ? $metatitle.' | ' : '' }} Simple Candidate App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ $metadesc ?? "dashboard admin" }}" name="description" />
        <meta content="Simple Candidate App" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('logo-light.png')}}">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        
        @yield('css-top')
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css">
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('dashboard/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('dashboard/assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />
        {{-- <link href="{{asset('dashboard/assets/css/main.css')}}" rel="stylesheet" type="text/css" /> --}}

        <!-- Morris-->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <!-- Sweet Alert-->
        <link href="{{asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css -->
        <link href="{{url('dashboard/assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('dashboard/assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('dashboard/assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('dashboard/assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        @yield('css')
        <script>
            const MAIN_URL = "{{ url('/') }}";
            const _token = "{{ csrf_token() }}";
        </script>
        <style>
            .widget-content{padding:1rem;flex-direction:row;align-items:center};
            .widget-content-wrapper{display:flex;flex:1;position:relative;align-items:center};
            .bg-mean-fruit{background-image:linear-gradient(120deg,#fccb90 0%,#d57eeb 100%)!important}.bg-malibu-beach{background-image:linear-gradient(to right,#4facfe 0%,#00f2fe 100%)!important}.bg-deep-blue{background-image:linear-gradient(120deg,#e0c3fc 0%,#8ec5fc 100%)!important}.bg-ripe-malin{background-image:linear-gradient(120deg,#f093fb 0%,#f5576c 100%)!important}.bg-arielle-smile{background-image:radial-gradient(circle 248px at center,#16d9e3 0%,#30c7ec 47%,#46aef7 100%)!important}.bg-plum-plate{background-image:linear-gradient(135deg,#667eea 0%,#764ba2 100%)!important}.bg-happy-fisher{background-image:linear-gradient(120deg,#89f7fe 0%,#66a6ff 100%)!important}.bg-happy-itmeo{background-image:linear-gradient(180deg,#2af598 0%,#009efd 100%)!important}.bg-mixed-hopes{background-image:linear-gradient(to top,#c471f5 0%,#fa71cd 100%)!important}.bg-strong-bliss{background-image:linear-gradient(to right,#f78ca0 0%,#f9748f 19%,#fd868c 60%,#fe9a8b 100%)!important}.bg-grow-early{background-image:linear-gradient(to top,#0ba360 0%,#3cba92 100%)!important}.bg-love-kiss{background-image:linear-gradient(to top,#ff0844 0%,#ffb199 100%)!important}.bg-premium-dark{background-image:linear-gradient(to right,#434343 0%,black 100%)!important}.bg-happy-green{background-image:linear-gradient(to bottom,#00b09b,#96c93d)!important}.bg-vicious-stance{background-image:linear-gradient(60deg,#29323c 0%,#485563 100%)!important}.bg-midnight-bloom{background-image:linear-gradient(-20deg,#2b5876 0%,#4e4376 100%)!important}.bg-night-sky{background-image:linear-gradient(to top,#1e3c72 0%,#1e3c72 1%,#2a5298 100%)!important}.bg-slick-carbon{background-image:linear-gradient(to bottom,#323232 0%,#3F3F3F 40%,#1C1C1C 150%),linear-gradient(to top,rgba(255,255,255,0.4) 0%,rgba(0,0,0,0.25) 200%)!important;background-blend-mode:multiply}.bg-royal{background-image:linear-gradient(to right,#141e30,#243b55)!important}.bg-asteroid{background-image:linear-gradient(to right,#0f2027,#203a43,#2c5364)!important}.bg-transparent{background:0 0!important};
            .widget-content.widget-content-wrapper{display:flex;flex:1;position:relative;align-items:center};
            .widget-content .widget-content-left .widget-heading{opacity:.8;font-weight:700};
            .widget-content .widget-content-left .widget-subheading{opacity:.5}.widget-content .widget-content-right{margin-left:auto}.widget-content .widget-numbers{font-weight:700;font-size:1.8rem;display:block}.widget-content .widget-content-outer{display:flex;flex:1;flex-direction:column}.widget-content .widget-progress-wrapper{margin-top:1rem}.widget-content .widget-progress-wrapper .progress-sub-label{margin-top:.33333rem;opacity:.5;display:flex;align-content:center;align-items:center}.widget-content .widget-progress-wrapper .progress-sub-label .sub-label-right{margin-left:auto}.widget-content .widget-content-right.widget-content-actions{visibility:hidden;opacity:0;transition:opacity .2s}.widget-content:hover .widget-content-right.widget-content-actions{visibility:visible;opacity:1}
        </style>
        @stack('style')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            @include('backend.layouts.topbar')
            @include('backend.layouts.sidebar')

            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div> 
            </div>

            @include('backend.layouts.footer')
        </div>

        @yield('js-top')
        
        <!-- Vendor js -->
        <script src="{{ asset('dashboard/assets/js/vendor.min.js') }}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('dashboard/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

        <!--Morris Chart-->
        {{-- <script src="{{ asset('dashboard/assets/libs/morris-js/morris.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('dashboard/assets/libs/raphael/raphael.min.js') }}"></script> --}}

        <!-- Dashboard init js-->
        {{-- <script src="{{ asset('dashboard/assets/js/pages/dashboard.init.js') }}"></script> --}}

        <!-- App js -->
        <script src="{{ asset('dashboard/assets/js/app.min.js') }}"></script>
        <!-- Sweet Alerts js -->
        <script src="{{asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- third party js -->
        <script src="{{url('dashboard/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        {{-- <script src="{{url('dashboard/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script> --}}
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/datatables/dataTables.select.min.js')}}"></script>
        {{-- <script src="{{url('dashboard/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{url('dashboard/assets/libs/pdfmake/vfs_fonts.js')}}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        @yield('js')
        
        <script>
            @if (session()->has('success'))
                swal('success',"{{ session()->get('success') }}", 'success');
            @endif
            
            @if (session()->has('error'))
                swal('error',"{{ session()->get('error') }}", 'error');
            @endif

            @if(isset($errors) && $errors->any())
                swal('error',"{{ $errors->first() }}", 'error');
            @endif

        </script>

        @stack('script')

        
    </body>
</html>