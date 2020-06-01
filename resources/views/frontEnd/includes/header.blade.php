<header id="home">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')}}">
                <img src="{{ asset('frontEnd/img/logo-desktop.jpg')}}" class="img-fluid" width="300" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ml-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about')}}">
                            <span>About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pr-0" href="{{ url('/#portfolio')}}" data-smooth="#portfolio">
                            <span>Portfolio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link quote" href="{{ url('/quote')}}">
                            <span>QUOTE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link quote-with-fiverr" href="https://fiverr.com/atexsell" target="_blank" data-smooth="#">
                            <span>QUOTE WITH FIVERR</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
