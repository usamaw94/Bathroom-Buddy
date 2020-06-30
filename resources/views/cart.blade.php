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
                    <span class="span-active">/</span>
                    <li class="active">
                        Cart
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

@if(Session::has('cart') && $totalPrice > 0)

        <div id="reloadCart">
        <!-- Cart Wrap -->
    <section class="cart-wrap">
        <div class=" section-content section-content--w1140">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-cart m-b-30">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $p)
                            <tr>
                                <td>
                                    <a style="cursor: pointer" title="Remove item from cart" id="removeItem" data-id="{{ $p['item']->id }}" class="remove">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                </td>
                                <td class="text-left pro-cart">
                                    <div class="img-cart">
                                        <img alt="Product" src="{{ $p['item']->product_img_location }}">
                                    </div>
                                <span>
                                    {{ $p['item']->product_name }}
                                </span>
                                </td>
                                <td class="text-left">
                                    $ {{ $p['item']->product_price }}
                                </td>
                                <td>
                                    <form role="form">
                                        <div class="quantity">
                                            <input type="number" min="1" step="1" value="{{ $p['qty'] }}" readonly>
                                            <div class="quantity-nav">
                                                <a title="Increase quantity" id="addToCartOnCart" data-id="{{ $p['item']->id }}" class="quantity-button quantity-up">
                                                    <i class="zmdi zmdi-chevron-up"></i>
                                                </a>
                                                <a title="Decrease quantity" id="ReduceByOne" data-id="{{ $p['item']->id }}" class="quantity-button quantity-down">
                                                    <i class="zmdi zmdi-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-left">
                                    $ {{ $p['price'] }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="cart-total">
                    <h4 class="text-left sbold m-b-20">CART TOTAL</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-cart-total m-b-30">
                            <tr>
                                <td>
                                    Total
                                </td>
                                <td class="sbold total">
                                    ${{ $totalPrice }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <a href="/checkout" class="au-btn au-btn--big au-btn--pill au-btn--yellow au-btn--white">
                            Proceed to checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Wrap -->
        </div>

@else
    <section class="cart-wrap">
        <div class=" section-content section-content--w1140">
            <div class="container">
                <h2>No items in the cart</h2>
            </div>
        </div>
    </section>
@endif

@endsection