<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>
<body>

<nav class="navbar header navbar-expand-lg navbar-light">
    <div class="container">
        <div class="row align-items-end">
            <a href="#" class="navbar-brand">
                <h1 class="text-white">MODUS <span>versus</span></h1>
            </a>

            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbar">
                <ul class="navbar-nav navbar-nav  ml-md-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-item nav-link" href="#" id="navbarDropdown"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Portfolio
                        </a>
                        <div class="layout-dropdown">
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    Portfolio 2 column page
                                </a>
                                <a class="dropdown-item" href="#">
                                    Portfolio 2 column page
                                </a>
                                <a class="dropdown-item" href="#">
                                    Portfolio 2 column page
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="images/search.png" alt="">
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</nav>


<div id="homeCarousel" class="carousel slide" data-ride="false">
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div>
                <h3>Vestibulum</h3>
                <p>Maecenas tincidunt, augue et rutrum condimentum, <br> libero lectus mattis orci, ut commodo.</p>
            </div>
        </div>

        <div class="carousel-item">
            <div>
                <h3>Vestibulum</h3>
                <p>Maecenas tincidunt, augue et rutrum condimentum, <br> libero lectus mattis orci, ut commodo.</p>
            </div>
        </div>

        <div class="carousel-item">
            <div>
                <h3>Vestibulum</h3>
                <p>Maecenas tincidunt, augue et rutrum condimentum, <br> libero lectus mattis orci, ut commodo.</p>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="section">
    <div class="container">
        <div class="intro">
            <div class="row">
                <div class="col-10">
                    <h4>Some our top services</h4>
                    <p>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum,
                        libero lectus mattis orci, ut commodo. </p>
                </div>

                <div class="col-2">
                    <button class="btn">View More</button>
                </div>
            </div>
        </div>

        <div class="services">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="head">
                                <img src="images/like.png" alt="">
                                <h5>Suspendisse</h5>
                            </div>

                            <p>
                                Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nulla, placerat vitae
                                at, vehicula ut nunc.
                            </p>
                        </div>

                        <div class="card-footer">
                            <button class="btn">read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="head">
                                <img src="images/key.png" alt="">
                                <h5>MAECENAS</h5>
                            </div>

                            <p>
                                Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum
                                condimentum, libero lectus mattis orci, ut commodo.
                            </p>
                        </div>

                        <div class="card-footer">
                            <button class="btn">read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="head">
                                <img src="images/flag.png" alt="">
                                <h5>Aliquam</h5>
                            </div>

                            <p>
                                Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae
                                pulvinar dui tempor non.
                            </p>
                        </div>

                        <div class="card-footer">
                            <button class="btn">read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="head">
                                <img src="images/habitasse.png" alt="">
                                <h5>Habitasse</h5>
                            </div>

                            <p>
                                Astehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor non.
                            </p>
                        </div>

                        <div class="card-footer">
                            <button class="btn">read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <h1>Why modus versus?</h1>
            <p>Capacitance cascading integer reflective interface data development high bus cache dithering
                transponder. </p>
        </div>
    </div>

    <div class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h6>Why Choose Us ?</h6>

                    <ul>
                        <li><p class="mb-0">Quisque at massa ipsum</p></li>
                        <li><p class="mb-0">Maecenas a lorem augue, egestas</p></li>
                        <li><p class="mb-0">Cras vitae felis at lacus eleifend</p></li>
                        <li><p class="mb-0">Etiam auctor diam pellentesque</p></li>
                        <li><p class="mb-0">Nulla ac massa at dolor</p></li>
                        <li><p class="mb-0">Condimentum eleifend vitae vitae</p></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <p>Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus
                        vehicula mattis. Nulla ac massa at dolor condimentum eleifend vitae vitae urna.</p>

                    <div class="gauges">
                        <div id="gauge1">
                            <h6>SUSPENDISSE</h6>
                        </div>
                        <div id="gauge2">
                            <h6>MAECENAS</h6>
                        </div>
                        <div id="gauge3">
                            <h6>ALIQUAM</h6>
                        </div>
                        <div id="gauge4">
                            <h6>HABITASSE</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <h6>What Client's Say ?</h6>
                    <div class="client">
                        <p class="mb-0"> Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam
                            pellentesque lectus
                            vehicula mattis. Nulla ac massa at dolor condimentum</p>
                    </div>
                    <span>Jhon Doe</span>
                </div>
            </div>
        </div>
    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6>Our Happy Clients </h6>

                    <div class="main">
                        <div class="variable-width">
                            <div><img src="/images/jquery.png"></div>
                            <div><img src="/images/jquery.png"></div>
                            <div><img src="/images/jquery.png"></div>
                            <div><img src="/images/jquery.png"></div>
                            <div><img src="/images/jquery.png"></div>
                            <div><img src="/images/jquery.png"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<footer>
    <div class="main-area">
        <div class="container">
            <div class="footer-about">
                <div class="row">

                    <div class="col-md-4">
                        <h1 class="text-white">MODUS <span>versus</span></h1>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida
                            pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec
                            .</p>
                        <h6>Phone: <span>182 2569 5896</span></h6>
                        <h6>email: <span>info@modu.versus</span></h6>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col">
                                <h2>Company</h2>

                                <ul>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#">Testimonials</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col">
                                <h2>Community</h2>

                                <ul>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Forum</a>
                                    </li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                    <li>
                                        <a href="#">Newsletter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3>from the <span>Blog</span></h3>

                        <div class="article">
                            <div class="image-article">
                                <img src="images/image.png" alt="">
                            </div>

                            <div class="text-article">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <p>26 May, 2013</p>
                            </div>
                        </div>

                        <div class="article">
                            <div class="image-article">
                                <img src="images/image.png" alt="">
                            </div>

                            <div class="text-article">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <p>26 May, 2013</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-auto mr-auto">
                    <h6>2013 ModusVersus</h6>
                </div>

                <div class="col-auto">
                    <a href="#">
                        <img src="images/Facebook.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images/g%20plus.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images/rss.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
{{--<script src="https://kit.fontawesome.com/65fc9fdaf0.js"></script>--}}

<script>
    new JustGage({
        id: "gauge1",
        value: 50,
        min: 0,
        max: 100,
        decimals: 0,
        gaugeWidthScale: 0.6,
        gaugeColor: "#76c7c0",
        hideMinMax: true,
        levelColors: ["#e2534b"],
        valueMinFontSize: 30,
        labelMinFontWeight: 800,
        valueFontColor: "#7F8C8C",
    });
    new JustGage({
        id: "gauge2",
        value: 70,
        min: 0,
        max: 100,
        decimals: 0,
        gaugeWidthScale: 0.6,
        gaugeColor: "#76c7c0",
        hideMinMax: true,
        levelColors: ["#e2534b"],
        valueMinFontSize: 30,
        labelMinFontWeight: 800,
        valueFontColor: "#7F8C8C",
    });
    new JustGage({
        id: "gauge3",
        value: 80,
        min: 0,
        max: 100,
        decimals: 0,
        gaugeWidthScale: 0.6,
        gaugeColor: "#76c7c0",
        hideMinMax: true,
        levelColors: ["#e2534b"],
        valueMinFontSize: 30,
        labelMinFontWeight: 800,
        valueFontColor: "#7F8C8C",
    });
    new JustGage({
        id: "gauge4",
        value: 100,
        min: 0,
        max: 100,
        decimals: 0,
        gaugeWidthScale: 0.6,
        gaugeColor: "#76c7c0",
        hideMinMax: true,
        levelColors: ["#e2534b"],
        valueMinFontSize: 30,
        labelMinFontWeight: 800,
        valueFontColor: "#7F8C8C",
    });

    $(document).ready(function () {

        $('.variable-width').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            centerMode: true,
            nextArrow: '<span class="arrow-right"></span>',
            prevArrow: '<span class="arrow-left"></span>',
            responsive: [{

                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    infinite: true
                }

            },{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    infinite: true
                }

            }, {

                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false
                }

            }, {

                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    dots: false
                }

            }, {

                breakpoint: 300,
                settings: "unslick" // destroys slick

            }]
        });
    });
</script>
</body>
</html>
