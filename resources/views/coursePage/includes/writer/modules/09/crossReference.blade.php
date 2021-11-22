@extends('coursePage.course')

@section('content')
    <div class="container-fluid">
        <div class="carousel-container row">
            <div id="myCarousel" class="carousel slide carousel-outer" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-slide-number="0">
                        <img src="{{ asset('images/courses/writer/module09/topic02/rc00.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/writer/module09/topic02/rc00.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                    </div>
                    <div class="carousel-item" data-slide-number="1">
                        <img src="{{ asset('images/courses/writer/module09/topic02/rc01.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/writer/module09/topic01/rc01.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Carousel Navigation -->
            <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row mx-0">
                        <div id="carousel-selector-0" class="thumb col-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                            <img src="{{ asset('images/courses/writer/module09/topic02/rc00.png') }}" class="img-fluid" alt="...">
                        </div>
                        <div id="carousel-selector-1" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                            <img src="{{ asset('images/courses/writer/module09/topic02/rc01.png') }}" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> <!-- /row -->
    </div> <!-- /container -->
@endsection