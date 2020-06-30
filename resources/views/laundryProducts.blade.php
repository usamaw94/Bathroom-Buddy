@extends('layouts.websiteLayout')

@section('content')
	<!-- Navigation -->
    <section class="navigation">
	<div class="container">
      <div class="parallax parallax--nav-5">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-12">
              <h2>
                laundry
              </h2>
            </div>
          </div>
        </div>
      </div>
	</div>
    </section>
    <!-- End Navigation -->
	<!-- Blog List -->
    <section class="blog-list-wrap1">
      <div class="container">
        <div class="row">
		<div class="col-lg-4 col-md-5">
            <div class="blog-sidebar1">
              <div class="blog__tag-wrap">
                <h4 class="title-sidebar">
                  Category
                </h4>
                <div class="blog__tag">
                  @if( ! empty($laundryProductType))

                    @foreach($laundryProductTypes as $lpt)
                      @if($laundryProductType == $lpt->product_type_name)
                        <a style="background: #ebcd1e" href="/showLaundryProductsByType/{{ $lpt->product_type_name }}">
                          {{ $lpt->product_type_name }}
                        </a>
                      @else
                        <a href="/showLaundryProductsByType/{{ $lpt->product_type_name }}">
                          {{ $lpt->product_type_name }}
                        </a>
                      @endif
                    @endforeach

                  @else

                    @foreach($laundryProductTypes as $lpt)
                      <a href="/showLaundryProductsByType/{{ $lpt->product_type_name }}">
                        {{ $lpt->product_type_name }}
                      </a>
                    @endforeach

                  @endif
                  <a style="border:1px solid black;color: black" href="/laundryProducts">
                    Show all products
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="row">
              @foreach($laundryProducts as $lp)
                <div class="col-lg-4 col-md-6">
                  <div class="pro__item">
                    <div class="pro__img">
                      {{--<span class="label label--small pink">--}}
                      {{--sale--}}
                      {{--</span>--}}
                      <img alt="Product 1" class="borderadius" src="/{{ $lp->product_img_location }}">
                      <div class="pro-link">
                        <div class="pro-info pro-info--dark pro-info--center">
                          <a href="/productDetails/{{ $rp->id }}" class="au-btn au-btn--pill au-btn--big au-btn--yellow pro__add">
                            View Deails
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="pro__detail borderadius1">
                      <h5>
                        <a href="single-product.html">
                          {{ $lp->product_name }}
                        </a>
                      </h5>

                      <div class="pro__price">
                        {{--<span class="old">--}}
                        {{--$102.00--}}
                        {{--</span>--}}
                        <span class="current">
                        ${{ $lp->product_price }}
                          <br>
                          {{ $lp->product_type }}
                      </span>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog List -->
    <!-- Pro List -->
    <section class="pro-list-wrap">
      <div class=" section-content section-content--w1140">
        <div class="container">
          <div class="pro-sorting clearfix">
            <div class="sort-left pull-left">
              show
              <span id="from">
                {{($laundryProducts->currentPage()-1)* $laundryProducts->perPage() + 1}}
              </span>
              to
              <span id="to">
                {{ ($laundryProducts->currentPage()-1)* $laundryProducts->perPage() + $laundryProducts->perPage() }}
              </span>
              of
              <span id="all">{{ $laundryProducts->total() }}</span>
              result
            </div>
            <div class="sort-right pull-right">
              {{ $laundryProducts->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Pro List -->
    <!-- Service 5 -->
    <section class="service5">
      <div class=" section-content section-content--w1140">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="service5__item pink borderadius">
                <div class="service5__inner borderadius clearfix">
                  <div class="box-head">
                    <img alt="Icon service 1" src="/websiteAssets/img/icon/icon-service-10.png">
                  </div>
                  <div class="box-body">
                    <h5>
                      FREE SHIPPING
                    </h5>
                    <p>
                      FOR STANDARD ORDER OVER $150
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="service5__item orange borderadius">
                <div class="service5__inner borderadius clearfix">
                  <div class="box-head">
                    <img alt="Icon service 2" src="/websiteAssets/img/icon/icon-service-11.png">
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
              <div class="service5__item green borderadius">
                <div class="service5__inner borderadius clearfix">
                  <div class="box-head">
                    <img alt="Icon service 3" src="/websiteAssets/img/icon/icon-service-12.png">
                  </div>
                  <div class="box-body">
                    <h5>
                      money back
                    </h5>
                    <p>
                      if you dont satisfied
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

@endsection