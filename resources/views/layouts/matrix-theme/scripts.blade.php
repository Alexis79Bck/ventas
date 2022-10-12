<script src="{{asset('matrix_theme/assets/libs/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('matrix_theme/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('matrix_theme/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('matrix_theme/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('matrix_theme/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('matrix_theme/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!-- <script src="matrix_theme/dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="{{asset('matrix_theme/assets/libs/flot/excanvas.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('matrix_theme/dist/js/pages/chart/chart-page-init.js')}}"></script>
<script src="{{asset('matrix_theme/assets/libs/toastr/toastr.min.js')}}"></script>
{{-- <script>
    function notify(msg, option = 1) {

    snackbar.show({
      text: msg.toUpperCase(),
      actionText: 'CERRAR',
      actionTextColor: '#fff',
      backgroundColor: option == 1 ? '#3b3f5c' : '#e7515a',
      pos: 'top-right'
    });

  }
</script> --}}
@livewireScripts
