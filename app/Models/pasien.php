<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $fillable = ['nama', 'alamat', 'nomor_hp'];

    public function pesan()
    {
        return $this->hasMany(pesanKamar::class);
    }
}
