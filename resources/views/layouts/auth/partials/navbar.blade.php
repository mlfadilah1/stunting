<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ url('storage/users/' . Auth::user()->foto) }}" class="img-fluid">
                <div class="d-sm-none d-lg-inline-block"></div>{{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                @if (Auth::user()->level == 'Admin' || Auth::user()->level == 'Tim Ahli' || Auth::user()->level == 'Pengguna')
                    <a href="profile" class="dropdown-item has-icon">
                        <i class="far fa-user"></i><span>Profile</span>
                    </a>
                @else
                @endif
                <a href="{{ url('logout', []) }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
