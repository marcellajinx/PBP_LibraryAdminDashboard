<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\info_pinjam;
use App\Models\info_kembali;

class TransactionsController extends Controller
{


    public function index()
    {
        // $title = 'a';
        // $users = User::all();
        // return view('admin.transactions.index', compact('title', 'users'));

        $loans = info_pinjam::join('pengguna', 'pengguna.id_pengguna', '=', 'info_pinjam.id_pengguna')
            ->join('buku', 'buku.id', '=', 'info_pinjam.id')
            ->get(['info_pinjam.id_pinjam', 'info_pinjam.waktu_pinjam', 'info_pinjam.id', 'buku.judul', 'info_pinjam.id_pengguna', 'pengguna.nama']);

        $returns =
            info_kembali::join('pengguna', 'pengguna.id_pengguna', '=', 'info_kembali.id_pengguna')
            ->join('buku', 'buku.id', '=', 'info_kembali.id')
            ->get(['info_kembali.id_kembali', 'info_kembali.waktu_kembali', 'info_kembali.id', 'buku.judul', 'info_kembali.id_pengguna', 'pengguna.nama']);
        return view('admin.transactions.index', compact('loans', 'returns'));
    }

    public function loans()
    {
        $users = User::all();
        return view(
            'components.loans',
            [
                'users' => $users,
            ]
        );
    }
}
