@extends('layouts.psd')

@section('content')

    <div class="breadcrumb-header">
        <div class="container ">
            <div class="row bread">
                <div class="col-md-4">
                    <h6 class="mb-0">Services</h6>
                </div>
                <div class="col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url(route('psd.home'))}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="section-1 section">
            <div class="container">
                <h2>Donec faucibus ultricies congue</h2>
                <p>Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus ligula eget dapibus. Praeget
                    euismod sem scleerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitus vitae velit in
                    nemorbi tristique senectus et netus et malesuada fames ac turpis egestat.</p>

                <div class="why-us">
                    <div class="row">
                        <div class="col-md-3">
                            <h6>PLANNING</h6>

                            <ul>
                                <li><p class="mb-0">Quisque at massa ipsum</p></li>
                                <li><p class="mb-0">Maecenas a lorem augue, egestas</p></li>
                                <li><p class="mb-0">Cras vitae felis at lacus eleifend</p></li>
                                <li><p class="mb-0">Etiam auctor diam pellentesque</p></li>
                                <li><p class="mb-0">Nulla ac massa at dolor</p></li>
                                <li><p class="mb-0">Condimentum eleifend vitae vitae</p></li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <h6>DEVELOPMENT</h6>

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
                            <p>Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque
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
                centerMode: true,
                nextArrow: '<span class="arrow-right"></span>',
                prevArrow: '<span class="arrow-left"></span>',
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
    </script>
@endsection
