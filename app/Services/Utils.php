<?php

namespace App\Services;

class Utils
{
    public static function filterNullValues(array|string|int $data): array
    {
        if (!is_array($data)) {
            $data = [$data];
        }

        return array_filter($data, function ($value) {
            if (is_array($value)) {
                return !empty(self::filterNullValues($value));
            }
            return !is_null($value);
        });
    }
}
