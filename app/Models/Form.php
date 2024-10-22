<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    // Menambahkan field yang dapat diisi
    protected $fillable = [
        'nama_lengkap',
        'whatsapp',
        'email', 
        'tertarik_jurusan',
        'alamat',
        'pesan'
    ];
}
