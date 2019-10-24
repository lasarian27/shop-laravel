@extends('layouts.psd')

@section('content')
    <div class="breadcrumb-header">
        <div class="container ">
            <div class="row bread">
                <div class="col-auto">
                    <h6 class="mb-0">Blog Item</h6>
                </div>

                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url(route('psd.home'))}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Item</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-item">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="comments">
                        <h4>10 Comments</h4>

                        <div class="col-12">
                            <div class="comment">
                                <div class="data">
                                    <h6>Jhoen Doe</h6>
                                    <p>26 June 2013, 15:20</p>
                                    <a href="#">Reply</a>
                                </div>
                                <div class="text card-modus">
                                    <div class="text">
                                            <span class="type">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis
                                        urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in
                                        iaculis neque.
                                    </div>
                                </div>

                                <div class="comment sub-comment">
                                    <div class="data"><h6>Jhoen Doe</h6>
                                        <p>26 June 2013, 15:20</p></div>
                                    <div class="text card-modus">
                                        <div class="text">
                                        <span class="type">
                                            <i class="fas fa-user"></i>
                                        </span>
                                            Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis
                                            urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in
                                            iaculis neque.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment">
                                <div class="data"><h6>Jhoen Doe</h6>
                                    <p>26 June 2013, 15:20</p>
                                    <a href="#">Reply</a>
                                </div>
                                <div class="text card-modus">
                                    <div>
                                            <span class="type">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis
                                        urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in
                                        iaculis neque.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">
                </div>
            </div>

        </div>
    </div>

@endsection
