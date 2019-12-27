@extends('layouts.site-layout')


@section('title', 'Consult')


@section('content')

    <div class="site-blocks-cover overlay" style="background-image:  url({{URL::asset('assets/images/background.jpg')}});"data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">


                <div class="col-md-6 mt-lg-5 text-center">
                    <h1>We Are The Best Consulting Agency</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                    <div>
                        <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="site-section cta-big-image" id="about-section">
        <div class="container">

            <img src="{{URL::asset('assets/images/about.jpg')}}" alt="Image" class="img-fluid">
            <div class="img-box">
                <span class="sub-title">Creative Skills</span>
                <h2>Create Your Own Web Masterpiece</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis eveniet, voluptatem harum provident iusto modi explicabo! Aperiam velit reiciendis, eius impedit ea necessitatibus facilis nobis ipsum, architecto cum, doloribus nesciunt.</p>
                <p><a href="#" class="btn btn-outline-dark">Read More</a></p>
            </div>
        </div>
    </div>

@endsection