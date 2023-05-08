@extends('layouts.guest')

@section('guest-content')

<div class="row m-0">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
        <div class="row mt-3 mb-3 ms-0 me-0">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card shadow rounded border border-dark">
                    <div class="card-header bg-primary">
                        <h2 class="card-title text-center text-white text-uppercase"><b>Password Reset Portal</b></h2>
                    </div>

                    <div class="card-body">
                        <p>Please provide a new password for your account</p>

                        <form action="{{ route('password.update') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

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

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <label for="input_password" class="form-label"><b>Password:</b></label>

                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror border border-secondary rounded" id="input_password" :value="old('password')" autofocus>

                                    @error('password')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <label for="password_confirmation" class="form-label"><b>Confirm Password:</b></label>

                                    <input type="password" name="password_confirmation" class="form-control border border-secondary rounded" id="password_confirmation" :value="old('password')" autofocus>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <button type="submit" class="btn btn-secondary rounded-pill float-end text-uppercase" id="resetPasswordButton" data-bs-toggle="tooltip" 
                                    data-bs-placement="right" data-bs-title="Save the information provided and proceed">Reset Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
        </div>
    </div>
</div>
@endsection



