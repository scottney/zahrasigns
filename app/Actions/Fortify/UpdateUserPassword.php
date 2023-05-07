<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the user's password.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'current_password' => ['required', 'string', 'current_password:web'],
            'password' => $this->passwordRules(),
        ], [
            'current_password.current_password' => __('The provided password does not match your current password.'),
        ])->validateWithBag('updatePassword');

        $user->forceFill([
            'email_verified_at' => null,
            'password' => Hash::make($input['password']),
            'account_locked' => 1,
            'account_state' => 'locked',
            'credentials_expired' => 1,
        ])->save();

        // Trigger email verification event
        $user->sendEmailVerificationNotification();

        // Invalidate other sessions
        $user->setRememberToken(Str::random(60));
        $user->save();

        // Show a notification to the user that they will be logged out in 5 seconds
        Session::flash('password_changed_logout_notification', 'You will be logged out in 5 seconds.');

       // Log out the user after 5 seconds
        sleep(5); // wait for 5 seconds before logging out
        Auth::logout();
    }
}
