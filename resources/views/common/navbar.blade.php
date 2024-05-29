<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>


        </ul>


        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                @if(Auth::check())
                <a class="nav-link dropdown-toggle dropdown-menu-right" href="/login" id="navbarDropdown"
                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    welcome {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/cart/view">myCart</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">logout</a>
                    </div>
                @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/login">login <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/register">register <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                @endif

            </li>

        </ul>





    </div>
</nav>
