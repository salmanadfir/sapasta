<!-- Navbar -->
<nav class="main-header navbar navbar-expand" style="background-color: #ff9583">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"
        style="color: #fff"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link" style="color: #fff; font-size:20px">Home</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        @guest
        <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login')}}</a>
        </li>
        @else
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"style="color: #fff; font-size: 20px">
        {{Auth::user()->name}} <i class="fa fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-item">
        <div class="media">
            <div class="media-body text-dark">
                <h3 class="dropdown-item-title">
                {{Auth::user()->name}}
                </h3>
                </div>
                </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item dropdown-footer text-dark text-right" id="btn_logout" href="{{ route('logout') }}" style="color:black !important;"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf</form>
                </div>
                </li>
                @endguest
                </ul>
                </nav>
