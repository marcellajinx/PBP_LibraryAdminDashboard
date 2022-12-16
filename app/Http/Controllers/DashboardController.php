<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\buku;
use App\Models\kategori;
use App\Models\User;
use App\Models\admin;
use App\Models\info_pinjam;
use App\Models\info_kembali;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $title = 'Dashboard';

        $bookscar = buku::select(buku::raw("COUNT(*) as count"), buku::raw('id_kategori'))
            ->groupBy(buku::raw('id_kategori'))
            ->pluck('count', 'id_kategori');

        $labels = $bookscar->keys();
        $data = $bookscar->values();

        $bookCount = buku::all()->count();
        $titleCount = buku::all()->count(buku::raw('DISTINCT isbn'));
        $authorCount = buku::all()->count(buku::raw('DISTINCT penulis'));
        $publisherCount = buku::all()->count(buku::raw('DISTINCT penerbit'));
        $categoryCount = kategori::all()->count(buku::raw('DISTINCT id_kategori'));
        $adminCount = admin::all()->count();
        $userCount = User::all()->count();
        $info_pinjam = info_pinjam::all()->count();
        $info_kembali = info_kembali::all()->count();
        $underactive = info_pinjam::select('waktu_pinjam', 'id_pengguna')->where(info_pinjam::raw('waktu_pinjam'), '<', Carbon::now()->subMonths(3))->distinct('id_pengguna')->count();
        // $underactive = info_pinjam::all()->groupBy(info_pinjam::select('id_pengguna'))->where(info_pinjam::raw('tgl_pinjam'), '<', Carbon::now()->subMonths(3))->all();

        return view('admin.dashboard.index', compact('title', 'labels', 'data', 'bookCount', 'titleCount', 'authorCount', 'publisherCount', 'categoryCount', 'userCount', 'adminCount', 'info_pinjam', 'info_kembali', 'underactive'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout()
    {
        unset($_SESSION['admin']); // hanya delete variable "name" saja
        unset($_SESSION['user']); // hanya delete variable "name" saja
        // session_destroy(); // delete SEMUA variable data user tersebut
        return header('Location: http://localhost/kitabaca/public/logout.php');
    }
}
