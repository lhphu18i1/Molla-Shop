
@extends('layouts.master')

@section('title', 'Molla Blog')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('get.view.home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search..." name="" id="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="">Molla</a></li>
                                <li><a href="">Travel</a></li>
                                <li><a href="">Picnic</a></li>
                                <li><a href="">Model</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{ asset('frontend/img/blog/recent-1.jpg') }}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes</h6>
                                        <p>codeleanon <span>- May 19, 2022</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{ asset('frontend/img/blog/recent-1.jpg') }}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes</h6>
                                        <p>codeleanon <span>- May 19, 2022</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{ asset('frontend/img/blog/recent-1.jpg') }}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes</h6>
                                        <p>codeleanon <span>- May 19, 2022</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{ asset('frontend/img/blog/recent-1.jpg') }}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes</h6>
                                        <p>codeleanon <span>- May 19, 2022</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Product Tags</h4>
                            <div class="tag-item">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Backpack</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>hgakjhlajglkahgalhgkaj</h4>
                                    </a>
                                    <p>travel <span>-May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>hgakjhlajglkahgalhgkaj</h4>
                                    </a>
                                    <p>travel <span>-May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>00000000000000000</h4>
                                    </a>
                                    <p>travel <span>-May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>00000000000000000</h4>
                                    </a>
                                    <p>travel <span>-May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>00000000000000000</h4>
                                    </a>
                                    <p>travel <span>-May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>00000000000000000</h4>
                                    </a>
                                    <p>travel <span>-May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">Loading More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
