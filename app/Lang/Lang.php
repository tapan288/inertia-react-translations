<?php

namespace App\Lang;

enum Lang: string
{
    case EN = 'en';
    case DE = 'de';

    public function label()
    {
        return match ($this) {
            self::EN => 'English',
            self::DE => 'Deutsch',
        };
    }
}
