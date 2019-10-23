<nav class="navbar header navbar-expand-lg navbar-light">
    <div class="container">
            <a href="{{url(route('psd.home'))}}" class="navbar-brand">
                <h1 class="text-white">MODUS <span>versus</span></h1>
            </a>

            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbar">
                <ul class="navbar-nav navbar-nav  ml-md-auto">
                    <li class="nav-item {{--active--}}">
                        <a class="nav-link" href="{{url(route('psd.home'))}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url(route('psd.about'))}}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url(route('psd.services'))}}">Services</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-item nav-link" href="{{url(route('psd.portfolio'))}}" id="navbarDropdown"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Portfolio
                        </a>
                        <div class="layout-dropdown">
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url(route('psd.portfolio'))}}">
                                    Portfolio 2 column page
                                </a>
                                <a class="dropdown-item" href="{{url(route('psd.portfolio'))}}">
                                    Portfolio 2 column page
                                </a>
                                <a class="dropdown-item" href="{{url(route('psd.portfolio'))}}">
                                    Portfolio 2 column page
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url(route('psd.blog'))}}">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url(route('psd.features'))}}">Features</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="/images/search.png" alt="">
                        </a>
                    </li>
                </ul>

            </div>
    </div>

</nav>
