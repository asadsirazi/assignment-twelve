<?php

namespace App\Enums;

enum Status: int
{
    case ACTIVE = 1;
    case DRAFT = 0;
    case PENDING = 2;


    public function statusColor(): string
    {
        return match($this) {
            self::DRAFT => '#dddddd',
            self::ACTIVE => '#00ff00',
            self::PENDING => 'yellow',
        };
    }

    public function status(): string
    {
        return match($this) {
            self::DRAFT => 'Draft',
            self::ACTIVE => 'Active',
            self::PENDING => 'Pending'
        };
    }

    public function statusClass()
    {
        return match($this) {
          self::DRAFT => 'badge bg-dark',
          self::ACTIVE => 'badge bg-success',
          self::PENDING => 'badge bg-danger'
        };
    }
}
