<nav class="navbar navbar-expand-md navbar-white fixed-top bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="margin-top: -10px">
            <img src="{{ url('images/logo.png') }}" alt="{{ env('APP_NAME') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                @yield('navbar')
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else

                    <li class="nav-item @if(request()->is('profile*')) active @endif">
                        <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                    </li>

                 

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>
                            <a class="dropdown-item" href="{{ url("profile/profile") }}">Settings</a>
                            <a class="dropdown-item" href="{{ url("profile/orders") }}">My Orders</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item">
                    <cart></cart>
                </li>
            </ul>
        </div>
    </div>
</nav>
