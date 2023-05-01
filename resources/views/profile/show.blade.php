@extends('layouts.app')

@section('auth-content')

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight ms-3">{{ __('Profile') }}</h2>
            </x-slot>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="d-flex">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
                @endif
            </div>

            <hr class="border border-secondary">
                
            <div class="d-flex">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    @livewire('profile.update-password-form')
                @endif
            </div>

            <hr class="border border-secondary">
                
            <div class="d-flex">
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    @livewire('profile.two-factor-authentication-form')
                @endif
            </div>

            <hr class="border border-secondary">

            <div class="d-flex">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <hr class="border border-secondary">

            <div class="d-flex">
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    @livewire('profile.delete-user-form')
                @endif
            </div>
        </div>
    </div>
</div>

@endsection




