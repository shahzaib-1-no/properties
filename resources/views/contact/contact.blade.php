@extends('welcome')

@section('title')
    contact
@endsection


@section('main')


<section class="section-hero">
    <div class="container-fluid">
        <div class="row" data-aos="fade-down">
            <div class="col d-flex justify-content-between align-items-center">
                <div><h4>Contact Us</h4></div>
                <div class="d-flex">
                    <a href="index.php">
                        <span class="pr-4"> <strong> Home </strong></span>
                    </a>
                    <span class="pr-4">
                        <strong><i class="fa-solid fa-angle-right"></i></strong>
                    </span>
                    <span> <strong>Contact Us </strong></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">

                <h4 id="contact">Properties in Manritins</h4>
                <p class="post-desc">Richard McClintock, a Latin professor at Hampden-Sydney Coll Virginia, 
                    looked up one of the more obscure Latin words, consectet from Lorem Ipsum passage, and 
                    going through the cites of the word in classical literatu Richard McClintocka Latin</p>


                    <div class="col-12 mb-3 mb-lg-0 mt-2 pl-2">
                        <div class="d-flex d-flex align-self-center">
                            <div class="div-contact-icon">
                                <div class="iconn-contact">
                                <i class="fa-solid fa-location-dot" id="icon-contact"></i>
                                </div>
                            </div>
                            <div class="ps-4 mt-4">
                                <h3 class="lt-title ">Location</h3>
                              <a href="https://maps.app.goo.gl/8YfXuTJYN9WZa2Z37"> <p class="hero-p" style="color:#333F4D">Old city Street,America 1212</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3 mb-lg-0 mt-2 pl-2">
                        <div class="d-flex d-flex align-self-center">
                            <div class="div-contact-icon">
                                <div class="iconn-contact">
                                <i class="fa-solid fa-phone" id="icon-contact"></i>
                                </div>
                            </div>
                            <div class="ps-4 mt-4">
                                <h3 class="lt-title ">Phone</h3>
                              <a href="tel:(+888) 456 789 123">  <p class="hero-p" style="color:#333F4D">(+888) 456 789 123</p></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mb-4 mb-lg-0 mt-2 pl-2">
                        <div class="d-flex d-flex align-self-center">
                            <div class="div-contact-icon">
                                <div class="iconn-contact">
                                <i class="fa-solid fa-envelope" id="icon-contact"></i>
                                </div>
                            </div>
                            <div class="ps-4 mt-4">
                                <h3 class="lt-title ">E-mail</h3>
                                <a href="mailto:arafame00541@mail.com"> <p class="hero-p" style="color:#333F4D;font-weight:500"> arafame00541@mail.com </p></a>
                            </div>
                        </div>
                    </div>


            </div>

            <div class="col-md-6" data-aos="fade-left">
            <div class="d-flex ">
                        <div class="vr mr-2 ml-2" id="vr"></div>
                        <div><h4 id="contact">Contact us</h4></div>
                </div>

                <form class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg" id="news-letter" placeholder="First Name" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg" id="news-letter" placeholder="Last Name" />
                    </div>

                                    <div class="col-md-6">
                                        <input type="number" class="form-control form-control-lg" id="news-letter" placeholder="Phone Number" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control form-control-lg" id="news-letter" placeholder="E-mail" />
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" id="news-letter" rows="4" placeholder="Comment"></textarea>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button type="button" class="btn btn-lg" id="btn-goog">Submit Here</button>
                                    </div>
                                </form>
            </div>

        </div>
    </div>
</section>


<section >
<iframe src="{{asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52911152.01212377!2d-161.6554510990339!3d35.96065628178864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1706563991505!5m2!1sen!2s')}}" width="100%" height="500" style="border:none; margin:0;padding:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>



@endsection

@push('script')
@endpush
