@extends('layouts.guest')

@section('guest-content')

<div class="row m-0">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
        <div class="row mt-3 mb-3 ms-0 me-0">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card shadow rounded border border-dark">
                    <div class="card-header bg-primary">
                        <h2 class="card-title text-center text-white text-uppercase"><b>Login Portal</b></h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <p class="text-dark">{{ session('status') }}</p>
                            </div>
                        @endif

                        <!-- Start of system notifications area -->
                        
                        @if(Session::has('password_changed_logout_notification'))
                            <div class="alert alert-success p-1" id="system-notification-container">
                                <p class="p-1">{!! Session::get('password_changed_logout_notification') !!}<button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                            </div>
                        @endif

                    <!-- End of system notifications area -->

                        <form action="{{ route('login') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <label for="input_email" class="form-label"><b>Email:</b></label>

                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror border border-secondary rounded" id="input_email" :value="old('email')" autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <label for="input_password" class="form-label"><b>Password:</b></label>

                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror border border-secondary rounded" id="input_password" autofocus>
                                    @if (Route::has('password.request'))
                                        <a class="float-end pt-1" href="{{ route('password.request') }}" data-bs-toggle="tooltip" data-bs-placement="right" 
                                        data-bs-title="Initiate password reset">Forgot your password?</a>
                                    @endif

                                    @error('password')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="float-start">
                                        <input type="checkbox" name="remember" class="form-control rounded" id="input_remember_me" autofocus>
                                        <label for="input_remember_me" class="form-label"><b>Remember me ?:</b></label>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary rounded-pill float-end text-uppercase" id="loginButton" data-bs-toggle="tooltip" 
                                    data-bs-placement="right" data-bs-title="Proceed and access your account">Login</button>
                                </div>
                            </div>
                        </form>

                        {{--<div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <a class="float-start pt-3" href="{{ route('register') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Register for an account">
                                    Don't have an account ?</a>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
        </div>
    </div>
</div>
@endsection


      
