<?php

namespace App\Http\Controllers;

use App\Services\SocialLoginService;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{

    public function __construct(private SocialLoginService $socialLoginService)
    {
    }

    public function redirectToProvider(string $socialServiceProvider): RedirectResponse
    {
        return Socialite::driver($socialServiceProvider)->redirect();
    }

    public function handleProviderCallback(string $socialServiceProvider): JsonResponse
    {
        $socialUser = Socialite::driver($socialServiceProvider)->user();
        $user = $this->socialLoginService->findOrCreateBySocialUser($socialServiceProvider, $socialUser);

        Auth::login($user);

        return response()->json(
            [
                'token' => $user->createToken('auth-token')
            ]
        );
    }
}
