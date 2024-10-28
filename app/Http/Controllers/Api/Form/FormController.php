<?php 

namespace App\Http\Controllers\Api\Form;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return response()->json(Form::all(), 200);
    }

    public function show($id)
    {
        $form = Form::find($id);
        if (!$form) {
            return response()->json(['message' => 'Form tidak ditemukan'], 404);
        }
        return response()->json($form, 200);
    }

    public function store(Request $request)
    {
        // Validasi untuk atribut baru
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telp' => 'nullable|string|max:20',
            'nama_orang_tua' => 'required|string|max:255',
        ]);

        // Membuat form baru dengan data yang divalidasi
        $form = Form::create($validatedData);

        return response()->json($form, 201);
    }

    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        if (!$form) {
            return response()->json(['message' => 'Form tidak ditemukan'], 404);
        }

        $validatedData = $request->validate([
            'nama' => 'string|max:255',
            'tempat_lahir' => 'string|max:255',
            'tanggal_lahir' => 'date',
            'jenis_kelamin' => 'string|max:10',
            'alamat' => 'string|max:255',
            'program_studi' => 'string|max:255',
            'email' => 'email',
            'no_telp' => 'string|max:20',
            'nama_orang_tua' => 'string|max:255',
        ]);

        $form->update($validatedData);

        return response()->json($form, 200);
    }
    
    public function destroy($id)
    {
        $form = Form::find($id);
        if (!$form) {
            return response()->json(['message' => 'Form tidak ditemukan'], 404);
        }

        $form->delete();

        return response()->json(['message' => 'Form berhasil dihapus'], 200);
    }
}
