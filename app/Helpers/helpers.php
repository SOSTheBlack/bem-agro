<?php

if (!function_exists('getAvatar')) {
    /**
     * @param string $email
     * @param string $fullName
     *
     * @return string
     */
    function getAvatar(string $email, string $fullName): string
    {
        if (Gravatar::exists($email)) {
            return Gravatar::get($email);
        }

        return Avatar::create($fullName)->toBase64();
    }
}
