@extends('layouts.psd2')

@section('content')
    <div class="home">
        <div>
            <div id="homeCarousel" class="carousel slide" data-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Welcome</h3>
                                        <div class="subtext">
                                            Lorem ipsum dolor sit amet
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Welcome2</h3>
                                        <div class="subtext">
                                            Lorem ipsum dolor sit amet
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Welcome3</h3>
                                        <div class="subtext">
                                            Lorem ipsum dolor sit amet
                                        </div>
                                    </div>
                                </div>
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
        </div>
        <div class="container">
            <div class="articles">
                <div class="row">
                    <div class="col-md-4 phone">
                        <h6>Responsive Theme</h6>

                        <div>Lorem ipsum dolor sit amet, consectetur addipiscing eli. Curabitur euismod enim a metus
                            adipiscing aliquam. Vestibulum in vestibulum lore. Morbi imperdiet velit eu arcu consequat.
                            sit amet tristique enim ultrivies. Aenean faucibus duit sit amet elit iaculis iaculis.
                            Nullam colutpat facilisis eros sed commodo.
                        </div>
                    </div>
                    <div class="col-md-4 settings">
                        <h6>Responsive Theme</h6>

                        <div>Lorem ipsum dolor sit amet, consectetur addipiscing eli. Curabitur euismod enim a metus
                            adipiscing aliquam. Vestibulum in vestibulum lore. Morbi imperdiet velit eu arcu consequat.
                            sit amet tristique enim ultrivies. Aenean faucibus duit sit amet elit iaculis iaculis.
                            Nullam colutpat facilisis eros sed commodo.
                        </div>
                    </div>
                    <div class="col-md-4 magic">
                        <h6>Responsive Theme</h6>

                        <div>Lorem ipsum dolor sit amet, consectetur addipiscing eli. Curabitur euismod enim a metus
                            adipiscing aliquam. Vestibulum in vestibulum lore. Morbi imperdiet velit eu arcu consequat.
                            sit amet tristique enim ultrivies. Aenean faucibus duit sit amet elit iaculis iaculis.
                            Nullam colutpat facilisis eros sed commodo.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="quote">
            <div class="container">
                <img src="/images/circle.png" alt="">
                <h3>
                    <i class="fas fa-quote-left"></i>
                    Donec quam felis, ultrivies nec, pellentesque eu, pretium quis, sem. Nulla massa quis enim. Donec
                    pede justo, fringilla vel, alquet nec, vulputate eget, arcu.
                    <i class="fas fa-quote-right"></i>

                    <h5>John Doe - CEO <a href="#"> Envato</a></h5>
                </h3>
            </div>
        </div>

        <div class="parent-reason">
            <div class="container">
                <div class="row c">
                    <div class="col-md-9">
                        <div class="title align-items-center">
                            <h4>Top five reasons to buy Rt-theme 18</h4>
                            <div></div>
                        </div>
                        <div class="reasons">Nam quam nunv, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
                            nec odio et ante
                            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus . Nullam quis ante. Etiam
                            sit
                            amet orci eget eros faucibus tincidunt
                        </div>

                        <div class="accordion" id="accordionReasons">
                            <div class="card collapse1">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Template Builder
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionReasons">
                                    <div class="card-body">
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card collapse2">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           Mobile & Retina Ready
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionReasons">
                                    <div class="card-body">
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card collapse3">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           Styling Tools
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionReasons">
                                    <div class="card-body">
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="card collapse4">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNumber4" aria-expanded="false" aria-controls="collapseNumber4">
                                            Product Showcase & Portfolio Features
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseNumber4" class="collapse" aria-labelledby="headingThree" data-parent="#accordionReasons">
                                    <div class="card-body">
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="card collapse5">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNumber5" aria-expanded="false" aria-controls="collapseNumber5">
                                            Amazing Theme Options
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseNumber5" class="collapse" aria-labelledby="headingThree" data-parent="#accordionReasons">
                                    <div class="card-body">
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="news">
                            <div class="news-container">
                                <h4>Latest news </h4>
                                <div class="line"></div>
                                <div class="buttons">
                                    <button class="arrow-left"></button>
                                    <button class="arrow-right"></button>
                                </div>
                            </div>
                            <div class="variable-width">
                                <div class="item">
                                   <div class="image">
                                       <span>February 14, 2014</span>
                                   </div>

                                    <h5>Lorem ipsum Dolor sit</h5>

                                    <div class="text">Nam quam nunv, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
                                        nec odio et ante
                                        tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus .</div>
                                </div>
                                <div class="item">
                                    <div class="image">
                                        <span>February 14, 2014</span>
                                    </div>

                                    <h5>Lorem ipsum Dolor sit</h5>

                                    <div class="text">Nam quam nunv, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
                                        nec odio et ante
                                        tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus .</div>
                                </div>
                                <div class="item">
                                    <div class="image">
                                        <span>February 14, 2014</span>
                                    </div>

                                    <h5>Lorem ipsum Dolor sit</h5>

                                    <div class="text">Nam quam nunv, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
                                        nec odio et ante
                                        tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus .</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="purchase">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                        <h6>Nam quam nunc, blandit vel, luctus ppulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                            tincidunt tempus.</h6>
                    </div>
                    <div class="col-md-auto">
                        <button class="btn btn-purchase">Purchase Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {

            $('.variable-width').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                arrows: false,
            });

            $('#accordionReasons').on('show.bs.collapse', function (e) {
                $(e.target).parent().find('h2').css("background-image", "url(/images/minus.png)")
            })

            $('#accordionReasons').on('hide.bs.collapse', function (e) {
                $(e.target).parent().find('h2').css("background-image", "url(/images/plus.png)")
            })

        });

        $(document).on('click', '.arrow-left', function () {
            $('.variable-width').slick('slickPrev');
        });

        $(document).on('click', '.arrow-right', function () {
            $('.variable-width').slick('slickNext');
        })
    </script>
@endsection
