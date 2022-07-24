@extends('layouts.master')

@section('title', 'Notification')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('get.view.home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('get.view.checkout') }}">Check Out</a>
                        <span>Notification</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <div class="col-lg-12">
                <h4>{{ $notification }}</h4>
                <a class="primary-btn mt-5" href="{{ route('get.view.shop') }}">Continue shopping</a>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
