<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Socialite\Actions\SocialiteAuthenticator;

class SocialiteAuthenticatorController extends Controller
{
    function __construct(private SocialiteAuthenticator $authenticator){}
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $provider)
    {
        try {
            
            return $this->authenticator->__invoke($provider);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
