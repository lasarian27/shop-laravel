@extends('layouts.psd')

@section('content')

    <div class="breadcrumb-header">
        <div class="container ">
            <div class="row bread">
                <div class="col-auto">
                    <h6 class="mb-0">Contacts</h6>
                </div>

                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url(route('psd.home'))}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="contacts">
        <div class="container">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe onload="this.width=screen.width;this.height=screen.height;"
                            src="https://maps.google.com/maps?q=Spitalul%20de%20copii%20Iasi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
            <div class="intro">
                <p class="mb-0"> Etiam tincidunt turpis a vulputate. Etiam diam lorem, convallis as laoreet a, pretium id nisl. Morbi tincidunt nisem. Aenean eu nulla massa. Ut interdum tristique est commodo pharetra. Ut interdum tristique est commodo pharetra</p>
            </div>

            <div class="contact-details">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">
                            <h3>Send inquiry</h3>
                        </div>

                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">Email</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="col-sm-2 col-form-label">Website</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <textarea class="form-control" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-big-modus">SEND</button>
                        </form>
                    </div>

                    <div class="col-md-3">
                        <div class="title">
                            <h3 class="mb-0">Address</h3>
                        </div>
                        <div class="address">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Ut interdum tristique est com modo pharetra.</span>
                        </div>
                        <div class="phone">
                            <i class="fas fa-phone-alt"></i>
                            <span>111 5698 5698</span>
                        </div>
                        <div class="email">
                            <i class="far fa-envelope"></i>
                            <span>modus@versus.com</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
