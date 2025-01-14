<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class HubungiKamiController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:15',
            'pesan' => 'required|string',
        ]);

        Pesan::create($validatedData);

        return response()->json(['message' => 'Pesan berhasil dikirim!']);
    }
}
