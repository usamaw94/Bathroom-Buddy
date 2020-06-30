@extends('layouts.websiteLayout')

@section('content')

        <!-- Navigation -->
<section class="navigation">
    <div class="container">
        <div class="parallax parallax--nav-2">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Contact
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Navigation -->
<!-- Contact content -->
<section class="contact-content">
    <div class="container">
        <div class="row">
            @if (session('success'))
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                </div>
            @endif
            <div class="col-md-6">
                <div class="m-t-40">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402586.84707765066!2d144.7729553360731!3d-37.972234228691335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC!5e0!3m2!1sen!2sau!4v1547445084385" width="100%" height="368px" style="border:none;"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-contact-wrap m-t-40">
                    <h4>Send us a message</h4>
                    <form class="form-contact js-contact-form" action="sendMessage" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="text" name="name" required placeholder="Your Name*">
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" name="email" placeholder="Your Email*" required>
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" class="message" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="au-btn au-btn--pill au-btn--yellow au-btn--big">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Content -->

@endsection