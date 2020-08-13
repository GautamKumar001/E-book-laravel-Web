
<nav class="navbar navbar-expand-md navbar-light  shadow-sm " style="background-color: #e3f2fd; ">
    <div class="container">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/main">
                        <span class="glyphicon glyphicon-home"></span> Home
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/book"><span class="glyphicon glyphicon-book">Books</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">  <span class="glyphicon glyphicon-envelope"></span> Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about"><span class="glyphicon glyphicon-info-sign"></span> About</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><span class="glyphicon glyphicon-registration-mark"></span> Register</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out"></span>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
