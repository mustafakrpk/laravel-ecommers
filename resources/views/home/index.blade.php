@extends('main')
@section('content')
    <!-- Header Section Start -->
    <header id="slider-area">
        <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('storage/'.setting('site.logo'))}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#slider-area">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#portfolios">Works</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#subscribe">Subscribe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Carousel Section -->
        <div id="carousel-area">
            <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    @forelse($sliders as $slider)
                    <li data-target="#carousel-slider" data-slide-to="{{$slider->id}}" class="{{$slider->id ==1 ? 'active': ' '}}"></li>

                    @empty
                        yok
                    @endforelse

                </ol>
                <div class="carousel-inner" role="listbox">

                        @forelse($sliders as $slider)
                        <div class="carousel-item {{$slider->id ==1 ? 'active': ' '}}">
                        <img width="100%" height="900px" src="{{asset('storage/'.$slider->photo)}}" alt="">
                        <div class="carousel-caption text-center">
                            <h3 class="wow fadeInDown" data-wow-delay="0.3s">{{$slider->text_one}}</h3>
                            <h2 class="wow fadeInRight" data-wow-delay="0.6s">{{$slider->text_two}}</h2>
                            <h4 class="wow fadeInUp" data-wow-delay="0.6s">{{$slider->text_three}}</h4>
                            <a href="{{$slider->button_link}}" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">{{$slider->button_text}}</a>
                        </div>
                    </div>
                </div>
                @empty
                    yok
                @endforelse

                <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                    <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                    <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </header>
    <!-- Header Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Services</h2>
                <span>Services</span>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
            </div>
            <div class="row">
            @forelse($services as $service)

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                        <div class="icon color-1">
                            <i class="{{$service->icon}}"></i>
                        </div>

                        <h4>{{$service->title}}</h4>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                @empty
                    yok
                @endforelse
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->
    <section class="call-action section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="cta-trial text-center">
                        <h3>{{$calls->title}}</h3>
                        <p>{{$calls->description}}</p>
                        <a href="{{$calls->button_linki}}" class="btn btn-common btn-effect">{{$calls->button_text}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->

    <!-- Features Section Start -->
    <section id="features" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why Choose Us</h2>
                <span>Why</span>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
            </div>
            <div class="row">
                <!-- Start featured -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-icon">
                            <i class="lni-layout"></i>
                        </div>
                        <div class="featured-content">
                            <div class="icon-o"><i class="lni-layout"></i></div>
                            <h4>Refreshing Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- End featured -->
                <!-- Start featured -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-icon">
                            <i class="lni-tab"></i>
                        </div>
                        <div class="featured-content">
                            <div class="icon-o"><i class="lni-tab"></i></div>
                            <h4>Fully Responsive</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- End featured -->
                <!-- Start featured -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-icon">
                            <i class="lni-rocket"></i>
                        </div>
                        <div class="featured-content">
                            <div class="icon-o"><i class="lni-rocket"></i></div>
                            <h4>Fast & Smooth</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- End featured -->
                <!-- Start featured -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-icon">
                            <i class="lni-database"></i>
                        </div>
                        <div class="featured-content">
                            <div class="icon-o"><i class="lni-database"></i></div>
                            <h4>SEO Optimized</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- End featured -->
                <!-- Start featured -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-icon">
                            <i class="lni-leaf"></i>
                        </div>
                        <div class="featured-content">
                            <div class="icon-o"><i class="lni-leaf"></i></div>
                            <h4>Clean Code</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- End featured -->
                <!-- Start featured -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="featured-box">
                        <div class="featured-icon">
                            <i class="lni-pencil"></i>
                        </div>
                        <div class="featured-content">
                            <div class="icon-o"><i class="lni-pencil"></i></div>
                            <h4>Free 24/7 Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- End featured -->
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Start Video promo Section -->
    <section class="video-promo section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="video-promo-content text-center">
                        <a href="https://www.youtube.com/embed/LSgBpbgTlhw" class="video-popup"><i class="lni-film-play"></i></a>
                        <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Our Introductory Video</h2>
                        <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Learn more about us, its only 30mins</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
        <!-- Container Starts -->
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Works</h2>
                <span>Works</span>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Portfolio Controller/Buttons -->
                    <div class="controls text-center">
                      @forelse($categories as $cat)
                        <a class="filter btn btn-common btn-effect" data-filter=".cat_{{$cat->id}}">
                            {{$cat->title}}
                        </a>
                        @empty
                          yok
                        @endforelse
                    </div>
                    <!-- Portfolio Controller/Buttons Ends-->
                </div>
            </div>

            <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row">
                @forelse($works as $work)

                <div class="col-lg-4 col-md-6 col-xs-12 mix cat_{{$work->cat_id}}">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <img src="{{asset('storage/'.$work->photo)}}" alt="" />
                            <div class="single-content">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="{{asset('storage/'.$work->photo)}}"><i class="lni-zoom-in item-icon"></i></a>
                                        </div>
                                        <a href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                    yok
                @endforelse
            </div>
        </div>
        <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->


    <!-- Counter Section Start -->
    <div class="counters section bg-defult">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lni-rocket"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">100</span>%</h3>
                            <h4>Faster</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lni-coffee-cup"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">700</span></h3>
                            <h4>Cup of Coffee</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lni-user"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">10000</span>+</h3>
                            <h4>Active Clients</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lni-heart"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">1689</span></h3>
                            <h4>Peoples Love</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="touch-slider owl-carousel">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img1.jpg" alt="">
                                    </div>
                                    <div class="author-info">
                                        <h2><a href="#">Johnathan Doe</a></h2>
                                        <span>Marketing Head Matrix media</span>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star"></i></span>
                                    <span><i class="lni-star"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img2.jpg" alt="">
                                    </div>
                                    <div class="author-info">
                                        <h2><a href="#">Oidila Matik</a></h2>
                                        <span>President Lexo Inc</span>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img3.jpg" alt="">
                                    </div>
                                    <div class="author-info">
                                        <h2><a href="#">- Alex Dattilo</a></h2>
                                        <span>CEO Optima Inc</span>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img2.jpg" alt="">
                                    </div>
                                    <div class="author-info">
                                        <h2><a href="#">Oidila Matik</a></h2>
                                        <span>President Lexo Inc</span>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img1.jpg" alt="">
                                    </div>
                                    <div class="author-info">
                                        <h2><a href="#">- Alex Dattilo</a></h2>
                                        <span>CEO Optima Inc</span>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star"></i></span>
                                    <span><i class="lni-star"></i></span>
                                    <span><i class="lni-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Call To Action Section Start -->
    <section id="cta" class="section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="cta-text">
                        <h5>Stil confused? Download a free lite version to get started!</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 text-right">
                    <a href="#" class="btn btn-border">Download</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Start -->

    <!-- Team section Start -->
    <section id="team" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Team</h2>
                <span>Team</span>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="assets/img/team/team1.png" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Jhon Doe</h4>
                                <p>Chief Technical Officer</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="assets/img/team/team2.png" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Luke Chesser</h4>
                                <p>Marketing Executive</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="assets/img/team/team3.png" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">David Givens</h4>
                                <p>Business Manager</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="assets/img/team/team4.png" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Annie Spratt</h4>
                                <p>Graphic Designer</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section End -->

    <!-- Subcribe Section Start -->
    <div id="subscribe" class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="subscribe-form">
                        <div class="form-wrapper">
                            <div class="sub-title text-center">
                                <h3>Subscribe to Newsletter</h3>
                                <p>Weekly Freebies and More!</p>
                            </div>
                            <form action="{{route('newsletter')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-line">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common btn-effect">Subscribe Now</button>
                                        </div>
                                    </div>

                                    @if(session()->get('error'))
                                        <br>
                                        <div class="col-12">
                                            <br>
                                            <div class="alert alert-danger">
                                                {{session()->get('error')}}
                                            </div>
                                        </div>
                                    @endif

                                    @if(session()->get('message'))

                                    <div class="col-12">
                                        <br>
                                        <div class="alert alert-success">
                                          {{session()->get('message')}}
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    @forelse($newsletter_content as $nc)
                    <div class="sub-item-box">
                        <div class="icon-box">
                            <i class="{{$nc->icon}}"></i>
                        </div>
                        <div class="text-box">
                            <h4>{{$nc->title}}</h4>
                            <p>{{$nc->description}}</p>
                        </div>
                    </div>
                    @empty
                        yok
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Subcribe Section End -->

    <!-- Blog Section -->
    <section id="blog" class="section">
        <!-- Container Starts -->
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Blogs</h2>
                <span>Blogs</span>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="assets/img/blog/img1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="date"><i class="lni-calendar"></i>10 April, 2018</div>
                            <h3><a href="single-post.html">10 Tips to Design a High-converting Landing Page</a></h3>
                            <div class="meta-tags">
                                <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                                <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                                <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="assets/img/blog/img2.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="date"><i class="lni-calendar"></i>10 April, 2018</div>
                            <h3><a href="single-post.html">How to Design a Website For Your App</a></h3>
                            <div class="meta-tags">
                                <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                                <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                                <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="assets/img/blog/img3.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="date"><i class="lni-calendar"></i>10 April, 2018</div>
                            <h3><a href="single-post.html">7 Secretes to Optimize Loading Speed of Your Site</a></h3>
                            <div class="meta-tags">
                                <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                                <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                                <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
            </div>
        </div>
    </section>
    <!-- blog Section End -->

    <!-- Clients Section -->
    <div id="clients" class="section">
        <!-- Container Ends -->
        <div class="container">
            <!-- Row and Scroller Wrapper Starts -->
            <div class="row" id="clients-scroller">
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img1.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img2.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img3.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img4.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img5.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Client Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section">
        <div class="contact-form">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Get In Touch</h2>
                    <span>Contact</span>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <div class="contact-block">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Your Message" rows="7" data-error="Write your message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="submit-button">
                                            <button class="btn btn-common btn-effect" id="submit" type="submit">Send Message</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <div class="contact-deatils">
                            <!-- Content Info -->
                            <div class="contact-info_area">
                                <div class="contact-info">
                                    <i class="lni-map"></i>
                                    <h5>Location</h5>
                                    <p>1900 Pico Blvd, New York br Centernial, colorado</p>
                                </div>
                                <!-- Content Info -->
                                <div class="contact-info">
                                    <i class="lni-star"></i>
                                    <h5>E-mail</h5>
                                    <p>info@example.com</p>
                                </div>
                                <!-- Content Info -->
                                <div class="contact-info">
                                    <i class="lni-phone"></i>
                                    <h5>Phone</h5>
                                    <p>+48 123 456 789</p>
                                </div>
                                <!-- Icon -->
                                <ul class="footer-social">
                                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 padding-0">
                    <object style="border:0; height: 450px; width: 100%;" data="{{setting('site.map')}}"></object>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section End -->

    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <h3> <img src="{{asset('storage/'.setting('site.logo'))}}" alt=""></h3>
                        <div class="textwidget">
                            <p>{{setting('site.about')}}</p>
                        </div>
                        <ul class="footer-social">
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Short Link</h3>
                            <ul class="menu">
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Advance Sarch</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Contact Us</h3>
                            <ul class="contact-footer">
                                <li>
                                    <strong>Address :</strong> <span>{{setting('site.adres')}}</span>
                                </li>
                                <li>
                                    <strong>Phone :</strong> <span>{{setting('site.phone')}}</span>
                                </li>
                                <li>
                                    <strong>E-mail :</strong> <span><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Instagram</h3>
                            <ul class="instagram-footer">
                                <li><a href="#"><img src="assets/img/instagram/insta1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/instagram/insta2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/instagram/insta3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/instagram/insta4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/instagram/insta5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/instagram/insta6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer area End -->

        <!-- Copyright Start  -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info text-center">
                            <p>{{setting('site.footer')}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->
</footer>
@endsection
