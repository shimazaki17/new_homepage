<?php

namespace App\Providers;

use Exception;
use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class EnvUserProvider implements UserProvider
{
    private GenericUser $user;

    public function __construct()
    {
        $this->user = new GenericUser([
            'id' => env('AUTH_BASIC_USER'),
            'password' => env('AUTH_BASIC_PASSWORD'),
        ]);
    }

    public function retrieveById($identifier): ?Authenticatable
    {
        return $this->getGenericUser(
            $identifier === $this->user->getAuthIdentifier()
        );
    }

    public function retrieveByToken($identifier, $token)
    {
        throw new Exception('Not suppoted: ' . __METHOD__);
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        throw new Exception('Not suppoted: ' . __METHOD__);
    }

    public function retrieveByCredentials(array $credentials): ?Authenticatable
    {
        $user = $this->retrieveById($credentials['email']);
        $condition = $user && $this->validateCredentials($user, $credentials);

        return $this->getGenericUser($condition);
    }

    public function validateCredentials(Authenticatable $user, array $credentials): bool
    {
        return $credentials['password'] === $user->getAuthPassword();
    }

    protected function getGenericUser(bool $condition): ?Authenticatable
    {
        return $condition ? $this->user : null;
    }
}
