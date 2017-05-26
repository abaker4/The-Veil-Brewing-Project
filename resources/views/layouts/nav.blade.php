


<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">[ The Veil ]</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Info <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{url ("/taproom") }}>Taproom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/store">Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/events">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            @if (Route::has('login'))
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/home') }}">Home</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                @endif
            @endif

        </ul>
    </div>
</nav>


<div class="parallax-logo" style="height: 100vh;background: transparent;">

    <div class="container">

        <h1 class="display-1"></h1>
        <p class="lead"></p>
    </div>
</div>
