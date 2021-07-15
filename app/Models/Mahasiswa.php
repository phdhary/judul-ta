<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table='mahasiswas';

    public function judulta()
    {
        return $this->hasOne(JudulTA::class);
    }
}
