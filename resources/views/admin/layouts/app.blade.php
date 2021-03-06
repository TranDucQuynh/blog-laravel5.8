<!DOCTYPE html>
<html>
    <head>
        @include('admin.layouts.head')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            @include('admin.layouts.header')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('admin.layouts.sidebar')

        @yield('content')

            @include('admin.layouts.footer')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        {{--<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>--}}
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        {{--<script>--}}
            {{--$.widget.bridge('uibutton', $.ui.button)--}}
        {{--</script>--}}
        <!-- Bootstrap 4 -->
        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        {{--<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>--}}
        <!-- Sparkline -->
        {{--<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>--}}
        <!-- JQVMap -->
        {{--<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>--}}
        {{--<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>--}}
        <!-- jQuery Knob Chart -->
        {{--<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>--}}
        <!-- daterangepicker -->
        {{--<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>--}}
        {{--<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>--}}
        <!-- Tempusdominus Bootstrap 4 -->
{{--        <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>--}}
        <!-- Summernote -->
        <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
{{--        <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>--}}

        @yield('js')



        <!-- AdminLTE App -->
        <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        {{--<script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>--}}
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

        <script>
            $(function () {
                // Summernote
                $('.textarea').summernote({
                    height: 350,
                    placeholder: 'Place some text here',
                })
                // $("#example1").DataTable();
                // $('#example1').DataTable({
                //     "paging": true,
                //     "lengthChange": true,
                //     "searching": true,
                //     "ordering": true,
                //     "info": true,
                //     "autoWidth": true,
                // });
            })
        </script>
    </body>
</html>
