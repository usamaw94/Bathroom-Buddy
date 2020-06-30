@extends('layouts.websiteLayout')

@section('content')

        <!-- Slider -->
<section class="slide6">
  <div class=" section-content section-content--w1140">
    <div class="container">

      @if (session('success'))
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ session('success') }}</strong>
          </div>
        </div>
        @endif

      <!-- revolution slider begin -->
      <div class="rev_slider_wrapper">
        <div id="revolution-slider6" class="rev_slider" data-version="5.4.4" style="display: none;border-radius:20px">
          <ul>
            <li data-transition="crossfade" data-slotamount="7" data-masterspeed="2000" data-delay="7000">
              <!--  BACKGROUND IMAGE -->
              <img src="websiteAssets/img/carousal1.jpg" alt="Slide 1">

              <div class="tp-caption slide-title-6 yellow" data-x="left" data-y="['110', '110', '110', '55']" data-fontsize="[48, 48, 38, 32]"
                   data-whitespace="nowrap" data-textAlign="['left']" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                Latest
              </div>
              <div class="tp-caption slide-title-light white" data-x="left" data-y="['150', '150', '150', '85']" data-fontsize="[36, 36, 26, 24]"
                   data-whitespace="normal" data-textAlign="['left']" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                Trends
              </div>

              <a href="/bathroomProducts" class="tp-caption au-btn au-btn--big au-btn--pill au-btn--white au-btn--slide" data-x="left" data-y="['300', '290', '290', '205']"
                 data-textAlign="['left']" data-frames='[{"delay":2200,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'>
                Shop now
              </a>
            </li>

            <li data-transition="crossfade" data-slotamount="7" data-masterspeed="2000" data-delay="7000">
              <!--  BACKGROUND IMAGE -->
              <img src="websiteAssets/img/carousal2.jpg" alt="Slide 1">

              <div class="tp-caption slide-title-6 yellow" data-x="left" data-y="['110', '110', '110', '55']" data-fontsize="[48, 48, 38, 32]"
                   data-whitespace="nowrap" data-textAlign="['left']" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                Latest
              </div>
              <div class="tp-caption slide-title-light white" data-x="left" data-y="['150', '150', '150', '85']" data-fontsize="[36, 36, 26, 24]"
                   data-whitespace="normal" data-textAlign="['left']" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                Trends
              </div>

              <a href="/kitchenProducts" class="tp-caption au-btn au-btn--big au-btn--pill au-btn--white au-btn--slide" data-x="left" data-y="['300', '290', '290', '205']"
                 data-textAlign="['left']" data-frames='[{"delay":2200,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'>
                Shop now
              </a>
            </li>

            <li data-transition="crossfade" data-slotamount="7" data-masterspeed="2000" data-delay="7000">
              <!--  BACKGROUND IMAGE -->
              <img src="websiteAssets/img/carousal3.jpg" alt="Slide 1">

              <div class="tp-caption slide-title-6 yellow" data-x="left" data-y="['110', '110', '110', '55']" data-fontsize="[48, 48, 38, 32]"
                   data-whitespace="nowrap" data-textAlign="['left']" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                Latest
              </div>
              <div class="tp-caption slide-title-light white" data-x="left" data-y="['150', '150', '150', '85']" data-fontsize="[36, 36, 26, 24]"
                   data-whitespace="normal" data-textAlign="['left']" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                Trends
              </div>

              <a href="/laundryProducts" class="tp-caption au-btn au-btn--big au-btn--pill au-btn--white au-btn--slide" data-x="left" data-y="['300', '290', '290', '205']"
                 data-textAlign="['left']" data-frames='[{"delay":2200,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'>
                Shop now
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- revolution slider end -->
    </div>
  </div>
</section>
<!-- End Slider -->
<!-- Product -->
<section class="product">
  <div class=" section-content section-content--w1140">
    <div class="container">
      <div class="product-wrap">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="pro__item">
              <div class="pro__img">
                <p class="label au-collect" style="margin-top:9px">
                  <b style="font-weight:600">Bathroom</b>
                </p>
                <img alt="Product 7" class="borderadius" src="websiteAssets/img/ecco.jpg">
                <div class="pro-link">
                  <div class="pro-info pro-info--dark pro-info--center borderadius">
                    <a href="/bathroomProducts" class="au-btn au-btn--pill au-btn--big au-btn--yellow pro__add">
                      View Products
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="product__item">-->
            <!--<a href="product.html">-->
            <!--<img alt="Banner 1" src="img/ecco.jpg">-->
            <!--<p class="label au-collect" style="margin-top:9px">-->
            <!--<b style="font-weight:600">Bathroom</b>-->
            <!--</p>-->
            <!--</a>-->
            <!--<div class="pro-link">-->
            <!--<div class="pro-info pro-info&#45;&#45;dark pro-info&#45;&#45;center">-->
            <!--<a href="single-product.html" class="au-btn au-btn&#45;&#45;pill au-btn&#45;&#45;big au-btn&#45;&#45;yellow pro__add">-->
            <!--Add to cart-->
            <!--</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="pro__item">
              <div class="pro__img">
                <p class="label au-collect" style="margin-top:9px">
                  <b style="font-weight:600">Kitchen</b>
                </p>
                <img alt="Product 7" class="borderadius" src="websiteAssets/img/sink.jpg">
                <div class="pro-link">
                  <div class="pro-info pro-info--dark pro-info--center borderadius">
                    <a href="/kitchenProducts" class="au-btn au-btn--pill au-btn--big au-btn--yellow pro__add">
                      View Products
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-12">
            <div class="pro__item">
              <div class="pro__img">
                <p class="label au-collect" style="margin-top:9px">
                  <b style="font-weight:600">Laundry</b>
                </p>
                <img alt="Product 7" class="borderadius" src="websiteAssets/img/laundry.jpg">
                <div class="pro-link">
                  <div class="pro-info pro-info--dark pro-info--center borderadius">
                    <a href="/laundryProducts" class="au-btn au-btn--pill au-btn--big au-btn--yellow pro__add">
                      View Products
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Product -->
<!-- Our Product -->
<section class="our-product">
  <div class=" section-content section-content--w1140">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title title-6">Latest products</h3>
        </div>
      </div>


      <div class="parallax">
        <div class="slide-re-pro owl-carousel owl-theme" id="owl-re-pro-2">

          @foreach($latestProducts as $lp)
            <div class="slide-re-pro__item item">
            <a href="/productDetails/{{ $lp->id }}"><img alt="Project 1" src="{{ $lp->product_img_location }}" class="img-responsive">
            <h4 class="label au-collect" style="font-weight:500">
              {{ $lp->product_name }}
            </h4></a>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Our Product -->
<!-- Service 5 -->
<section class="service5">
  <div class=" section-content section-content--w1140">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service5__item pink borderadius">
            <div class="service5__inner borderadius clearfix">
              <div class="box-head">
                <img alt="Icon service 1" src="websiteAssets/img/icon/icon-service-10.png">
              </div>
              <div class="box-body">
                <p>
                  ORDER BEFORE 1PM FRIDAY & RECEIVE IT FREE SATURDAY MELBOURNE WIDE
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service5__item orange borderadius">
            <div class="service5__inner borderadius clearfix">
              <div class="box-head">
                <img alt="Icon service 2" src="websiteAssets/img/icon/icon-service-11.png">
              </div>
              <div class="box-body">
                <h5>
                  support 24/7
                </h5>
                <p>
                  before and after purchase
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service5__item borderadius green">
            <div class="service5__inner borderadius clearfix">
              <div class="box-head">
                <img alt="Icon service 3" src="websiteAssets/img/icon/icon-service-12.png">
              </div>
              <div class="box-body">
                <h5>
                  money back
                </h5>
                <p>
                  BEST PRICES GUARANTEED
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Service 5 -->
<!-- Statistic 2 -->
<section class="statistic27">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="statistic2__item">
          <div class="statistic2__icon">
            <a href="https://www.facebook.com">
              <img alt="Icon 1" src="websiteAssets/img/icon/fb.png">
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="statistic2__item">
          <div class="statistic2__icon">
            <a href="contact.html">
              <img alt="Icon 2" src="websiteAssets/img/icon/contact.png">
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="statistic2__item">
          <div class="statistic2__icon">
            <a href="https://www.instagram.com/">
              <img alt="Icon 3" src="websiteAssets/img/icon/find.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Statistic 2 -->

@endsection