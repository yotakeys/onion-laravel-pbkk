<?php

namespace App\Http\Controllers;

use App\Models\Topik;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show(): View
    {
        $topics = Topik::all();

        return view('dashboard.penawaran-topik', [
            'topics' => $topics,
            'nama' => 'Luthfiyyah',
            'page' => 'penawaran-topik'
        ]);
    }

    public function showForm(): View
    {
        return view('dashboard.tambah-topik', [
            'page' => 'tambah-penawaran-topik'
        ]);
    }

    public function simpan(Request $request)
    {
        $request->validate(
            [
                'judul' => 'required',
                'dosen_pembimbing' => 'required|string',
                'status' => 'nullable',
            ]
        );

        Topik::create(
            [
//                'judul' => $request->input('judul'),
                'judul' => $request->judul,
                'dosen' => $request->dosen_pembimbing,
                'status' => $request->status,
            ]
        );

        return redirect()->route('penawaran-topik')->with('status', 'berhasil dimasukkan');
    }
}
