@extends('layouts.app')

@section('auth-content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <!-- Start of password expiry notification -->
                @php
                    $password_time = Carbon\Carbon::parse(Auth::user()->security_password->updated_at)->addDays(Auth::user()->security_password->password_expiry_days+1);
                    $time_now = Carbon\Carbon::parse(now());
                    $time_days = $password_time->diffInDays($time_now);
                    $time_months = $password_time->diffInMonths($time_now);
                    $time_years = $password_time->diffInYears($time_now);
                @endphp

                <div class="alert alert-info p-1" id="system-notification-container">
                    <p class="text-center">Password expires on <b>{{$password_time}}</b>. Approximately <b>{{$time_days}}</b> days from today.</p>
                </div>
            <!-- End of password expiry notification -->
        </div>
    </div>
</div>

@endsection



