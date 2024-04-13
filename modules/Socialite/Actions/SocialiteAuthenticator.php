<?php
namespace Modules\Socialite\Actions;

use Laravel\Socialite\Facades\Socialite;

final class SocialiteAuthenticator
{
    public function __invoke(string $provider)
    {
        $user = Socialite::driver($provider)->user();

        dd($user);
    }
}
