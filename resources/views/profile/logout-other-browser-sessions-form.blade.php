<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <x-jet-action-section>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
                        <x-slot name="title"><b><u>{{ __('Browser Sessions') }}</u></b></x-slot>

                        <x-slot name="description">
                            {{ __('Manage and log out your active sessions on other browsers and devices.') }}
                        </x-slot>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-3">
                        <x-slot name="content">
                            <div class="max-w-xl text-sm text-gray-600">
                                {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}
                            </div>

                            @if (count($this->sessions) > 0)
                                <div class="mt-5 space-y-6">
                                    <!-- Other Browser Sessions -->
                                    @foreach ($this->sessions as $session)
                                        <div class="flex items-center">
                                            <div>
                                                @if ($session->agent->isDesktop())
                                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                                        <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-gray-500">
                                                        <path d="M0 0h24v24H0z" stroke="none"></path><rect x="7" y="4" width="10" height="16" rx="1"></rect><path d="M11 5h2M12 17v.01"></path>
                                                    </svg>
                                                @endif
                                            </div>

                                            <div class="ml-3">
                                                <div class="text-sm text-gray-600">
                                                    {{ $session->agent->platform() ? $session->agent->platform() : 'Unknown' }} - {{ $session->agent->browser() ? $session->agent->browser() : 'Unknown' }}
                                                </div>

                                                <div>
                                                    <div class="text-xs text-gray-500">
                                                        {{ $session->ip_address }},

                                                        @if ($session->is_current_device)
                                                            <span class="text-green-500 font-semibold">{{ __('This device') }}</span>
                                                        @else
                                                            {{ __('Last active') }} {{ $session->last_active }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="flex items-center mt-5">
                                <x-jet-button wire:loading.attr="disabled" wire:click="confirmLogout" id="browserSessionsButton" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Proceed with logging out from other devices">
                                    <span>Log Out Other Browser Sessions</span>
                                </x-jet-button>

                                <x-jet-action-message class="ml-3" on="loggedOut">
                                    <div class="alert alert-success">
                                        <p><b>Done</b></p>
                                    </div>
                                </x-jet-action-message>
                            </div>

                            <!-- Log Out Other Devices Confirmation Modal -->
                            <x-jet-dialog-modal wire:model="confirmingLogout">
                                <x-slot name="title">
                                    <h2><b><u>Log Out Other Browser Sessions</u></b></h2>
                                </x-slot>

                                <x-slot name="content">
                                    {{ __('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.') }}

                                    <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                                        <x-jet-input type="password" class="mt-1 block w-3/4" id="input_sessions_password" placeholder="{{ __('Password') }}" x-ref="password" wire:model.defer="password" wire:keydown.enter="logoutOtherBrowserSessions" />

                                        <x-jet-input-error for="password" class="mt-2" />
                                    </div>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-jet-button type="button" wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled" id="cancelBrowserSessionsButton">
                                        <span>Cancel</span>
                                    </x-jet-button>

                                    <x-jet-button class="ml-3" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled" id="browserSessionsButton">
                                        <span>Log Out Other Browser Sessions</span>
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



