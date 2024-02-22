@extends('welcome')

@section('title')
    Blog
@endsection


@section('main')
    <section class="section-hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                    <div data-aos="fade-right">
                        <h4>Blog Grid</h4>
                    </div>
                    <div class="d-flex" data-aos="fade-left">
                        <a href="index.php">
                            <span class="pr-4"> <strong> Home </strong></span>
                        </a>
                        <span class="pr-4">
                            <strong><i class="fa-solid fa-angle-right"></i></strong>
                        </span>
                        <span> <strong>Blog Grid </strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('blog.blog_two')
@endsection

@push('script')
@endpush
