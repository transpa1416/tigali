@extends('coursePage.course')

@section('content')
<div class="container mt-5">
    <div class="carousel-container row">
        <div id="myCarousel" class="carousel slide carousel-outer" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-slide-number="0">
            <img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="1">
            <img src="https://source.unsplash.com/tXqVe7oO-go/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="2">
            <img src="https://source.unsplash.com/qlYQb7B9vog/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="3">
            <img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="4">
            <img src="https://source.unsplash.com/CSIcgaLiFO0/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="5">
            <img src="https://source.unsplash.com/a_xa7RUKzdc/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/a_xa7RUKzdc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="6">
            <img src="https://source.unsplash.com/uanoYn1AmPs/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/uanoYn1AmPs/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="7">
            <img src="https://source.unsplash.com/_snqARKTgoc/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/_snqARKTgoc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="8">
            <img src="https://source.unsplash.com/M9F8VR0jEPM/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/M9F8VR0jEPM/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="9">
            <img src="https://source.unsplash.com/Q1p7bh3SHj8/1600x900/" class="d-block w-75 h-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
            <div class="carousel-item" data-slide-number="10">
            <img src="{{ asset('images/courses/writer/module01/components.png') }}" class="d-block w-75 h-100" alt="..." data-remote="{{ asset('images/courses/writer/module01/components.png') }}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
            </div>
        </div>
        </div>

        <!-- Carousel Navigation -->
        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="row mx-0">
                <div id="carousel-selector-0" class="thumb col-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                <img src="https://source.unsplash.com/Pn6iimgM-wo/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-1" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                <img src="https://source.unsplash.com/tXqVe7oO-go/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-2" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                <img src="https://source.unsplash.com/qlYQb7B9vog/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-3" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                <img src="https://source.unsplash.com/QfEfkWk1Uhk/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-4" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                <img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-5" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                <img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/" class="img-fluid" alt="...">
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <div class="row mx-0">
                <div id="carousel-selector-6" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
                <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-7" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
                <img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-8" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
                <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-9" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
                <img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/" class="img-fluid" alt="...">
                </div>
                <div id="carousel-selector-6" class="thumb col-2 px-1 py-2" data-target="#myCarousel" data-slide-to="10">
                    <img src="{{ asset('images/courses/writer/module01/components.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-2 px-1 py-2"></div>
                <div class="col-2 px-1 py-2"></div>
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
