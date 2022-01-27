<?php

namespace App\Http\Controllers;

use App\Services\TwoProvideSocialiteService;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function __construct(private TwoProvideSocialiteService $socialiteService)
    {
    }


    public function redirectToProvider(): RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback(): JsonResponse
    {
        $githubSocialUser = Socialite::driver('github')->user();

        $user = $this->socialiteService->createOrUpdateUser('github', $githubSocialUser);

        Auth::login($user);

        return response()->json(
            [
                'token' => $user->createToken('auth-token')
            ]
        );
    }
}
