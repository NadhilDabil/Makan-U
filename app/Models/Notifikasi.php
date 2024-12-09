<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasi';

    protected $primaryKey = 'id_notifikasi';

    protected $fillable = [
        'id_notification',
        'id_user',
        'id_promo',
        'is_read',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    // Scope untuk filter user dengan id_role = 2
    public function scopeForRoleTwo($query)
    {
        return $query->whereHas('user', function ($q) {
            $q->where('id_role', 2);
        });
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'id_promo', 'id_promo');
    }
}
