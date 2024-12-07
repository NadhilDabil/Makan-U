<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'toko';
    protected $primaryKey = 'id_toko';

    protected $fillable = [
        'id_toko',
        'id_user',
        'nama_toko',
        'alamat_toko',
        'image_toko',
        'image_utama',
        'rating',
        'waktu_operasional_buka',
        'waktu_operasional_tutup',
        'count',
        'lokasi_toko',
    ];

    // Relasi belongsTo dengan User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
    
}
