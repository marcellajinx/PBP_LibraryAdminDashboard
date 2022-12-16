<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBukuController extends Controller
{
    public function index()
    {
        $title = "Books Inventory";
        $books = DB::table('buku')->get();
        return view(
            'admin.books.index',
            [
                'books' => $books,
                'title' => $title,
            ]
        );
    }

    // public function form($action)
    // {
    //     $categories = DB::table('kategori')->get();
    //     if ($action == "update") {
    //         $title = "Simpan Perubahan";
    //         $books = DB::table('buku')->get();
    //     } else {
    //         $title = "Tambah Buku";
    //     }
    //     return view(
    //         'admin.books.form',
    //         [
    //             'categories' => $categories,
    //             'title' => $title,
    //         ]
    //     );
    // }

    public function add_submit(Request $request)
    {
        $request->validate([
            'isbn' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        DB::table('buku')->insert($request->except(['_token']));
        return redirect()->route('books.index');

        // echo $request['isbn'];
    }

    public function delete($isbn)
    {
        DB::table('buku')->where('isbn', $isbn)->delete();
        return redirect()->route('books.index');
    }
}


{{-- 
{{-- <script>
    var destroy = function(url){
      var xhr = new XMLHttpRequest();
      xhr.open("DELETE", url);
      xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
      xhr.onload = function () {
        if (xhr.status == 200) {
          window.location.reload(true);
        } else {
          console.error(xhr.responseText);
        }
      }
      xhr.send(JSON.stringify({
        '_token': '{{ csrf_token() }}',
      }));
    } --}}

    
// $(document).ready(function () {

//  $("body").on("submit",".delete-form",function(e){

//     // if(!confirm("Do you really want to do this?")) {
//     //    return false;
//     //  }

//     e.preventDefault();
//     // var id = $(this).data("id");
//     // var id = $(this).attr('data-id');
//     // var token = $("meta[name='csrf-token']").attr("content");
//     // var url = $(this).attr('href');
//     // console.log(token);

//     $.ajax(
//         {
//           url: $(this).data('route'), //or you can use url: "company/"+id,
//           type: 'delete',
//           headers: {
//                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                   },
          
//           data: {
//             '_token': $("meta[name='csrf-token']").attr("content")
//             // '_method': 'DELETE',
//           },
//           success: function() {
//             window.location = '/books'
//           }
        
        
//      });
//       return false;
//    });
// });

// href="{{ route('books.destroy', $book->id) }}"



// $(document).ready(function () {
//   function getXMLHTTPRequest() {
//     if (window.XMLHttpRequest) {
//       return new XMLHttpRequest();
//     }
//     else {
//       return new getActiveXObject("Microsoft.XMLHTTP");       
//     }
//   } 

//   $("body").on("click","#btn-delete",function(e){
//     var xmlhttp = getXMLHTTPRequest();
//     var url =  $(this).data("url");
//     console.log(url)
//     xmlhttp.open('get', url, true);
//     xmlhttp.onreadystatechange = function() {
//       console.log('ok')
//       if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//         // $('#view-data').load('view_books.php');
//         // view_books('');
//         console.log('okkk')
//       }
//       return false;
//     }
//     xmlhttp.send(null);
//   })
// })

// function delete_book_get(isbn) {
//   var xmlhttp = getXMLHTTPRequest();
//   if (isbn != '') {
//     var url =  $(this).data("id");;
//     xmlhttp.open('GET', url, true);
//     xmlhttp.onreadystatechange = function() {
//       // if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//       //   // $('#view-data').load('view_books.php');
//       //   view_books('');
//       // }
//       return false;
//     }
//     xmlhttp.send(null);
//   }
// }

  </script> --}}