<?php

namespace App\Models;

use App\Models\Auth\Role;
use App\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use HasFactory, HasRoles, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relations
    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    protected function casts(): array {
        return [
            'password' => 'hashed',
        ];
    }
}
