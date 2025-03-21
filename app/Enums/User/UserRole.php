<?php

namespace App\Enums\User;

enum UserRole: string
{
    case SUPER_ADMIN = 'super_admin';
    case ADMIN = 'admin';
    case EMPLOYEE = 'employee';

    public function description(): string
    {
        return match ($this) {
            self::SUPER_ADMIN => 'Super Admin has full control over the system.',
            self::ADMIN => 'Admin has control over users and other resources.',
            self::EMPLOYEE => 'Employee can access assigned tasks and reports.',
        };
    }
}
