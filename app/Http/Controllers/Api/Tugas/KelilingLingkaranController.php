<?php
namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class KelilingLingkaranController extends Controller
{
    public function hitungKeliling(Request $request)
    {
        $jariJari = $request->jari_jari;
        $keliling = 2 * pi() * $jariJari;

        return new PostResource(true, '✅ Berhasil menghitung keliling lingkaran!', [
            'input' => [
                'jari_jari' => $jariJari
            ],
            'hasil' => $keliling,
            'details' => [
                'rumus' => 'Keliling = 2 * π * jari_jari',
                'calculation' => "2 * π * $jariJari = $keliling"
            ]
        ]);
    }
}
