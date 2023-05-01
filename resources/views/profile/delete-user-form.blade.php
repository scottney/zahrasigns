<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <x-jet-action-section>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
                        <x-slot name="title"><b><u>{{ __('Delete Account') }}</u></b></x-slot>

                        <x-slot name="description">{{ __('Permanently delete your account.') }}</x-slot>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-3">
                        <x-slot name="content">
                            <div class="max-w-xl text-sm text-gray-600">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                            </div>

                            <div class="mt-5">
                                <x-jet-button type="button" wire:click="confirmUserDeletion" wire:loading.attr="disabled" id="deleteAccountButton" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Proceed with permanently deleting your account/profile.">
                                    <span>Delete Account</span>
                                </x-jet-button>
                            </div>

                            <!-- Delete User Confirmation Modal -->
                            <x-jet-dialog-modal wire:model="confirmingUserDeletion">
                                <x-slot name="title"><b><u>{{ __('Delete Account') }}</u></b></x-slot>

                                <x-slot name="content">
                                    {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                                    <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                                        <x-jet-input type="password" class="mt-1 block w-3/4" id="input_password" placeholder="{{ __('Password') }}" x-ref="password" wire:model.defer="password" wire:keydown.enter="deleteUser" />

                                        <x-jet-input-error for="password" class="mt-2" />
                                    </div>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-jet-button type="button" id="cancelTwoFactorButton" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                                        <span>Cancel</span>
                                    </x-jet-button>                                    

                                    <x-jet-button type="button" class="ml-3" id="confirmDeleteAccountButton" wire:click="deleteUser" wire:loading.attr="disabled">
                                        <span>Delete Account</span>
                                    </x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>
                        </x-slot>
                    </div>
                </div>
            </x-jet-action-section>
        </div>
    </div>
</div>



