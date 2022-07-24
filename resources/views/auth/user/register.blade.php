@extends('layouts.master')

@section('title', 'Admin Register')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="{{ route('post.user.register') }}" method="POST">
                            @csrf
                            <div class="group-input">
                                <label for="username">Full Name *</label>
                                <input name="name" type="text" id="name">
                            </div>
                            @if ($errors->has('name'))
                                <span style="color: red">{{ $errors->first('name') }}</span>
                            @endif
                            <div class="group-input">
                                <label for="email">Email Address *</label>
                                <input name="email" type="text" id="email">
                            </div>
                            @if ($errors->has('email'))
                                <span style="color: red">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="group-input">
                                <label for="phone">Phone *</label>
                                <input name="phone" type="tel" id="phone">
                            </div>
                            @if ($errors->has('phone'))
                                <span style="color: red">{{ $errors->first('phone') }}</span>
                            @endif
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input name="password" type="password" id="pass">
                            </div>
                            @if ($errors->has('password'))
                                <span style="color: red">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input name="password_confirmation" type="password" id="con-pass">
                            </div>
                            <button type="submit" class="site-btn login-btn">Register</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{ route('get.user.login') }}" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Section End -->
@endsection
