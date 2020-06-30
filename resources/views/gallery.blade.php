@extends('layouts.websiteLayout')

@section('content')

        <!-- Contact -->
<section class="contact">
    <div class="parallax parallax--contact parallax--contact1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact__inner clearfix">
                        <h3 class="title">
                            Gallery
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->
<!-- Recent Project -->
<section class="latest-project-4">
    <div class="row no-gutters">

        @foreach($galleryImages as $gI)
        <div class="col-lg-4 col-md-4">
            <div class="latest__item">
                <img alt="Lastest Project 1" src="{{ $gI->img_location }}">
                <a href="{{ $gI->img_location }}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
                    <i class="zmdi zmdi-plus-circle-o"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- End Recent Project -->


@endsection

@section('script')

@endsection