<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/' . config('app.logo_image'))}}" />



    @include('layouts.cork-theme.styles')

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
    {{-- <div class="container-fluid"> --}}

            <!--  BEGIN NAVBAR  -->
            @include('layouts.cork-theme.navbar')
            <!--  END NAVBAR  -->

            @auth
                <!--  BEGIN TOPBAR-->
                @include('layouts.cork-theme.topbar')
                <!--   END TOPBAR  -->

            @endauth



        <div class="main-container" id="container">



            <div class="overlay"></div>
            <div class="search-overlay"></div>



            <!--  BEGIN CONTENT PART  -->

            <div id="content" class="main-content mt-offset-3 ">

                <div class="layout-px-spacing">
                    
                    @yield('content')

                </div>



                @include('layouts.cork-theme.footer')

            </div>



        </div>
    {{-- </div> --}}




    <!--  BEGIN MAIN CONTAINER  -->

    <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('layouts.cork-theme.scripts')
</body>

</html>
