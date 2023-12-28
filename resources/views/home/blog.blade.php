@extends('home.layouts.app')

@push('style')
@endpush

@push('title')
    Indian - Handmade Shop eCommerce
@endpush

@section('meta_tags')
@endsection

@section('content')
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{  asset('assets/images/bg/page-title-1.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Blog</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Blog Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row learts-mb-n40">

                <div class="col-lg-4 col-md-6 col-12 learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img src="{{  asset('assets/images/blog/s370/blog-1.webp') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 201 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Start a Kickass Online Blog</a>
                            </h5>
                            <div class="desc">
                                <p>Working on writing our first book has been one of the most amazing projects. It seems
                                    like it will be forever until I get to show you what we’ve been…</p>
                            </div>
                            <a href="{{ route('single.blog', ['slug'=> 'test-blog']) }}" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img src="{{  asset('assets/images/blog/s370/blog-2.webp') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 158 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Tile Tray with Brass Handles</a>
                            </h5>
                            <div class="desc">
                                <p>Happy New Year All! I am back after the holiday break and so excited for all the home
                                    projects I have planned in 2020. So when they asked me to come…</p>
                            </div>
                            <a href="{{ route('single.blog', ['slug'=> 'test-blog']) }}" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img src="{{  asset('assets/images/blog/s370/blog-3.webp') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 119 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Dining Table Chairs Makeover</a>
                            </h5>
                            <div class="desc">
                                <p>I did not know exactly the shape I was looking for, but knew that I wanted to paint them
                                    with this SUPER pretty Krylon® Italian Olive color. I stopped at…</p>
                            </div>
                            <a href="{{ route('single.blog', ['slug'=> 'test-blog']) }}" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img src="{{  asset('assets/images/blog/s370/blog-4.webp') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 83 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Faux Map Drawer Dresser</a></h5>
                            <div class="desc">
                                <p>I gave you all a peek at my guest room makeover yesterday and promised I would share all
                                    the details on my DIY Map Dresser, so here we go! I initially had…</p>
                            </div>
                            <a href="{{ route('single.blog', ['slug'=> 'test-blog']) }}" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img src="{{  asset('assets/images/blog/s370/blog-5.webp') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 83 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Printable Season Postcards 2019</a>
                            </h5>
                            <div class="desc">
                                <p>The print is an 8×10. You can print it at your house or at a local print place like
                                    Costco or FedEx Office. I recommend printing on card stock. Please…</p>
                            </div>
                            <a href="{{ route('single.blog', ['slug'=> 'test-blog']) }}" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img src="{{  asset('assets/images/blog/s370/blog-6.webp') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 83 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Make a State Necklace</a></h5>
                            <div class="desc">
                                <p>In attempt to make my own state shaped necklace, I did a little researching last night
                                    and found a great tutorial on the blog, V Juliet. I had everything I needed so…</p>
                            </div>
                            <a href="{{ route('single.blog', ['slug'=> 'test-blog']) }}" class="link">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row learts-mt-50">
                <div class="col text-center">
                    <a href="#" class="btn btn-dark btn-outline-hover-dark">Load More</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Section End -->
@endsection

@section('script')
@endsection
