<?php

namespace Database\Seeders;

use App\Enums\User\UserRole;
use App\Models\Auth\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder {
    public function run(): void {
        foreach (UserRole::cases() as $role) {
            Role::firstOrCreate(
                ['name' => $role->value],
                ['description' => $role->description()]
            );
        }
    }
}
