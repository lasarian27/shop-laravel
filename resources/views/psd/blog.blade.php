@extends('layouts.psd')

@section('content')
    <div class="breadcrumb-header">
        <div class="container ">
            <div class="row bread">
                <div class="col-auto">
                    <h6 class="mb-0">Blog</h6>
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
                    <div class="blog-row">
                        <div class="row">
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
                                            <div>Posted by <a href="#">Admin</a> in <a href="#">Wordpress</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-tags"></i>Design, Template
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-comments"></i>22
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="text">Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus
                                            ligula
                                            eget
                                            dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapinbus
                                            aliquam
                                            mi,
                                            eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing
                                            iaculis.
                                            Curabitur citae velit in neque dictum blandit. Proin in iaculis neque.
                                            Pellentesque
                                            habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                            egestas.</div>

                                        <a href="{{url(route('psd.blog-item'))}}" class="read-more">Continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="blog-row">
                        <div class="row ">
                            <div class="col-md-auto">
                                <div class="date">MAY <span>16</span></div>
                                <div class="type"><i class="far fa-image"></i></div>
                            </div>
                            <div class="col">
                                <div>
                                    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="layout-item">
                                                    <img src="/images/undefined-image.png" alt="">
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="layout-item">
                                                    <img src="/images/undefined-image.png" alt="">
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="layout-item">
                                                    <img src="/images/undefined-image.png" alt="">
                                                </div>
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
                                            <div>Posted by <a href="#">Admin</a> in <a href="#">Wordpress</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-tags"></i>Nature
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-comments"></i>22
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-row">
                        <div class="row ">
                            <div class="col-md-auto">
                                <div class="date">MAY <span>12</span></div>
                                <div class="type"><i class="fas fa-quote-right"></i></div>
                            </div>
                            <div class="col">
                                <div>
                                    <div class="article quote">
                                        <div class="title">
                                            <h5>Duis dapibus aliquam mi, eget euismod sem scelerisque ut.</h5>
                                            <div>Posted by <a href="#">Admin</a> in <a href="#">Video</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-tags"></i>Nature
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-comments"></i>22
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="text">Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus
                                            ligula
                                            eget
                                            dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapinbus
                                            aliquam
                                            mi,
                                            eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing
                                            iaculis.
                                            Curabitur citae velit in neque dictum blandit. Proin in iaculis neque.
                                            Pellentesque
                                            habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                            egestas.</div>
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
                                    <a href="#">Logo Design</a>
                                </li>
                                <li>
                                    <a href="#">Web design</a>
                                </li>
                                <li>
                                    <a href="#">Photography</a>
                                </li>
                                <li>
                                    <a href="#">Wordpress</a>
                                </li>
                                <li>
                                    <a href="#">Icons</a>
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
                                        <div>
                                            <h6>Curabitur vitae velit</h6>
                                            <p>25 May 2013</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div>
                                            <h6>Vivamus at elit quisurna adipiscing iaculis</h6>
                                            <p>25 May 2013</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div>
                                            <h6>Curabitur vitae velit</h6>
                                            <p>25 May 2013</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
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
                            <ul>
                                <li><a href="#" class="btn btn-modus">Maecenas</a></li>
                                <li><a href="#" class="btn btn-modus">Nunc</a></li>
                                <li><a href="#" class="btn btn-modus">Praesent</a></li>
                                <li><a href="#" class="btn btn-modus">Nunc</a></li>
                                <li><a href="#" class="btn btn-modus">Praesent</a></li>
                                <li><a href="#" class="btn btn-modus">Nunc</a></li>
                                <li><a href="#" class="btn btn-modus">Maecenas</a></li>
                                <li><a href="#" class="btn btn-modus">Praesent</a></li>
                                <li><a href="#" class="btn btn-modus">Nunc</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="archive">
                        <h3>Archive</h3>

                        <div class="items">
                            <ul>
                                <li>
                                    <a href="#">2013 </a>
                                </li>
                                <li>
                                    <a href="#">2012 </a>
                                </li>
                                <li>
                                    <a href="#">2011 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
