<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{ $title ?? 'MEDICAL' }}</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <x-layout.sidebar/>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <x-layout.topbar/>
                    <!-- Top Bar End -->

                    {{$slot}}
                    
                    <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2022 Zoogler by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{ asset('assets/js/detect.js')}}"></script>
        <script src="{{ asset('assets/js/fastclick.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{ asset('assets/plugins/chart.js/chart.min.js')}}"></script>
        <script src="{{ asset('assets/pages/dashboard.js')}}"></script>

        
        <!-- Required datatable js -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

         <!-- Buttons examples -->
         <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
       
        <!-- Responsive examples -->
        <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('assets/pages/datatables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>
        

    </body>
</html>