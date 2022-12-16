<x-admin-app title="{{ $book->judul }}">
{{-- <div class="flex z-50 items-center flex-col justify-center overflow-hidden fixed inset-0">
  <div class="rounded-2xl flex-col dark:bg-slate-900 bg-white flex shadow-lg max-h-modal w-11/12 md:w-3/5 lg:w-2/5 xl:w-4/12 z-50">
    <div class="flex-1 p-6">
      <div class="flex items-center justify-between mb-3">
        <h1 class="text-2xl">
          Sample
        </h1>
      </div>
      <div class="space-y-3">
        <p>aaaaa</p>
      </div>
    </div>
    <footer class="p-6">
      <div class="flex items-center justify-start flex-wrap -mb-3">
        <a href="{{ route('books.index') }}">
        <button type="button" class="inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 py-2 px-3 mr-3 last:mr-0 mb-3">
          <span class="px-2">Done</span>
        </button>
        </a>
      </div>
    </footer>
  </div>
</div> --}}

  <div class="rounded-2xl flex-col bg-white flex mb-6">
    <button onclick="activateEdit()" type="button" class="w-1/6 inline-flex justify-center items-center whitespace-nowrap transition-colors duration-150 border cursor-pointer rounded-md border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 p-1 mr-3 mx-5 mt-8">
        <span class="inline-flex justify-center items-center px-3 py-1 text-sm">
          Edit Detail
        </span>
      </button>

    <div class="flex-1 px-6 pb-6">
      <form action="{{ route('books.update', $book->id) }}" method="post" enctype="multipart/form-data">
        @csrf  
        @method('PUT')    
        <div id="edit-form">
        <div class="mt-6 flex justify-between">
          <label for="isbn" class="grid place-items-center">ISBN</label>
          <input value="{{ old('id') == '' ? $book->id : old('id') }}" type="text" name="id" id="id" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('id')[0]))
          <p>ISBN tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="judul" class="grid place-items-center">Judul Buku</label>
          <input value="{{ old('judul') == '' ? $book->judul : old('judul') }}" type="text" name="judul" id="judul" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('judul')[0]))
          <p>Judul tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="penerbit" class="grid place-items-center">Penerbit</label>
          <input value="{{ old('penerbit') == '' ? $book->penerbit : old('penerbit') }}"  type="text" name="penerbit" id="penerbit" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penerbit')[0]))
          <p>Penerbit tidak boleh kosong</p>
        @endif
        
        <div class="mt-6 flex justify-between">
          <label for="penulis" class="grid place-items-center">Penulis</label>
          <input value="{{ old('penulis') == '' ? $book->penulis : old('penulis') }}"  type="text" name="penulis" id="penulis" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penulis')[0]))
          <p>Penulis tidak boleh kosong</p>
        @endif

        <div class="grid grid-cols-1 gap-2 md:grid-cols-2 mt-6">
            <div class="relative flex justify-between">
              <label for="thn_terbit" class="grid place-items-center">Tahun Terbit</label>
              <input value="{{ old('thn_terbit') == '' ? $book->thn_terbit : old('thn_terbit') }}"  type="text" name="thn_terbit" id="thn_terbit" class="px-3 py-2 max-w-full w-8/12 border-zinc-300 rounded h-10 border bg-white">
            </div>
            <div class="relative flex justify-between pl-8">
              <label for="id_kategori" class="grid place-items-center">Kategori</label>
              <select name="id_kategori" id="kategori" class="px-3 py-2 max-w-full w-10/12 border-zinc-300 rounded h-10 border bg-white">
                @foreach($categories as $category)
                  <option value="{{ $category->id_kategori }}">{{ $category-> kategori }} </option>
                @endforeach
              </select>
            </div>
        </div>
        @if (isset($errors->get('thn_terbit')[0]))
          <p>Tahun terbit tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="stok" class="grid place-items-center">Stok</label>
          <input value="{{ old('stok') == '' ? $book->stok : old('stok') }}"  type="number" name="stok" id="stok" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('stok')[0]))
          <p>stok tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="cover" class="grid place-items-center">URL Cover</label>
          <input value="{{ old('cover') == '' ? $book->cover : old('cover') }}"  type="text" name="cover" id="cover" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penulis')[0]))
          <p>URL Cover tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="pdf" class="grid place-items-center">URL PDF</label>
          <input value="{{ old('pdf') == '' ? $book->pdf : old('pdf') }}"  type="text" name="pdf" id="pdf" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penulis')[0]))
          <p>URL PDF tidak boleh kosong</p>
        @endif

        <div class="mt-4 flex justify-between">
          <label for="deskripsi" class="grid place-items-center">Deskripsi</label>
          <textarea type="text" name="deskripsi" id="deskripsi" class="h-24 px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 border bg-white">{{ old('deskripsi') == '' ? $book->deskripsi : old('deskripsi') }}</textarea>
        </div>
        @if (isset($errors->get('deskripsi')[0]))
          <p>Deskripsi tidak boleh kosong</p>
        @endif
        </div>  

        <div class="flex items-center justify-start flex-nowrap mt-10">
          <button type="submit" class="text-sm inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 py-2 px-3 mr-3">Save</button>
            
          
          <button type="button" href="{{ route('books.index') }}" class="text-sm inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-blue-600 ring-blue-300 text-blue-600 hover:bg-blue-600 hover:text-white py-2 px-3 mr-3">
            Cancel  
          </button>
        </div>

        
      </form>
    </div>
  </div>
</x-admin-app>

<script>
   $(document).ready(function() {
      $("#edit-form :input").prop("disabled", true);
    })

    function activateEdit() {
      $("#edit-form :input").prop("disabled", false);
    }
  
</script>
