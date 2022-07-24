@extends('layouts.master')

@section('title', 'Check Out')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('get.view.home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('get.view.shop') }}">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="{{ route('get.add.order') }}" method="post" class="checkout-form">
                @csrf
                <div class="row">
                    @if (Cart::count() > 0)
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="login.html" class="content-btn">Click Here To Login</a>
                            </div>
                            <h4>Billing Details</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fir">First Name <span>*</span></label>
                                    <input type="text" name="first_name" id="fir">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last">Last Name <span>*</span></label>
                                    <input type="text" name="last_name" id="last">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun-name">Company Name <span>*</span></label>
                                    <input type="text" name="company_name" id="cun-name">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun">Country <span>*</span></label>
                                    <input type="text" name="country" id="cun">
                                </div>
                                <div class="col-lg-12">
                                    <label for="street">Street Address <span>*</span></label>
                                    <input type="text" name="street_address" id="street" class="street-first">
                                </div>
                                <div class="col-lg-12">
                                    <label for="zip">Postcode / ZIP (optional) <span>*</span></label>
                                    <input type="text" name="postcode_zip" id="zip">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Town / City <span>*</span></label>
                                    <input type="text" name="town_country" id="town">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="text" name="email" id="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone">Phone <span>*</span></label>
                                    <input type="text" name="phone" id="phone">
                                </div>
                                <div class="col-lg-12">
                                    <div class="create-item">
                                        <label for="acc-create">
                                            Create an account?
                                            <input type="checkbox" id="acc-create">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <input type="text" placeholder="Enter Your Coupon Code">
                            </div>
                            <div class="place-order">
                                <h4>Your Order</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Product <span>Total</span></li>
                                        @foreach ($carts as $cart)
                                            <li class="fw-normal">{{ $cart->name }} x
                                                {{ $cart->qty }}<span>${{ $cart->price * $cart->qty }}</span></li>
                                        @endforeach
                                        <li class="fw-normal">Subtotal <span>${{ $subtotal }}</span></li>
                                        <li class="total-price">Total <span>${{ $total }}</span></li>
                                    </ul>
                                    <div class="payment-check">
                                        <div class="pc-item">
                                            <label for="pc-check">
                                                Pay later
                                                <input type="radio" id="pc-check" name="payment_type" value="pay_later">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Online payment
                                                <input type="radio" id="pc-paypal" name="payment_type"
                                                    value="online_payment">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order-btn">
                                        <button type="submit" class="site-btn place-btn">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <h4>Your cart is empty</h4>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
