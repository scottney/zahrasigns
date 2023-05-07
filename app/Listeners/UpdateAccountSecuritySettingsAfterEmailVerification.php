<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Verified;

class UpdateAccountSecuritySettingsAfterEmailVerification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $user = $event->user;
        
        // Update fields on the user model
        $user->update([
            'account_locked' => 0,
            'account_state' => 'un-locked',
            'credentials_expired' => 0,
        ]);
    }
}
