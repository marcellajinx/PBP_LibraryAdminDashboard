<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $op = "";
    //         $books = buku::where('judul', 'LIKE', '%' . $request->search . '%')->get();

    //         if ($books) {
    //             foreach ($books as $key => $book) {
    //                 $op .= '<tr>' .
    //                 'td' . $book->judul . '</td>' .
    //                 'td' . $book->penulis . '</td>' .
    //                 'td' . $book->penerbit . '</td>' .
    //                 'td' . $book->id . '</td>'
    //                 . '</tr>';
    //             }
    //         }
    //     }

    //     $title = "Books Inventory";
    //     $books = buku::all();
    //     $output = '';
    //     if (isset($op)) {
    //         $output = Response($op);
    //     }
    //     return view(
    //         'admin.books.index',
    //         [
    //             'books' => $books,
    //             'title' => $title,
    //             'output' => $output,
    //         ]
    //     );
    // }
    public function index()
    {
        $title = "Books Inventory";
        $books = buku::all();
        return view(
            'admin.books.index',
            [
                'books' => $books,
                'title' => $title,
            ]
        );
    }

    public function searchs(Request $request)
    {
        $books = buku::all();
        if ($request->search != '') {
            $output = "";
            $books = buku::where('judul', 'LIKE', '%' . $request->search . '%')->get();

            // if ($books) {
            //     foreach ($books as $key => $book) {
            //         $output .= '<tr>' .
            //             'td' . $book->judul . '</td>' .
            //             'td' . $book->penulis . '</td>' .
            //             'td' . $book->penerbit . '</td>' .
            //             'td' . $book->id . '</td>'
            //             . '</tr>';
            //     }
            //     return Response($output);
            // }
        }

        return response()->json([
            'books' => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Buku";
        $categories = kategori::all();
        return view('admin.books.create', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'thn_terbit' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'cover' => 'required',
            'pdf' => 'required',
            // 'created_at' => 'required',
            // 'updated_at' => 'required',
            'id_kategori' => 'required',
        ]);

        $request->created_add = Date('Y-m-d');
        $request->updated_add = Date('Y-m-d');
        $request->id_admin = 'AD001';

        buku::create($request->all());
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = buku::find($id);
        $categories = kategori::all();
        return view(
            'admin.books.detail',
            [
                'book' => $book,
                'categories' => $categories
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {

    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'thn_terbit' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'cover' => 'required',
            'pdf' => 'required',
            // 'created_at' => 'required',
            // 'updated_at' => 'required',
            'id_kategori' => 'required',
        ]);

        $book = buku::find($id);
        $book->id = $request->get('id');
        $book->judul = $request->get('judul');
        $book->thn_terbit = $request->get('thn_terbit');
        $book->penulis = $request->get('penulis');
        $book->penerbit = $request->get('penerbit');
        $book->deskripsi = $request->get('deskripsi');
        $book->stok = $request->get('stok');
        $book->cover = $request->get('cover');
        $book->pdf = $request->get('pdf');
        $book->updated_add = date('Y-m-d');
        $book->id_kategori = $request->get('id_kategori');
        $book->id_admin = 'AD001';
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = buku::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
