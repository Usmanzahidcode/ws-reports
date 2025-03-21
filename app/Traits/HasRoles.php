<?php

namespace App\Traits;

use App\Enums\User\UserRole;

trait HasRoles {
    public function hasRole(UserRole $role): bool {
        return $this->roles->contains('name', $role->value);
    }

    public function hasAnyRole(UserRole ...$roles): bool {
        $roleNames = array_map(fn($role) => $role->value, $roles);
        return $this->roles->whereIn('name', $roleNames)->isNotEmpty();
    }

    public function hasAllRoles(UserRole ...$roles): bool {
        $roleNames = array_map(fn($role) => $role->value, $roles);
        return $this->roles->whereIn('name', $roleNames)->count()===count($roles);
    }

    public function isSuperAdmin(): bool {
        return $this->hasRole(UserRole::SUPER_ADMIN);
    }

    public function isAdmin(): bool {
        return $this->hasRole(UserRole::ADMIN);
    }

    public function isEmployee(): bool {
        return $this->hasRole(UserRole::EMPLOYEE);
    }
}
