<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;

    protected $table = 'account'; // Nama tabel

    protected $primaryKey = 'username'; // Kolom primary key

    public $incrementing = false; // Primary key tidak auto-increment

    protected $fillable = [
        'username', 'password', 'name', 'role',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Metode ini diperlukan untuk autentikasi
    public function getAuthPassword()
    {
        return $this->password;
    }
}

