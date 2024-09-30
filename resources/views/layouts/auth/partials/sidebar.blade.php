<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                        <img class="brand-logo" src="{{ url('assets/img/stun.PNG') }}" height="150" width="150"
                            style="margin-left: 35px !important" />
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a class="navbar-brand" href=""><img class="brand-logo" src="{{ url('/assets/img/stun.PNG') }}"
                    height="50" width="50" />
            </a>
        </div>
        <ul class="sidebar-menu">
            <br>
            @if (Auth::user()->level == 'Admin')
                <li class="menu-header">Dashboard</li>
                <li>
                    <a href="suadmin"><i class="fa-solid fa-house fa-fw"></i><span>Dashboard</span></a>
                </li>
            @else
            @endif

            @if (Auth::user()->level == 'Tim Ahli')
                <li class="menu-header">Dashboard</li>
                <li>

                    <a href="ahli"><i class="fa-solid fa-house fa-fw"></i><span>Dashboard</span></a>
                </li>
            @else
            @endif

            @if (Auth::user()->level == 'Pengguna')
                <li class="menu-header">Dashboard</li>
                <li>
                    <a href="pengguna"><i class="fa-solid fa-house fa-fw"></i><span>Dashboard</span></a>
                </li>
            @else
            @endif


            <li class="menu-header">Pengelola</li>
            @if (Auth::user()->level == 'Admin')
                <li class="nav-item dropdown">
                    <a href="timahlii"><i class="fa-solid fa-user-doctor fa-fw"></i>
                        <span>Tim Ahli</span></a>
                @else
            @endif

            @if (Auth::user()->level == 'Pengguna')
                <li class="nav-item dropdown">
                    <a href="timahli"><i class="fa-solid fa-user-doctor fa-fw"></i>
                        <span>Tim Ahli</span></a>
                @else
            @endif

            {{-- <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Medis Gizi</a></li>
                    <li><a class="nav-link" href="tenagamedis">Tenaga Medis</a></li>
                    
                </ul> --}}
            </li>
            @if (Auth::user()->level == 'Admin')
                <li>
                    <a class="nav-link" href="user"><i class="fa-solid fa-users fa-fw"></i>
                        <span>Monitoring User</span></a>
                </li>
            @else
            @endif

            @if (Auth::user()->level == 'Admin' || Auth::user()->level == 'Pengguna')
                <li class="nav-item dropdown">
                    <a href="edukasii" class="nav-link"><i class="fa-regular fa-newspaper fa-fw"></i>
                        <span> Edukasi </span></a>
                </li>
            @else
            @endif
            @if (Auth::user()->level == 'Admin' || Auth::user()->level == 'Tim Ahli')
                <li>
                    <a href="konsultasii" class="nav-link"><i class="fa-solid fa-video fa-fw"></i>
                        <span>Konsultasi</span></a>
                </li>
            @else
            @endif

            @if (Auth::user()->level == 'Pengguna')
                <li>
                    <a href="konsultasi" class="nav-link"><i class="far fa-file-alt"></i>
                        <span>Daftar Konsultasi</span></a>
                </li>
            @else
            @endif
    </aside>
</div>
