@extends('layouts.psd')

@section('content')
    <div class="breadcrumb-header">
        <div class="container ">
            <div class="row bread">
                <div class="col-auto">
                    <h6>Blog</h6>
                </div>

                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url(route('psd.home'))}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row blog-row">
                        <div class="col-md-auto">
                            <div class="date">MAY <span>26</span></div>
                            <div class="type"><i class="far fa-file-alt"></i></div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="image-item">
                                    <img src="/images/undefined-image.png" alt="">
                                </div>

                                <div class="article">
                                    <div class="title">
                                        <h5>Duis dapibus aliquam mi, eget euismod sem scelerisque ut.</h5>
                                        <p>Posted by <span>Admin</span> in <span>Wordpress</span>
                                            <i class="fas fa-tags"></i> <span>Design, Template</span>
                                            <i class="fas fa-comments"></i> <span>22</span></p>
                                    </div>

                                    <p>Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus ligula
                                        eget
                                        dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapinbus aliquam
                                        mi,
                                        eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.
                                        Curabitur citae velit in neque dictum blandit. Proin in iaculis neque.
                                        Pellentesque
                                        habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                        egestas.</p>

                                    <a href="#">Continue reading <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row blog-row">
                        <div class="col-md-auto">
                            <div class="date">MAY <span>16</span></div>
                            <div class="type"><i class="far fa-image"></i></div>
                        </div>
                        <div class="col">
                            <div>
                                <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/images/undefined-image.png" alt="">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="/images/undefined-image.png" alt="">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="/images/undefined-image.png" alt="">
                                        </div>
                                    </div>

                                    <a class="carousel-control-prev" href="#homeCarousel" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>

                                    <a class="carousel-control-next" href="#homeCarousel" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>


                                <div class="article">
                                    <div class="title">
                                        <h5>Duis dapibus aliquam mi, eget euismod sem scelerisque ut.</h5>
                                        <p>Posted by <span>Admin</span> in <span>Wordpress</span>
                                            <i class="fas fa-tags"></i> <span>Photo</span>
                                            <i class="fas fa-comments"></i> <span>22</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="categories">
                        <h3>Categories</h3>
                        <div class="items">
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Logo Design</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Web design</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Photography</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Wordpress</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Icons</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="recent-posts">
                        <h3>Recent Posts</h3>
                        <div class="posts">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                        <div>
                                            <h6>Curabitur vitae velit</h6>
                                            <p>25 May 2013</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                        <div>
                                            <h6>Vivamus at elit quisurna adipiscing iaculis</h6>
                                            <p>25 May 2013</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                        <div>
                                            <h6>Curabitur vitae velit</h6>
                                            <p>25 May 2013</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                        <div>
                                            <h6>Vivamus at elit quisurna adipiscing iaculis</h6>
                                            <p>25 May 2013</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tags">
                        <h3>Tags</h3>

                        <div class="content">
                            <div><a href="#" class="btn btn-modus">Maecenas</a></div>
                            <div><a href="#" class="btn btn-modus">Nunc</a></div>
                            <div><a href="#" class="btn btn-modus">Praesent</a></div>
                            <div><a href="#" class="btn btn-modus">Nunc</a></div>
                            <div><a href="#" class="btn btn-modus">Praesent</a></div>
                            <div><a href="#" class="btn btn-modus">Nunc</a></div>
                            <div><a href="#" class="btn btn-modus">Maecenas</a></div>
                            <div><a href="#" class="btn btn-modus">Praesent</a></div>
                            <div><a href="#" class="btn btn-modus">Nunc</a></div>
                        </div>
                    </div>

                    <div class="archive">
                        <h3>Archive</h3>

                        <div class="items">
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> 2013 </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> 2012 </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> 2011 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
