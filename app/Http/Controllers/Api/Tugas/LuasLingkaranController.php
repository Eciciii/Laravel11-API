<?php

namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class LuasLingkaranController extends Controller
{
    public function hitungLuas(Request $request)
    {
        $jariJari = $request->jari_jari;
        $luas = pi() * pow($jariJari, 2);

        return new PostResource(true, '✅ Berhasil menghitung luas lingkaran!', [
            'input' => [
                'jari_jari' => $jariJari
            ],
            'hasil' => $luas,
            'details' => [
                'rumus' => 'Luas = π * jari_jari^2',
                'calculation' => "π * $jariJari^2 = $luas"
            ]
        ]);
    }
}
