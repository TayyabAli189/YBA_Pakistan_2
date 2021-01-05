<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-gray">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/admin')}}" class="nav-link">Home</a>
        </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

            <div>
                <a class="btn btn-danger btn-lg" href="{{ route('logout') }}
                    "onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   style="margin-left: 620px;">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

    </li>
</nav>
<!-- /.navbar -->
