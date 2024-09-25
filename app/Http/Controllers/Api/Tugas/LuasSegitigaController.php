<?php

namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class LuasSegitigaController extends Controller
{
    public function hitungLuas(Request $request)
    {
        $alas = $request->alas;
        $tinggi = $request->tinggi;
        $luas = 0.5 * $alas * $tinggi;

        return new PostResource(true, '✅ Berhasil menghitung luas segitiga!', [
            'input' => [
                'alas' => $alas,
                'tinggi' => $tinggi
            ],
            'hasil' => $luas,
            'details' => [
                'rumus' => 'Luas = 0.5 * alas * tinggi',
                'calculation' => "0.5 * $alas * $tinggi = $luas"
            ]
        ]);
    }
}
