<?php
namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class KelilingSegitigaController extends Controller
{
    public function hitungKeliling(Request $request)
    {
        $sisi1 = $request->sisi1;
        $sisi2 = $request->sisi2;
        $sisi3 = $request->sisi3;
        $keliling = $sisi1 + $sisi2 + $sisi3;

        return new PostResource(true, '✅ Berhasil menghitung keliling segitiga!', [
            'input' => [
                'sisi1' => $sisi1,
                'sisi2' => $sisi2,
                'sisi3' => $sisi3
            ],
            'hasil' => $keliling,
            'details' => [
                'rumus' => 'Keliling = sisi1 + sisi2 + sisi3',
                'calculation' => "$sisi1 + $sisi2 + $sisi3 = $keliling"
            ]
        ]);
    }
}
