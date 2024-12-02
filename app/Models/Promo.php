<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';

    protected $primaryKey = 'id_promo';

    protected $fillable = [
        'id_promo',
        'Desk_promo',
        'jangka_waktu_mulai',
        'jangka_waktu_berhenti',
        'id_toko',
        'caption',
    ];
}
