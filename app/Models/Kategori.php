<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama'];

    public function Paket_data()
    {
        return $this->hasMany(Paket_data::class);
    }
}
