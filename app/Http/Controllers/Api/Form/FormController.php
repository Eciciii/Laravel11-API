<?php 
namespace App\Http\Controllers\Api\Form;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    // Get all forms (index method)
    public function index()
    {
        return response()->json(Form::all(), 200);
    }

    // Get a single form by ID (show method)
    public function show($id)
    {
        $form = Form::find($id);
        if (!$form) {
            return response()->json(['message' => 'Form tidak ditemukan'], 404);
        }
        return response()->json($form, 200);
    }

    // Create a new form (store method)
    public function store(Request $request)
    {
        // Validasi input dari form termasuk tertarik_jurusan dan domisili
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:20',
            'email' => 'required|email',
            'tertarik_jurusan' => 'required|string',
            'alamat' => 'required|string|max:255',
            'pesan' => 'nullable|string',
        ]);

        // Membuat form baru dengan data yang divalidasi
        $form = Form::create([
            'nama_lengkap' => $validatedData['nama_lengkap'],
            'whatsapp' => $validatedData['whatsapp'],
            'email' => $validatedData['email'],
            'tertarik_jurusan' => $validatedData['tertarik_jurusan'],
            'alamat' => $validatedData['alamat'],
            'pesan' => $validatedData['pesan'] ?? '',
        ]);

        return response()->json($form, 201);
    }

    // Update an existing form (update method)
    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        if (!$form) {
            return response()->json(['message' => 'Form tidak ditemukan'], 404);
        }

        // Validasi input yang akan diupdate
        $validatedData = $request->validate([
            'nama_lengkap' => 'string|max:255',
            'whatsapp' => 'string|max:20',
            'email' => 'email',
            'tertarik_jurusan' => 'string',
            'alamat' => 'string|max:255',
            'pesan' => 'string',
        ]);

        // Update form dengan data baru
        $form->update($validatedData);

        return response()->json($form, 200);
    }

    // Delete a form (destroy method)
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
