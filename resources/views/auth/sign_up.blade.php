@extends('welcome')
@section('main')
    <section class="form-section-sign-up">
        <div class="form-bg pt-5">
            <div class="container-fluid login">
                <div class="row">
                    <div class="col-md-offset-3 col-lg-6">
                        <form class="form-horizontal" action="{{asset('register')}}" method="post">
                            @csrf
                            <span class="heading">
                                <h4 class="login">Sign up to your Account</h4>

                            </span>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="inputEmail3"
                                    placeholder="First Name">
                                <i class="fa fa-user"></i>
                                <span class="error">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}"id="inputEmail3"
                                    placeholder="Last Name">
                                <i class="fa fa-user"></i>
                                <span class="error">
                                    @error('last_name')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" id="inputEmail3"
                                    placeholder="Enter email or phone">
                                <i class="fa fa-user"></i>
                                <span class="error">
                                    @error('email')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>


                            <div class="form-group help">
                                <input type="password" class="form-control" name="password" id="inputPassword3"
                                    placeholder="Password">
                                <i class="fa fa-lock"></i>
                                <a href="#" class="fa-solid fa-eye"></a>
                                <span class="error">
                                    @error('password')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>




                            <div class="form-group d-flex justify-content-between" id="payment-budget">
                                <div> <b> Simple Member </b></div>
                                <div> <b> Free</b> </div>
                                <div class="form-check"><input class="form-check-input" name="member" value="simple" type="radio"></div>
                            </div>

                            <div class="form-group d-flex justify-content-between" id="payment-budget">
                                <div> <b> Verified member </b></div>
                                <div> <b> $100</b> </div>
                                <div class="form-check"><input class="form-check-input"  name="member" value="verified" type="radio"></div>
                            </div>

                            <div class="form-group d-flex justify-content-between" id="payment-budget">
                                <div> <b>Gold Member</b></div>
                                <div> <b> $200</b> </div>
                                <div class="form-check"><input class="form-check-input" name="member" value="gold"  type="radio"></div>
                            </div>

                            <span class="error">
                                @error('member')
                                {{$message}}
                            @enderror


                            <div class="form-group">
                                <a href="payment.php"> <button type="submit" class="btn btn-lg" id="btn-goog"
                                        style="background:#5381F8;border:none">Continue</button></a>
                                <p class="pt-3">Don’t have an account ? <b> <a href="{{asset('login')}}" style="color:#5381F8">
                                            Sign in </a> </b></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
