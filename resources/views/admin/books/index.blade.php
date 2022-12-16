<x-admin-app title="{{ $title }}">
  <div class="rounded-2xl flex-col bg-white flex mb-6">
    <div class="mx-3 mt-8 mb-3 flex justify-between">
      <button type="button" class="inline-flex justify-center items-center whitespace-nowrap transition-colors duration-150 border cursor-pointer rounded-md border-blue-600 dark:border-blue-500 ring-blue-300 dark:ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 p-1 mr-3 last:mr-0 mb-3">
        <span class="inline-flex justify-center items-center px-3 py-1 text-sm">
          <a href="{{ route('books.create') }}">+&nbsp;&nbsp;&nbsp;Add Book</a>
        </span>
      </button>
      <input placeholder="Search" type="text" name="search" id="search" class="mb-3 px-3 focus:outline-none border-gray-500 rounded-md border-1 bg-zinc-100">
    </div>
    <div class="flex-1">
    <table class="data-table">
      <thead>
        <tr>
          <th></th>
          <th>Title</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Stock</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($books as $book)
          <tr>
          <td class="border-b-0 lg:w-6 before:hidden">
            <div class="w-12 h-12 mx-auto">
              <img src="{{ $book->cover }}" class="block h-auto w-full max-w-full bg-gray-100 ">
            </div>
          </td>
          <td>{{ $book->judul }}</td>
          <td>{{ $book->penulis }}</td>
          <td>{{ $book->penerbit }}</td>
          <td>{{ $book->id }}</td>
          <td class="whitespace-nowrap">
            <div class="flex items-center justify-start flex-nowrap -mb-3">
              <a href="{{ route('books.show', $book->id) }}">
              <button type="button" class="inline-flex justify-center items-center whitespace-nowrap transition-colors border cursor-pointer rounded border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 p-1 mr-3 last:mr-0 mb-3">
               
                <span class="inline-flex justify-center items-center w-6 h-6">
                  <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                      <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"></path>
                  </svg>
                </span>
              </button>
              </a>

              <form action="{{ route('books.destroy', $book->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="inline-flex justify-center items-center whitespace-nowrap transition-colors border cursor-pointer rounded border-red-600 ring-red-300 bg-red-600 text-white hover:bg-red-700 hover:border-red-700 p-1 mr-3 last:mr-0 mb-3">
                
                  <span class="inline-flex justify-center items-center w-6 h-6">
                    <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                        <path fill="currentColor" d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M9,8H11V17H9V8M13,8H15V17H13V8Z"></path>
                    </svg>
                  </span>
              </button>
              </form>
            </div>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>

  </div>
</x-admin-app>

<script type="text/javascript">
  $('#search').on('keyup', function() {
    
    $key = $(this).val();
    
    // $.ajax({
    //   type: 'get',
    //   url: '{{ route('books.index') }}',
    //   data: {
    //     'search': $key,
    //   },
    //   success: function(data) {
    //     console.log(data);
    //     $('tbody').html(data);
    //   }
    // })

    $.post('http://127.0.0.1:8000/books/search', 
      {
        _token: $('meta[name="csrf-token"]').attr('content'),
        search: $key,
      },
      function(data) {
        table_post_row(data);
      }
    );
  });

  function table_post_row(res){
    let htmlView = '';
    if(res.books.length <= 0){
        htmlView+= `
              <tr><td></td><td></td><td></td><td class="h-10 text-center font-bold">No Data Found</td></tr>`
    }
    // for(i = 0; i<res.books.length; i++) {
    // console.log(res.books[i])
    // }
    for(i = 0; i<res.books.length; i++) {
        htmlView+=`<tr>
          <td class="border-b-0 lg:w-6 before:hidden">
            <div class="w-8 h-8 mx-auto">
              <img src="https://avatars.dicebear.com/api/avataaars/Howell-Hand.svg" class="rounded-full block h-auto w-full max-w-full bg-gray-100 dark:bg-slate-800">
            </div>
          </td>
          <td>` +  res.books[i].judul  + `</td>
          <td>` +  res.books[i].penulis  + `</td>
          <td>` +  res.books[i].penerbit  + `</td>
          <td>` +  res.books[i].id  + `</td>
          <td class="whitespace-nowrap">
            <div class="flex items-center justify-start flex-nowrap -mb-3">
              <button type="button" class="inline-flex justify-center items-center whitespace-nowrap transition-colors border cursor-pointer rounded border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 p-1 mr-3 last:mr-0 mb-3">
               
                <span class="inline-flex justify-center items-center w-6 h-6">
                  <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                      <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"></path>
                  </svg>
                </span>
              </button>

              <form method="POST" action="`+ '{{ route('books.destroy', $book->id) }} '+ `>`+
              `@csrf
              @method("DELETE")
              <button type="submit" class="inline-flex justify-center items-center whitespace-nowrap transition-colors border cursor-pointer rounded border-red-600 ring-red-300 bg-red-600 text-white hover:bg-red-700 hover:border-red-700 p-1 mr-3 last:mr-0 mb-3">
                
                  <span class="inline-flex justify-center items-center w-6 h-6">
                    <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                        <path fill="currentColor" d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M9,8H11V17H9V8M13,8H15V17H13V8Z"></path>
                    </svg>
                  </span>
              </button>
              </form>
            </div>
          </td>
        </tr>`         
      };
    $('tbody').html(htmlView);
}
</script>

<script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } })
</script>