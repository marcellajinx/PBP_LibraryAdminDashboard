
      
<x-admin-app title="{{ $title }}">
  {{ $errors }}
  <div class="rounded-2xl flex-col bg-white flex">
    <div class="flex-1 p-6">
      <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
        @csrf        
        <div class="mt-6 flex justify-between">
          <label for="isbn" class="grid place-items-center">ISBN</label>
          <input value="{{ old('id') }}" type="text" name="id" id="id" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('id')[0]))
          <p>ISBN tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="judul" class="grid place-items-center">Judul Buku</label>
          <input value="{{ old('judul') }}" type="text" name="judul" id="judul" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('judul')[0]))
          <p>Judul tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="penerbit" class="grid place-items-center">Penerbit</label>
          <input value="{{ old('penerbit') }}" type="text" name="penerbit" id="penerbit" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penerbit')[0]))
          <p>Penerbit tidak boleh kosong</p>
        @endif
        
        <div class="mt-6 flex justify-between">
          <label for="penulis" class="grid place-items-center">Penulis</label>
          <input value="{{ old('penulis') }}" type="text" name="penulis" id="penulis" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penulis')[0]))
          <p>Penulis tidak boleh kosong</p>
        @endif

        <div class="grid grid-cols-1 gap-2 md:grid-cols-2 mt-6">
            <div class="relative flex justify-between">
              <label for="thn_terbit" class="grid place-items-center">Tahun Terbit</label>
              <input value="{{ old('thn_terbit') }}" type="text" name="thn_terbit" id="thn_terbit" class="px-3 py-2 max-w-full w-8/12 border-zinc-300 rounded h-10 border bg-white">
            </div>
            <div class="relative flex justify-between pl-8">
              <label for="id_kategori" class="grid place-items-center">Kategori</label>
              <select name="id_kategori" id="kategori" class="px-3 py-2 max-w-full w-10/12 border-zinc-300 rounded h-10 border bg-white">
                @foreach($categories as $category)
                  <option value="{{ $category->id_kategori }}">{{$category->kategori}}</option>
                @endforeach
              </select>
            </div>
        </div>
        @if (isset($errors->get('thn_terbit')[0]))
          <p>Tahun terbit tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="stok" class="grid place-items-center">Stok</label>
          <input value="{{ old('stok') }}" type="number" name="stok" id="stok" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('stok')[0]))
          <p>stok tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="cover" class="grid place-items-center">URL Cover</label>
          <input value="{{ old('cover') }}" type="text" name="cover" id="cover" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penulis')[0]))
          <p>URL Cover tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="pdf" class="grid place-items-center">URL PDF</label>
          <input value="{{ old('pdf') }}" type="text" name="pdf" id="pdf" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('penulis')[0]))
          <p>URL PDF tidak boleh kosong</p>
        @endif

        <div class="mt-4 flex justify-between">
          <label for="deskripsi" class="grid place-items-center">Deskripsi</label>
          <textarea type="text" name="deskripsi" id="deskripsi" class="h-24 px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 border bg-white">{{ old('deskripsi') }}</textarea>
        </div>
        @if (isset($errors->get('deskripsi')[0]))
          <p>Deskripsi tidak boleh kosong</p>
        @endif

        <div class="flex items-center justify-start flex-nowrap mt-10">
          <input type="submit" value="Save" class="text-sm inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 py-2 px-3 mr-3">
            
          <button type="button" class="text-sm inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-blue-600 ring-blue-300 text-blue-600 hover:bg-blue-600 hover:text-white py-2 px-3 mr-3">
            <a href="{{ route('books.index') }}" class="inline-flex justify-center items-center">
               Cancel
            </a>
          </button>
        </div>
      </form>
    </div>
  </div>
</x-admin-app>