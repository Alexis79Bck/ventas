<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        @livewire('navbar.logo', ['url'=>'imgs/' . config('app.logo_image'), 'width'=>'80px', 'height'=>'80px', 'alt'=>'SisVentas'])
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><i class="fas fa-bars"></i></a>

        @auth
            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-search toggle-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </li>
            </ul>

            @livewire('navbar.user-section')
        @endauth
    </header>
</div>
