<header class="main">
    <div class="container">
        <a href="#" class="logo">Algebra CRM</a>
        <button class="navbar-toggle" type="button" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="navbar navbar-collapse">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                @endauth
            </ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" aria-expanded="false">
                            {{ auth()->user()->first_name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-list" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.show') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('register.show') }}">Register</a> --}}
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</header>
