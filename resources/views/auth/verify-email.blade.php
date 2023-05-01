@extends('layouts.guest')

@section('guest-content')

<div class="row m-0">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
        <div class="row mt-3 mb-3 ms-0 me-0">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card shadow rounded border border-dark">
                    <div class="card-header bg-primary">
                        <h2 class="card-title text-center text-white text-uppercase"><b>Account Verification</b></h2>
                    </div>

                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success">
                                <p class="text-dark">A new verification link has been sent to the email address you provided in your profile settings.</p>
                            </div>
                        @endif

                        <p>Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>

                        <form action="{{ route('verification.send') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <button type="submit" class="btn btn-secondary rounded-pill float-end text-uppercase" id="resendVerificationEmailButton">Resend Verification Email</button>
                                </div>
                            </div>
                        </form>

                        <div class="pt-5 pb-3">
                            <a href="{{ route('profile.show') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Edit Profile</a>

                            <form action="{{ route('logout') }}" method="POST" class="inline" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
        </div>
    </div>
</div>
@endsection



