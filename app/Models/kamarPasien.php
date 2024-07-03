<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamarPasien extends Model
{
    use HasFactory;

    protected $table = 'kamar_pasiens';
    protected $fillable = ['nomor_kamar', 'level_id'];

    public function level()
    {
        return $this->belongsTo(levelKamar::class);
    }

    public function pesan()
    {
        return $this->hasMany(pesanKamar::class);
    }
}
