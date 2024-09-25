<?php

namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class LuasPersegiPanjangController extends Controller
{
    public function hitungLuas(Request $request)
    {
        $panjang = $request->panjang;
        $lebar = $request->lebar;
        $luas = $panjang * $lebar;

        return new PostResource(true, '✅ Berhasil menghitung luas persegi panjang!', [
            'input' => [
                'panjang' => $panjang,
                'lebar' => $lebar
            ],
            'hasil' => $luas,
            'details' => [
                'rumus' => 'Luas = panjang * lebar',
                'calculation' => "$panjang * $lebar = $luas"
            ]
        ]);
    }
}