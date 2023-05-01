<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <x-jet-action-section>
                <x-slot name="title"><b><u>{{ __('Two Factor Authentication') }}</u></b></x-slot>

                <x-slot name="description">
                    {{ __('Add additional security to your account using two factor authentication.') }}
                </x-slot>

                <x-slot name="content">
                    <h3 class="text-lg font-medium text-gray-900">
                        @if ($this->enabled)
                            @if ($showingConfirmation)
                            <div class="alert alert-primary">
                                <p>{{ __('Finish enabling two factor authentication.') }}</p>
                            </div>
                            @else
                            <div class="alert alert-success">
                                <p>{{ __('You have enabled two factor authentication.') }}</p>
                            </div>
                            @endif
                        @else
                        <div class="alert alert-danger">
                            <p>{{ __('You have not enabled two factor authentication.') }}</p>
                        </div>
                        @endif
                    </h3>

                    <div class="mt-3 max-w-xl text-sm text-gray-600">
                        <p>
                            {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
                        </p>
                    </div>

                    @if ($this->enabled)
                        @if ($showingQrCode)
                            <div class="mt-4 max-w-xl text-sm text-gray-600">
                                <p class="font-semibold">
                                    @if ($showingConfirmation)
                                        <p class="text-primary">{{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.') }}</p>
                                    @else
                                        <p class="text-success">{{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.') }}</p>
                                    @endif
                                </p>
                            </div>

                            <div class="mt-4">
                                {!! $this->user->twoFactorQrCodeSvg() !!}
                            </div>

                            <div class="mt-4 max-w-xl text-sm text-gray-600">
                                <p class="font-semibold">
                                    {{ __('Setup Key') }}: {{ decrypt($this->user->two_factor_secret) }}
                                </p>
                            </div>

                            @if ($showingConfirmation)
                                <div class="mt-4">
                                    <label for="input_code" class="form-label"><i class=""></i><b>Code</b></label>

                                    <x-jet-input id="input_code" type="text" name="code" class="block mt-1 w-1/2" inputmode="numeric" autofocus autocomplete="one-time-code" wire:model.defer="code" wire:keydown.enter="confirmTwoFactorAuthentication" />

                                    <x-jet-input-error for="code" class="mt-2" />
                                </div>
                            @endif
                        @endif

                        @if ($showingRecoveryCodes)
                            <div class="mt-4 max-w-xl text-sm text-gray-600">
                                <p class="font-semibold">
                                    {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                                </p>
                            </div>

                            <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                                @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                                    <div>{{ $code }}</div>
                                @endforeach
                            </div>
                        @endif
                    @endif

                    <div class="mt-5">
                        @if (! $this->enabled)
                            <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                                <x-jet-button type="button" wire:loading.attr="disabled" id="enableTwoFactorButton" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Proceed with setting up 2 factor authentication for your account/profile">
                                    <span>Enable</span>
                                </x-jet-button>
                            </x-jet-confirms-password>
                        @else
                            @if ($showingRecoveryCodes)
                                <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                                    <x-jet-button type="button" class="mr-3" id="regenerateRecoveryCodesButton">
                                        <span>Regenerate Recovery Codes</span>
                                    </x-jet-button>
                                </x-jet-confirms-password>
                            @elseif ($showingConfirmation)
                                <x-jet-confirms-password wire:then="confirmTwoFactorAuthentication">
                                    <x-jet-button type="button" class="mr-3" id="confirmTwoFactorButton" wire:loading.attr="disabled">
                                        <span>Confirm</span>
                                    </x-jet-button>
                                </x-jet-confirms-password>
                            @else
                                <x-jet-confirms-password wire:then="showRecoveryCodes">
                                    <x-jet-button type="button" class="mr-3" id="showRecoveryCodesButton" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Proceed with showing 2 factor authentication recovery codes for your account/profile">
                                        <span>Show Recovery Codes</span>
                                    </x-jet-button>
                                </x-jet-confirms-password>
                            @endif

                            @if ($showingConfirmation)
                                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                                    <x-jet-button type="button" wire:loading.attr="disabled" id="cancelTwoFactorButton">
                                        <span>Cancel</span>
                                    </x-jet-button>
                                </x-jet-confirms-password>
                            @else
                                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                                    <x-jet-button type="button" wire:loading.attr="disabled" id="disableTwoFactorButton" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Proceed with removing 2 factor authentication from your account/profile">
                                        <span>Disable</span>
                                    </x-jet-button>
                                </x-jet-confirms-password>
                            @endif

                        @endif
                    </div>
                </x-slot>
            </x-jet-action-section>
        </div>
    </div>
</div>





