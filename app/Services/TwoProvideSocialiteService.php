<?php

namespace App\Services;

use App\Models\User;
use Hash;
use Laravel\Socialite\Contracts\User as OneProvideUser;

class TwoProvideSocialiteService extends SocialiteService
{
    public function createOrUpdateUser(OneProvideUser $oneProvideUser)
    {
        $user = User::whereEmail($oneProvideUser->getEmail())->firstOrNew();
        $user->name = $oneProvideUser->getName();
        $user->password = Hash::make(static::SOCIAL_AUTH_PASSWORD);
        $user->access_token = $oneProvideUser->token;
        $user->refresh_token = $oneProvideUser->refreshToken;
        $user->expires_in = $oneProvideUser->expiresIn;
        $user->save();
        return $user;
    }
}
