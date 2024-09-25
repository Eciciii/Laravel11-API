<?php
namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class KelilingPersegiPanjangController extends Controller
{
    public function hitungKeliling(Request $request)
    {
        $panjang = $request->panjang;
        $lebar = $request->lebar;
        $keliling = 2 * ($panjang + $lebar);

        return new PostResource(true, '✅ Berhasil menghitung keliling persegi panjang!', [
            'input' => [
                'panjang' => $panjang,
                'lebar' => $lebar
            ],
            'hasil' => $keliling,
            'details' => [
                'rumus' => 'Keliling = 2 * (panjang + lebar)',
                'calculation' => "2 * ($panjang + $lebar) = $keliling"
            ]
        ]);
    }
}
