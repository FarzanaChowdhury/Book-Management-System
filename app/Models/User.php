<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    public function isSuperAdmin() {
        return $this->role === 'super_admin';
    }

    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function isAuthor() {
        return $this->role === 'author';
    }

    public function isUser() {
        return $this->role === 'user';
    }
}

