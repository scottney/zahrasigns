<div class="container-fluid pb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <x-jet-form-section submit="updateProfileInformation">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
                        <x-slot name="title"><b><u>{{ __('Profile Information') }}</u></b></x-slot>

                        <x-slot name="description">{{ __('Update your account\'s profile information and email address.') }}</x-slot>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-3">
                        <x-slot name="form">
                            <!-- Profile Photo -->
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                    <!-- Profile Photo File Input -->
                                    <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="photoName = $refs.photo.files[0].name;
                                                 const reader = new FileReader();
                                                 reader.onload = (e) => {
                                                 photoPreview = e.target.result;
                                             };
                                             reader.readAsDataURL($refs.photo.files[0]);" />

                                    <label for="photo" class="form-label"><b><u>Profile Photo</u></b></label>

                                    <!-- Current Profile Photo -->
                                    <div class="mt-2" x-show="! photoPreview">
                                        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full object-cover float-end profileImage" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="The current account profile image">
                                    </div>

                                    <!-- New Profile Photo Preview -->
                                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                                        <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                        </span>
                                    </div>

                                    <button class="p-2 mt-3" type="button" x-on:click.prevent="$refs.photo.click()" id="selectProfileImageButton" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Proceed with selecting a profile image for your account"><span>Select a new profile photo</span></button><br>

                                    @if ($this->user->profile_photo_path)
                                        <button class="ms-3 p-2 mt-3" type="button" id="removeProfileImageButton" wire:click="deleteProfilePhoto" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Proceed with removing the profile image for your account"><span>Remove profile photo</span></button>
                                    @endif

                                    <x-jet-input-error for="photo" class="mt-2" />
                                </div>
                            @endif

                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <label for="input_username" class="form-label"><i class="fa-solid fa-circle-user p-1"></i><b>Username</b></label>
                                <x-jet-input id="input_username" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="The current account username" autofocus />
                                <x-jet-input-error for="name" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div class="col-span-6 sm:col-span-4">
                                <label for="input_email"><i class="fa-solid fa-envelope p-1"></i><b>Email</b></label>
                                <x-jet-input id="input_email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="The current account email" autofocus />
                                <x-jet-input-error for="email" class="mt-2" />

                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                                    <p class="text-sm mt-2">
                                        {{ __('Your email address is unverified.') }}

                                        <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900" wire:click.prevent="sendEmailVerification">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if ($this->verificationLinkSent)
                                        <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                @endif
                            </div>
                        </x-slot>

                        <x-slot name="actions">
                            <x-jet-action-message class="mr-3" on="saved">
                                <div class="alert alert-success">
                                    <p><b>Saved</b></p>
                                </div>
                            </x-jet-action-message>

                            <x-jet-button wire:loading.attr="disabled" wire:target="photo" id="profileInformationSaveButton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Proceed with saving the currently provided information"><span>Save</span></x-jet-button>
                        </x-slot>
                    </div>
                </div>
            </x-jet-form-section>
        </div>
    </div>
</div>



