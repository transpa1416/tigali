@extends('coursePage.course')

@section('content')
    <div class="embed-responsive embed-responsive-16by9">
        {{-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XOD-bnK_Gpk?rel=0" frameborder="0" allowfullscreen></iframe> --}}
        <iframe class="embed-responsive-item" src={{ asset('media/writer/cap1.mp4') }} frameborder="0" allowfullscreen></iframe>
    </div>
@endsection
