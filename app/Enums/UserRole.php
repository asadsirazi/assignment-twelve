<?php

namespace App\Enums;

enum UserRole: int
{
    case USER = 0;
    case ADMIN = 1;


    public function role(): string
    {
        return match ($this) {
          self::USER => 'user',
          self::ADMIN => 'admin'
        };
    }
}
