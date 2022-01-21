<?php

namespace App\Http\Controllers;

use App\Services\TwoProvideSocialiteService;
use Auth;
use Illuminate\Http\JsonResponse;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{

    public function __construct(private TwoProvideSocialiteService $socialiteService)
    {
    }


    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback(): JsonResponse
    {
        $githubSocialUser = Socialite::driver('github')->user();
        $user = $this->socialiteService->createOrUpdateUser($githubSocialUser);

        Auth::login($user);

        return response()->json(
            [
                'access_token' => $user->access_token,
                'refresh_token' => $user->refresh_token,
                'expiresIn' => $user->expires_in
            ]
        );
    }
}
