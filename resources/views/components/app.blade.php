
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Super Admin - Pegadaian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ url('public/admin') }}/logo.png">
        <link href="{{ url('public/admin') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <link href="{{ url('public/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="{{ url('public/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/admin') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ url('public/admin') }}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
        <link href="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.css" rel="stylesheet" />

        <link href="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    </head>

    <body class="dark-sidenav">
        
        <x-super-admin.sidebar />
        
        

        <div class="page-wrapper">
            
           <x-super-admin.header />
            

            
            <div class="page-content">
                <div class="container-fluid">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <x-utils.notif />
        
                                </div>
                            </div>
                        </div>
                    </div>
                {{ $slot }}                

                </div>

               <x-super-admin.footer />
            </div>
            
        </div>
        

    
        <script src="{{ url('public/admin') }}/assets/js/jquery.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/metismenu.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/waves.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/feather.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/simplebar.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/jquery-ui.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/js/moment.js"></script>
        <script src="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.js"></script>

        <script src="{{ url('public/admin') }}/plugins/apex-charts/apexcharts.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="{{ url('public/admin') }}/assets/pages/jquery.analytics_dashboard.init.js"></script>

        
        <script src="{{ url('public/admin') }}/assets/js/app.js"></script>

        <script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ url('public/admin') }}/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/jszip.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{ url('public/admin') }}/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ url('public/admin') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="{{ url('public/admin') }}/assets/pages/jquery.datatable.init.js"></script>
        <script src="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.js"></script>

        <script src="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.js"></script>

        <script>
             <script>
        $(document).ready(function() {
  $('#summernote').summernote();
});
    </script>           
        </script>  
        
    </body>

</html>