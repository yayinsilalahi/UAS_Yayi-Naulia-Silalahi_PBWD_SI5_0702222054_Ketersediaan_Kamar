<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanKamar extends Model
{
    use HasFactory;

    protected $table = 'pesan_kamars';
    protected $fillable = ['id_kamar', 'id_pasien', 'tanggal_checkin', 'tanggal_checkout'];

    public function kamar()
    {
        return $this->belongsTo(kamarPasien::class);
    }

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }
}
