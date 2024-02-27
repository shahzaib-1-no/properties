@extends('welcome')
@section('main')
    <section class="form-section">
        <div class="form-bg pt-5">
            <div class="container-fluid login">
                <div class="row">
                    <div class="col-md-offset-3 col-lg-6">
                        <form class="form-horizontal" action="{{asset('login')}}" method="post">
                            @csrf
                            <span class="heading">
                                <h4 class="login">Sign in to your Account</h4>
                                <p>Enter to continue and explore within your grasp
                                </p>
                            </span>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="inputEmail3" value="{{old('email')}}" placeholder="Email or Username">
                                <i class="fa fa-user"></i>
                                <span class="error">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group help">
                                <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                                <i class="fa fa-lock"></i>
                                <a href="#" class="fa-solid fa-eye"></a>
                                <span class="error">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="main-checkbox">
                                    <input type="checkbox" value="None" id="checkbox1" name="check">
                                    <label for="checkbox1"></label>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text">Remember me</span>

                                    <a href="#"> <span class="text"> Forgot password?</span></a>
                                </div>
                                <!-- <button type="submit" class="btn btn-default">log in</button> -->
                                <br>
                                <button type="submit" class="btn btn-lg" id="btn-goog"
                                    style="background:#5381F8;border:none">Sign in to Continue</button>

                                <p class="pt-3">Don’t have an account ? <b> <a href="{{asset('sign_up')}}" style="color:blue"> Sign
                                            up </a> </b></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
