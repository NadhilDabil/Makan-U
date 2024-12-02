<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel yang digunakan
    protected $table = 'user';

    // Menentukan primary key
    protected $primaryKey = 'id_user';

    // Atribut yang boleh diisi
    protected $fillable = [
        'id_user',
        'id_role',
        'email',
        'no_telp',
        'username',
        'alamat',
        'password',
    ];

    // Atribut yang disembunyikan
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Atribut yang dicasting ke tipe lain
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi dengan model Role
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'id_role');
    }


}
