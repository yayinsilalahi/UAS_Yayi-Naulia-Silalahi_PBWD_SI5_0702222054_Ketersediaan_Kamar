<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class levelKamar extends Model
{
    use HasFactory;

    protected $table = 'level_kamars';
    protected $fillable = ['nama_level', 'deskripsi'];

    public function kamar()
    {
        return $this->hasMany(kamarPasien::class);
    }
}
