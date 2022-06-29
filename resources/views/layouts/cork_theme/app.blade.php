<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name') }} </title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />



  @include('layouts.cork_theme.styles')

</head>

<body class="alt-menu sidebar-noneoverflow">
  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <!--  BEGIN NAVBAR  -->
  @include('layouts.cork_theme.navbar')
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN TOPBAR  -->
    @include('layouts.cork_theme.topbar')
    <!--  END TOPBAR  -->

    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

        @yield('content')

      </div>



      @include('layouts.cork_theme.footer')

    </div>
  </div>
  <!--  END CONTENT PART  -->

  </div>
  <!-- END MAIN CONTAINER -->

  @include('layouts.cork_theme.scripts')
</body>

</html>