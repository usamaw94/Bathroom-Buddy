@extends('layouts.websiteLayout')

@section('content')

<!-- Breadcrumb -->
<section class="breadcrumbs-wrap">
    <div class=" section-content section-content--w1140">
        <div class="container clearfix">
            <div class="breadcrumbs-inner">
                <ul class="breadcrumbs1 ul--inline ul--no-style">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    @if($mainCategory == 'Bathroom')
                        <span class="span-active">/</span>
                        <li>
                        <a href="/bathroomProducts">Bathroom products</a>
                        </li>
                    @elseif($mainCategory == 'Kitchen')
                        <span class="span-active">/</span>
                        <li>
                        <a href="/kitchenProducts">Kitchen products</a>
                        </li>
                    @else
                        <span class="span-active">/</span>
                        <li>
                        <a href="/laundryProducts">Laundry peoducts</a>
                        </li>
                    @endif
                    <span class="span-active">/</span>
                    <li class="active">
                        {{ $product[0]->product_name }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->
<!-- Single Product -->
<section class="single-product">
    <div class=" section-content section-content--w1140">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="single-product-img">
                        <img alt="Product Big" src="/{{ $product[0]->product_img_location }}">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="single-product-detail">
                        <h2>{{ $product[0]->product_name }}</h2><br>
                        <h3>Product Code: {{ $product[0]->product_code }}</h3>
                        <br>
                        <div class="pro__price">
                            <span class="current"><h4>Type: {{ $product[0]->product_type }}</h4></span>
                        </div>
                        <br>
                        <div class="pro__price">
                            <span class="current"><h1 style="color: #ebcd1e">Price: ${{ $product[0]->	product_price }}</h1></span>
                        </div>
                        <br>
                        <p>
                            <b>Description: </b>{!! $product[0]->product_desc !!}
                        </p>
                        {{--<div class="row no-gutters m-t-20">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="li-item">--}}
                                    {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                                    {{--Neque porro quisquam est--}}
                                {{--</div>--}}
                                {{--<div class="li-item">--}}
                                    {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                                    {{--Ut enim ad minima veniam--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="li-item">--}}
                                    {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                                    {{--Quis autem vel eum iure reprehenderit qui in--}}
                                {{--</div>--}}
                                {{--<div class="li-item">--}}
                                    {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                                    {{--At vero eos et accusamus et iusto--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        <button id="addToCart" data-id="{{ $product[0]->id }}" class="au-btn au-btn--big au-btn--pill au-btn--yellow au-btn--white">Add to cart</button>

                        {{--<div class="single-product-form">--}}
                            {{--<form role="form">--}}
                                {{--<div class="quantity">--}}
                                    {{--<input type="number" min="1" max="999" tep="1" value="1">--}}
                                    {{--<div class="quantity-nav">--}}
                                        {{--<div class="quantity-button quantity-up">--}}
                                            {{--<i class="zmdi zmdi-chevron-up"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="quantity-button quantity-down">--}}
                                            {{--<i class="zmdi zmdi-chevron-down"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="au-btn au-btn--big au-btn--pill au-btn--yellow au-btn--white">Add to cart</button>--}}
                            {{--</form>--}}
                        {{--</div>--}}


                        {{--<div class="single-product-tab">--}}
                            {{--<ul class="nav nav-tabs" id="pro-tab" role="tablist">--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link active" id="home-tab" data-toggle="tab" href="#description" role="tab" aria-controls="all" aria-expanded="true">Description</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" data-toggle="tab" href="#review" role="tab" aria-controls="on-sale">Review--}}
                                        {{--<span>(1)</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<div class="tab-content" id="pro-content">--}}
                                {{--<div class="tab-pane active" id="description" role="tabpanel" aria-labelledby="home-tab">--}}
                                    {{--<p class="m-b-25">--}}
                                        {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque--}}
                                        {{--ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.--}}
                                    {{--</p>--}}
                                    {{--<p>--}}
                                        {{--<span class="tcolor-333 sbold">Material: </span>Synthetic resins--}}
                                    {{--</p>--}}
                                    {{--<p>--}}
                                        {{--<span class="tcolor-333 sbold">Perfomance: </span>Saving 15 % Electric power--}}
                                    {{--</p>--}}
                                    {{--<p>--}}
                                        {{--<span class="tcolor-333 sbold">Guarantee: </span>6 months--}}
                                    {{--</p>--}}
                                    {{--<p class="m-t-25">--}}
                                        {{--Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                                {{--<div class="tab-pane" id="review" role="tabpanel">--}}
                                    {{--<div class="pro-review-item">--}}
                                        {{--<div class="cus-info clearfix">--}}
                          {{--<span class="sbold">--}}
                            {{--Thomas Wagner--}}
                          {{--</span>--}}
                                            {{--<div class="pro__star pull-right">--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<p>--}}
                                            {{--Phasellus rutrum sollicitudin nisl, at egestas tortor sagittis eget. Nulla tincidunt felis metus, in vehicula lectus porta--}}
                                            {{--a. Sed felis erat, sodales in turpis eumaneta.--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- End Tab Content   -->--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center sbold m-t-70 m-b-5">Related Products</h3>
                </div>
            </div>
            <div class="row">
                @foreach($relatedProducts as $rp)
                    <div class="col-lg-3 col-md-6">
                    <div class="pro__item">
                        <div class="pro__img">
                            <img alt="Product 1" src="/{{ $rp->product_img_location }}">
                            <div class="pro-link">
                                <div class="pro-info pro-info--dark pro-info--center">
                                    <a href="/productDetails/{{ $rp->id }}" class="au-btn au-btn--pill au-btn--big au-btn--yellow pro__add">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pro__detail">
                            <h5>
                                <a href="/productDetails/{{ $rp->id }}">
                                    {{ $rp->product_name }}
                                </a>
                            </h5>

                            <div class="pro__price">
                    <span class="current">
                      ${{ $rp->product_price }}
                    </span>
                            </div>
                            <div class="pro__star">

                                {{ $rp->product_type }}
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Single Product -->

@endsection