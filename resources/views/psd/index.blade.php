@extends('layouts.psd')

@section('content')
    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="layout-item">
                    <div>
                        <h3>Vestibulum</h3>
                        <p>Maecenas tincidunt, augue et rutrum condimentum, <br> libero lectus mattis orci, ut commodo.</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="layout-item">
                    <div>
                        <h3>Vestibulum2</h3>
                        <p>Maecenas tincidunt, augue et rutrum condimentum, <br> libero lectus mattis orci, ut commodo.</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="layout-item">
                    <div>
                        <h3>Vestibulum3</h3>
                        <p>Maecenas tincidunt, augue et rutrum condimentum, <br> libero lectus mattis orci, ut commodo.</p>
                    </div>
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
                    <div class="col">
                        <h4>Some our top services</h4>
                        <p>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum
                            condimentum,
                            libero lectus mattis orci, ut commodo. </p>
                    </div>

                    <div class="col-md-auto">
                        <button class="btn">View More</button>
                    </div>
                </div>
            </div>

            <div class="services">

                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <div class="head">
                                <img src="images/like.png" alt="">
                                <h5>Suspendisse</h5>
                            </div>
                            <p>
                                Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nulla, placerat
                                vitae
                                at, vehicula ut nunc.
                            </p>
                        </div>
                        <div class="card-footer">
                                <button class="btn">read more</button>
                        </div>
                    </div>

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
                    <div class="card">
                        <div class="card-body">
                            <div class="head">
                                <img src="images/flag.png" alt="">
                                <h5>Aliquam</h5>
                            </div>
                            <p>
                                Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl,
                                vitae
                                pulvinar dui tempor non.
                            </p>
                        </div>
                        <div class="card-footer">
                                <button class="btn">read more</button>
                        </div>
                    </div>
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

        <div class="about">
            <div class="container">
                <h1>Why modus versus?</h1>
                <p>Capacitance cascading integer reflective interface data development high bus cache dithering transponder.</p>
            </div>
        </div>

        <div class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Why Choose Us ?</h5>

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
                        <p class="mb-0">Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque
                            lectus
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
                            <span>Jhon Doe</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="happy-clients">
            <div class="container">

                <div class="happy-head">
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Our Happy Clients</h6>
                            <div class="line">
                                <div><span></span></div>
                            </div>
                            <div>
                                <button class="arrow-left"></button>
                                <span class="space"></span>
                                <button class="arrow-right"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
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
@endsection

@section('script')
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
                arrows: false,
                responsive: [
                    {

                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 5,
                            infinite: true
                        }

                    }, {

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

        $(document).on('click', '.arrow-left', function() {
            $('.variable-width').slick('slickPrev');
        })

        $(document).on('click', '.arrow-right', function() {
            $('.variable-width').slick('slickNext');
        })
    </script>
@endsection


