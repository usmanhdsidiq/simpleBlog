    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-light">
        <div class="container-fluid">

            <a href="/" class="navbar-brand text-primary"><b>HDLabs</b></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Expand">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active d-none" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-none" href="#">About</a>
                    </li>
                </ul>
                <div class="justify-content-end me-5">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        
                        @if(Auth::check())
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenu">
                                <li><a class="dropdown-item" href="/admin">Admin</a></li>
                                <li><a class="dropdown-item" href="/profile">Profile Settings</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- Navbar end -->