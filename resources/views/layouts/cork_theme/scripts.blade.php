<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('cork_theme/assets/js/loader.js')}}"></script>
<script src="{{ asset('cork_theme/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('cork_theme/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('cork_theme/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('cork_theme/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('cork_theme/assets/js/app.js')}}"></script>
<script src="{{ asset('cork_theme/plugins/fontawesome/all.min.js')}}"></script>

<script>
  $(document).ready(function() {
            App.init();
        });
</script>
<script src="{{ asset('cork_theme/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN NEW OTHERS SCRIPTS -->
<script src="{{ asset('cork_theme/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{ asset('cork_theme/plugins/snackbar/snackbar.min.js')}}"></script>
<script src="{{ asset('cork_theme/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('cork_theme/plugins/currency/currency.min.js')}}"></script>
<!-- BEGIN NEW OTHERS SCRIPTS -->

<script>
  function notify(msg, option = 1) {

    snackbar.show({
      text: msg.toUpperCase(),
      actionText: 'CERRAR',
      actionTextColor: '#fff',
      backgroundColor: option == 1 ? '#3b3f5c' : '#e7515a',
      pos: 'top-right'
    });

  }
</script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS 
<script src="{{ asset('cork_theme/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{ asset('cork_theme/assets/js/dashboard/dash_2.js')}}"></script>
 BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->