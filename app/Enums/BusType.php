<?php

namespace App\Enums;

enum BusType: int
{
    case NON_AC = 0;
    case AC = 1;


    public function typeColor(): string
    {
        return match($this) {
            self::AC => '#00ff00',
            self::NON_AC => '#ff0000',
        };
    }


    public function typeClass(): string
    {
        return match($this) {
            self::AC => 'badge bg-success',
            self::NON_AC => 'badge bg-info'
        };
    }

    public function type(): string
    {
        return match($this) {
            self::AC => 'AC',
            self::NON_AC => 'NON AC'
        };
    }
}
