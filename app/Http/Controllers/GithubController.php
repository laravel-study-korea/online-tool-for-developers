<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $githubSocial = Socialite::driver('github')->user();
        $user = User::updateOrCreate([
           'name' => $githubSocial->getName(),
           'email' => $githubSocial->getEmail(),
        ]);

    }
}
