<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
        {{-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
            </div>
        </div> --}}
    </form>
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
        class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
    <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Notifications
            <div class="float-right">
                <a href="#">Mark All As Read</a>
            </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
            <a href="#" class="dropdown-item dropdown-item-unread">
                {{-- <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                </div> --}}
            <a href="#" class="dropdown-item">
                {{-- <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                </div> --}}
                
            </a>
        </div>
    </div>
</li>
    <ul class="navbar-nav navbar-right">
        <li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block"></div>{{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                
                <a href="{{ url('logout', []) }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>