<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    protected $fillable = [
        'id_role',
        'role',

    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
