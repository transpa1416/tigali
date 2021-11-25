@extends('coursePage.includes.calc.course')

@section('content')
<div class="container-fluid">
    <div class="carousel-container row">
        <div id="myCarousel" class="carousel slide carousel-outer" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active" data-slide-number="0">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format00.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format00.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="1">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format01.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format01.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="2">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format02.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format02.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="3">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format03.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format03.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="4">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format04.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format04.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="5">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format05.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format05.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="6">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format06.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format06.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="7">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format07.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format07.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="8">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format08.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format08.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="9">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format09.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format09.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="10">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format10.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format10.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="11">
                    <img src="{{ asset('images/courses/calc/module05/topic02/format11.png') }}" class="h-100 d-inline-block w-100 p-3" alt="..." data-remote="{{ asset('images/courses/calc/module05/topic02/format11.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
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
                        <img src="{{ asset('images/courses/calc/module05/topic02/format00.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-1" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format01.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-2" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format02.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-3" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format03.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-4" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format04.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-5" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format05.png') }}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row mx-0">
                    <div id="carousel-selector-6" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format06.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-7" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format07.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-8" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format08.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-9" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format09.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-10" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="10">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format10.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div id="carousel-selector-11" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="11">
                        <img src="{{ asset('images/courses/calc/module05/topic02/format11.png') }}" class="img-fluid" alt="...">
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
