@extends('layouts.guest')

@section('guest-content')

<div class="row m-0">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
        <div class="row mt-5 mb-5">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card shadow rounded">
                    <div class="card-header bg-primary">
                        <h2 class="card-title text-center text-white text-uppercase">Registration Portal</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div></div>
                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" required />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-jet-button class="ml-4">
                                    {{ __('Register') }}
                                </x-jet-button>
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



