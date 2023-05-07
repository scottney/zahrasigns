<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <x-jet-form-section submit="updatePassword">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
                        <x-slot name="title"><b><u>{{ __('Update Password') }}</u></b></x-slot>

                        <x-slot name="description">
                            {{ __('Ensure your account is using a long, random password to stay secure.') }}
                        </x-slot>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-3">
                        <x-slot name="form">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="input_current_password" class="form-label"><i class="fa-solid fa-lock p-1"></i><b>Current Password</b></label>
                                <x-jet-input id="input_current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Provide the account's current password" autofocus />

                                <i class="fa-solid fa-eye-slash" id="checkPasswordChange" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Toggle to view/hide password" onclick="toggle_password_change()"></i>

                                <x-jet-input-error for="current_password" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="input_password" class="form-label"><i class="fa-solid fa-user-lock p-1"></i><b>New Password</b></label>
                                <x-jet-input id="input_password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Provide the account's new password. The password must contain 8-19 characters, must have at least 1 capital letter, must have at least 1 number and must contain at least 1 special character e.g @/!%" oninput="passwordStrength()" minlength="8" maxlength="19" autofocus />
                                <x-jet-input-error for="password" class="mt-2" />

                                 <div class="p-3 mt-2" id="passwordStrengthRules">
                                    <p id="charactersLength"><i class="fa-solid fa-circle-check p-1"></i><i>Password must contain 8 - 19 characters e.g paulchambers</i></p>
                                    <p id="charactersLowercase"><i class="fa-solid fa-circle-check p-1"></i><i>Password must contain at least 1 lowercase letter e.g Paulchambers</i></p>
                                    <p id="charactersUppercase"><i class="fa-solid fa-circle-check p-1"></i><i>Password must contain at least 1 uppercase letter e.g Paulchambers</i></p>
                                    <p id="charactersNumber"><i class="fa-solid fa-circle-check p-1"></i><i>Password must contain at least 1 number e.g Paulchambers1</i></p>
                                    <p id="charactersSpecial"><i class="fa-solid fa-circle-check p-1"></i><i>Password must contain at least 1 special character e.g Paulchambers%</i></p>
                                    <p id="charactersSpaces"><i class="fa-solid fa-circle-check p-1"></i><i>Password must not contain spaces e.g Paulchambers</i></p>
                                </div>
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="password_confirmation" class="form-label"><i class="fa-solid fa-shield p-1"></i><b>Confirm Password</b></label>
                                <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Provide confirmation of the account's new password" autofocus />
                                <x-jet-input-error for="password_confirmation" class="mt-2" />
                            </div>
                        </x-slot>

                        <x-slot name="actions">
                            <x-jet-action-message class="mr-3" on="saved">
                                <div class="alert alert-success">
                                    <p><b>Saved</b></p>
                                </div>
                            </x-jet-action-message>

                            <x-jet-button wire:loading.attr="disabled" wire:target="photo" id="profileInformationPasswordSaveButton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Proceed with saving the currently provided information"><span>Save</span></x-jet-button>
                        </x-slot>
                    </div>
                </div>
            </x-jet-form-section>
        </div>
    </div>
</div>




