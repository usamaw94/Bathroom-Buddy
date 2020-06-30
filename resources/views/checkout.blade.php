@extends('layouts.websiteLayout')

@section('styling')

    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>

    <link rel="stylesheet" type="text/css" href="/websiteAssets/css/paymentStyling.css">

@endsection

@section('content')

        <!-- Breadcrumb -->
<section class="breadcrumbs-wrap">
    <div class=" section-content section-content--w1140">
        <div class="container clearfix">
            <div class="breadcrumbs-inner">
                <ul class="breadcrumbs1 ul--inline ul--no-style">
                    <li>
                        <a href="index-2.html">Home</a>
                    </li>
                    <span class="span-active">/</span>
                    <li class="active">
                        Checkout
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->
<!-- Checkout Wrap -->
<section class="checkout-wrap">
    <div class=" section-content section-content--w1140">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="sblod m-t-40 m-b-25">Your order</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-cart table-order m-b-30">
                            <thead>
                            <tr>
                                <th class="name">Product</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $p)
                                <tr>
                                    <td class="name">
                                        {{ $p['item']->product_name }} x {{ $p['qty'] }}
                                    </td>
                                    <td>
                                        $ {{ $p['price'] }}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="sbold text-capitalize tcolor-333 name">
                                    Total
                                </td>
                                <td class="sbold total">
                                    $ {{ $totalPrice }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="container-fluid">
                    <form action="/checkoutProcessing" method="post" id="payment-form">
                        @csrf
                    <div class="row">
                            <div class="col-md-6">
                                <h4 class="sblod m-t-40 m-b-25">Shipping detail</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="au-input-group mt-0">
                                            <label>First name
                                                <span>*</span>
                                            </label>
                                            <input id="firstName" name="firstName" type="text" class="au-form-control" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="au-input-group mt-0">
                                            <label>last name
                                                <span>*</span>
                                            </label>
                                            <input id="lastName" name="lastName" type="text" class="au-form-control" placeholder="Last Name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="au-input-group">
                                            <label>email address
                                                <span>*</span>
                                            </label>
                                            <input name="email" id="email" type="email" class="au-form-control" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="au-input-group">
                                            <label>phone
                                                <span>*</span>
                                            </label>
                                            <input id="phone" name="phone" type="number" class="au-form-control" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="au-input-group">
                                    <label>Country name
                                        <span>*</span>
                                    </label>
                                    <select id="country" name="country" class="au-form-control">
                                        <option value="Australia">Australia</option>
                                    </select>
                                </div>
                                <div class="au-input-group">
                                    <label>Shipping Address
                                        <span>*</span>
                                    </label>
                                    <input id="address" name="address" type="text" class="au-form-control" placeholder="Street Address" required="">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="au-input-group">
                                            <label>Postcode / ZIP</label>
                                            <input id="postalCode" name="postalCode" type="text" class="au-form-control" placeholder="Postcode / ZIP" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="au-input-group">
                                            <label>State
                                                <span>*</span>
                                            </label>
                                            <input id="state" name="state" type="text" class="au-form-control" placeholder="State" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="sblod m-t-40 m-b-25">Payment details</h4>
                                <div class="au-input-group">
                                    <label>Card holder name
                                        <span>*</span>
                                    </label>
                                    <input type="text" id="cardHolderName" name="cardHolderName" class="au-form-control" placeholder="Name" required="">
                                </div>
                                <div class="au-input-group">
                                    <label for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>

                                <div class="form-sub">
                                    <button type="submit" class="au-btn au-btn--big au-btn--pill au-btn--yellow au-btn--white btn-block">Place Order</button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{----}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
<!-- End Checkout Wrap -->


@endsection

@section('scripts')

    <script type="text/javascript" src="/websiteAssets/js/checkout.js"></script>

@endsection