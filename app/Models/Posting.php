<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $table = 'posting';
    
    protected $primaryKey = 'id_posting';

    protected $fillable = [
        'id_posting',
        'image_posting',
        'id_toko',
        'likes',
        'comment',
        'caption',
    ];
}
