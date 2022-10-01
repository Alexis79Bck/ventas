<div>
    <ul class="navbar-item flex-row nav-dropdowns">

        <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user " id="user-profile-dropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media position-relative">
                    @if ( empty($userImgPath) )
                        <h4><i class=" fas fa-user fa-lg text-warning"></i>
                    @else
                        <img src="{{ $userImgPath }}" class="rounded-circle">
                    @endif
                    <span class=" position-absolute top-0 start-100 translate-middle badge badge-success"></span></h4>
                </div>
            </a>

            <div class="dropdown-menu position-absolute " aria-labelledby="userProfileDropdown">
                <div class="user-profile-section ">
                    <div class="media mx-auto ">
                        <div class="media-body align-self-center t">
                            <span class="h5 float-right text-light">{{ $userFullName }}</span>
                        </div>

                    </div>

                </div>
                <div class="dropdown-item">
                    <a href="user_profile.html">
                        <i class="fas fa-address-card"></i> <span> Mi Perfil </span>
                    </a>
                </div>
                <div class="dropdown-item">
                    @livewire('change-theme-option')
                    {{-- <form action="{{route('changeTheme',['theme'=>'matrix_theme'])}}" method='POST'>
                        @csrf
                        <a class="dropdown-item text-white" role="button" >
                            <i class="fas fa-person-booth me-1 ms1"></i> <span> Cambiar Tema </span>
                        </a>
                    </form> --}}
                </div>




                <div class="dropdown-item">
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Cerrar Sesión</span>
                        <form action="{{ route('logout')}}" method="POST" id="logout-form">
                        @csrf
                        </form>

                    </a>
                </div>
            </div>
        </li>
    </ul>
</div>
