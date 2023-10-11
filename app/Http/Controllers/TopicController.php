<?php

namespace App\Http\Controllers;

use App\Models\PesertaTopik;
use App\Models\Topik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TopicController extends Controller
{
    public function show(): View
    {
//        $rows = DB::table('topiks')
//            ->join('peserta_topik', 'peserta_topik.id_topik', 'topiks.id')
//            ->join('users', 'peserta_topik.id_user', 'users.id')
//            ->where('dlfakjdlkjfa', 'akl;dj')
//            ->get();
//        dd($rows[0]->name);

//        $topics = Topik::with('peserta')->paginate(2);
        $topics = Topik::paginate(20);

//        dd($topics);

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

    public function showformpeserta(Request $request)
    {
        return view('dashboard/tambah-peserta')
            ->with('page', 'tambah-peserta');
    }

    public function storepesertatopik(Request $request)
    {
        $request->validate(
            [
                'id_user' => 'required',
                'id_topik' => 'required',
            ]
        );

        PesertaTopik::create(
            [
                'id_user' => $request->id_user,
                'id_topik' => $request->id_topik,
            ]
        );


        return redirect()->route('tambah-peserta-topik');
    }
}
