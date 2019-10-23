@extends('layouts.psd')

@section('content')

    <div class="breadcrumb-header">
        <div class="container ">
            <div class="row bread">
                <div class="col-auto">
                    <h6>Portofolio</h6>
                </div>

                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url(route('psd.home'))}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portofolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio">
        <div class="container">
            <div class="modus-buttons">
                <div><button class="btn btn-modus">All</button> </div>
                <div><button class="btn btn-modus">Web design</button> </div>
                <div><button class="btn btn-modus">Logo Design</button></div>
                <div><button class="btn btn-modus">Photography</button></div>
                <div><button class="btn btn-modus active">Wordpress</button></div>
            </div>

            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-item">
                            <img src="/images/undefined-image.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 second-half">


                        <h2>Donec faucibus ultricies congue</h2>
                        <div class="text">Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus
                            ligula eget dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapibus aliquam
                            mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur
                            vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas.
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="item-bottom">
                                    <a href="#"><i class="fas fa-link"></i> <span>www.project.dom</span></a>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <button class="btn btn-big-modus">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-item">
                            <img src="/images/undefined-image.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 second-half">


                        <h2>Donec faucibus ultricies congue</h2>
                        <div class="text">Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus
                            ligula eget dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapibus aliquam
                            mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur
                            vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas.
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="item-bottom">
                                    <a href="#"><i class="fas fa-link"></i> <span>www.project.dom</span></a>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <button class="btn btn-big-modus">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-item">
                            <img src="/images/undefined-image.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 second-half">


                        <h2>Donec faucibus ultricies congue</h2>
                        <div class="text">Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus
                            ligula eget dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapibus aliquam
                            mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur
                            vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas.
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="item-bottom">
                                    <a href="#"><i class="fas fa-link"></i> <span>www.project.dom</span></a>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <button class="btn btn-big-modus">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-item">
                            <img src="/images/undefined-image.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 second-half">


                        <h2>Donec faucibus ultricies congue</h2>
                        <div class="text">Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus
                            ligula eget dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapibus aliquam
                            mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur
                            vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas.
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="item-bottom">
                                    <a href="#"><i class="fas fa-link"></i> <span>www.project.dom</span></a>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <button class="btn btn-big-modus">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <ul class="pagination flex-wrap">
                    <li class="page-item previous-label">
                        <a class="btn-modus pagination-button" href="#" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">1</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button active" href="#">2</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">3</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">4</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">5</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">...</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">10</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">11</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">12</a></li>
                    <li class="page-item"><a class="btn-modus pagination-button" href="#">13</a></li>
                    <li class="page-item next-label">
                        <a class="btn-modus pagination-button" href="#" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


@endsection
