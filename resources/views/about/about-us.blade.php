@extends('welcome')
@section('main')

<section class="section-hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center" data-aos="flip-left">
                <div><h4 >About Us</h4></div>
                <div class="d-flex">
                    <a href="index.php">
                        <span class="pr-4" > <strong> Home </strong></span>
                    </a>
                    <span class="pr-4">
                        <strong><i class="fa-solid fa-angle-right"></i></strong>
                    </span>
                    <span> <strong>About Us </strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('about.about-about')
@include('about.about-faqs')



@endsection


