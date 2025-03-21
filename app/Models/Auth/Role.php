<?php

namespace App\Models\Auth;

use App\Enums\User\UserRole;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    protected $fillable = [
        'name',
        'description',
    ];

    protected function casts(): array {
        return [
            'name' => UserRole::class,
        ];
    }
}
