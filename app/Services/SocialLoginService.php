<?php

namespace App\Services;

use App\Models\User;
use Laravel\Socialite\Contracts\User as SocialUser;

class SocialLoginService
{
    public function findOrCreateBySocialUser(string $socialServiceProvider, SocialUser $socialUser): User
    {
        return User::whereProvider($socialServiceProvider)
            ->whereProviderId($socialUser->getId())
            ->firstOrCreate([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'provider' => $socialServiceProvider,
                'provider_id' => $socialUser->getId(),
            ]);
    }
}
