<?php
namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class LuasPermukaanKubusController extends Controller
{
    public function hitungLuasPermukaan(Request $request)
    {
        $sisi = $request->sisi;
        $luasPermukaan = 6 * pow($sisi, 2);

        return new PostResource(true, '✅ Berhasil menghitung luas permukaan kubus!', [
            'input' => [
                'sisi' => $sisi
            ],
            'hasil' => $luasPermukaan,
            'details' => [
                'rumus' => 'Luas Permukaan = 6 * sisi^2',
                'calculation' => "6 * $sisi^2 = $luasPermukaan"
            ]
        ]);
    }
}
