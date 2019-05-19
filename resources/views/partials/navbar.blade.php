<nav>
    <div class="nav-wrapper  white ">
        <a href="/" class="brand-logo blue-grey-text  darken-4">Khatwa Casts</a>
        <a href="#" data-target="mobile-navbar blue-grey-text  darken-4" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down ">
            @if (Route::has('login'))
                @auth
                <li class="grey-text  darken-4">
                    <form action="{{route('logout')}}" method="post" name="logoutForm">
                        <a onclick="logoutForm.submit()">Logout</a>
                        @csrf
                    </form>
                </li>
            @else
                <li class="grey-text  darken-4"><a class="blue-grey-text  darken-4" href="{{ route('login') }}">Login</a></li>

                @if (Route::has('register'))
                    <li><a class="blue-grey-text  darken-4" href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth
            @endif

        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-navbar">
    @if (Route::has('login'))
        @auth
        <li><a class="blue-grey-text  darken-4" href="{{ url('/home') }}">Home</a></li>
    @else
        <li><a class="blue-grey-text  darken-4" href="{{ route('login') }}">Login</a></li>

        @if (Route::has('register'))
            <li><a class="blue-grey-text  darken-4" href="{{ route('register') }}">Register</a></li>
        @endif
        @endauth
    @endif


</ul>