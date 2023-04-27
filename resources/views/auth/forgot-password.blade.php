@extends('layouts.guest')

@section('guest-content')

<div class="row m-0">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
        <div class="row mt-3 mb-3 ms-0 me-0">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card shadow rounded">
                    <div class="card-header bg-primary">
                        <h2 class="card-title text-center text-white text-uppercase"><b>Forgot Password Portal</b></h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">{{ session('status') }}</div>
                        @endif

                        <p>Please provide your email address and you will receive a password reset link.</p>

                        <form action="{{ route('password.email') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
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
                                    <button type="submit" class="btn btn-secondary rounded-pill float-end text-uppercase" id="emailPasswordButton">Email Password Reset Link</button>
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



