<?php
namespace App\Http\Controllers\Api\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class VolumeKubusController extends Controller
{
    public function hitungVolume(Request $request)
    {
        $sisi = $request->sisi;
        $volume = pow($sisi, 3);

        return new PostResource(true, '✅ Berhasil menghitung volume kubus!', [
            'input' => [
                'sisi' => $sisi
            ],
            'hasil' => $volume,
            'details' => [
                'rumus' => 'Volume = sisi^3',
                'calculation' => "$sisi^3 = $volume"
            ]
        ]);
    }
}
