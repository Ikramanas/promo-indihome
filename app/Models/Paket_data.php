<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kecepatan',
        'harga',
        'ppn(%)',
        'label'
    ];

    // public function kategori()
    // {
    //     return $this->belongsTo(kategori::class);
    // }
}
