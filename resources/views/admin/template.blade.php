<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}">

    <!-- App title -->
    <title>{{ config('app.name') }}</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset("admin/assets/plugins/morris/morris.css") }}">

    <!-- Switchery css -->
    <link href="{{ asset("admin/assets/plugins/switchery/switchery.min.css") }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset("admin/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="{{ asset("admin/assets/css/style.css") }}" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="{{ asset("admin/assets/js/modernizr.min.js") }}"></script>

    <link href="{{ asset("admin/assets/plugins/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />

<body>

@include('admin.partials.header ')

    @yield('content')

    <!-- jQuery  -->
    <script src="{{ asset("admin/assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("admin/assets/js/popper.min.js") }}"></script><!-- Tether for Bootstrap -->
    <script src="{{ asset("admin/assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("admin/assets/js/waves.js") }}"></script>
    <script src="{{ asset("admin/assets/js/jquery.nicescroll.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/switchery/switchery.min.js") }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset("admin/assets/plugins/morris/morris.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/raphael/raphael-min.js") }}"></script>

    <!-- Counter Up  -->
    <script src="{{ asset("admin/assets/plugins/waypoints/lib/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/counterup/jquery.counterup.min.js") }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset("admin/assets/plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/dataTables.bootstrap4.min.js") }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset("admin/assets/plugins/datatables/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/buttons.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/jszip.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/pdfmake.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/vfs_fonts.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/buttons.print.min.js") }}"></script>

    <!-- Key Tables -->
    <script src="{{ asset("admin/assets/plugins/datatables/dataTables.keyTable.min.js") }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset("admin/assets/plugins/datatables/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/datatables/responsive.bootstrap4.min.js") }}"></script>

    <!-- Selection table -->
    <script src="{{ asset("admin/assets/plugins/datatables/dataTables.select.min.js") }}"></script>


<!-- App js -->
    <script src="{{ asset("admin/assets/js/jquery.core.js") }}"></script>
    <script src="{{ asset("admin/assets/js/jquery.app.js") }}"></script>

    <!-- Page specific js -->
    <script src="{{ asset("admin/assets/pages/jquery.dashboard.js") }}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );

</script>

    </body>

</head>