<?php

namespace service;

class ApiService
{
    public static function ApiKeyGenerator(int $userId/*, string $type = 'liste totale'*/): string
    {
        $key = bin2hex(random_bytes(16));
        $apiKey = 'bday_' . $key;

        return $apiKey;
    }
}