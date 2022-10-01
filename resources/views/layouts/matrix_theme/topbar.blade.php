<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin5">
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <a class="navbar-brand" href="{{ route('home')}}">
        <!-- Logo icon -->
        <b class="logo-icon ps-2">
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Logo icon -->
          <img src="{{ asset('imgs/' . config('app.logo_image')) }}" alt="homepage" class="light-logo" width="40" heigt="40" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text ms-2">
          <!-- Logo text -->
          <img src="{{ asset('imgs/' . config('app.logo_text')) }}" alt="homepage" class="light-logo" width="140" heigt="70"/>
        </span>

      </a>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Toggle which is visible on mobile only -->
      <!-- ============================================================== -->
      <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
          class="ti-menu ti-close"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    @auth

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>


            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item search-box">
            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-magnify fs-4"></i></a>
            <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Buscar..." />
                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
            </form>
            </li>
        </ul>
        <!-- ============================================================== -->
        <!-- Right side toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-end">

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
            <span class="text-light fs-4 fw-bold">{{ Auth::user()->fullname }} </span>
            <a class="
                        nav-link
                        dropdown-toggle
                        text-muted
                        waves-effect waves-dark
                        pro-pic
                    " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                <div class="mt-3 media position-relative">

                    <h4>
                    @if ( empty(Auth::user()->image) )
                        <i class=" fas fa-user fa-2x text-warning"></i>
                    @else
                        <img src="{{ Auth::user()->image }}" class="rounded-circle " width="40px" height="40px">
                    @endif
                        <span class=" badge badge-success"></span>
                    </h4>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-address-card me-1 ms1"></i> Mi Perfil</a>
                @livewire('change-theme-option')
                {{-- <form action="{{route('changeTheme',['theme'=>'cork_theme'])}}" method='POST'>
                    @csrf
                    <button class="dropdown-item " type="submit" >
                        <i class="fas fa-person-booth me-1 ms1"></i> <span> Cambiar Tema </span>
                    </button>
                </form> --}}
                <hr class="text-dark" height="1.5px"/>

                <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt me-1 ms-1"></i>
                    <span>Cerrar Sesión</span>
                    <form action="{{ route('logout')}}" method="POST" id="logout-form">
                        @csrf
                    </form>
                </a>


            </ul>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
        </ul>
        </div>
    @endauth
  </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
