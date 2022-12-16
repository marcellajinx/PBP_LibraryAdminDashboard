<x-admin-app title="{{ $user->nama }}">

  <div class="rounded-2xl flex-col bg-white flex mb-6">

    <div class="flex-1 px-6 pb-6">
      <form id="edit-form" enctype="multipart/form-data">
        @csrf        
        <div class="mt-6 flex justify-between">
          <label for="id_pengguna" class="grid place-items-center">ID</label>
          <input value="{{ $user->id_pengguna }}" type="text" name="id_pengguna" id="id_pengguna" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('id')[0]))
          <p>ID Pengguna tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="nama" class="grid place-items-center">Nama </label>
          <input value="{{ $user->nama }}" type="text" name="nama" id="nama" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('nama')[0]))
          <p>Nama tidak boleh kosong</p>
        @endif

        <div class="mt-6 flex justify-between">
          <label for="email" class="grid place-items-center">Email</label>
          <input value="{{ $user->email }}" type="text" name="email" id="email" class="px-3 py-2 max-w-full border-zinc-300 rounded w-10/12 h-10 border bg-white">
        </div>
        @if (isset($errors->get('email')[0]))
          <p>Email tidak boleh kosong</p>
        @endif

        <div class="flex items-center justify-start flex-nowrap mt-10">
          <a href="{{ route('users.index') }}">
          <button  type="button" class="text-sm inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-blue-600 ring-blue-300 text-blue-600 hover:bg-blue-600 hover:text-white py-2 px-3 mr-3">
            Kembali  
          </button>
          </a>
        </div>
      </form>
    </div>
  </div>

  <div class="rounded-2xl flex-col bg-white flex mb-6">
    <div class="flex-1 p-6">
      <h1>Loan History</h1>
      <table>
        <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>ISBN</th>
          <th>Judul</th>
          {{-- <th>Status</th> --}}
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($loansh as $loan)
        <tr>
          <td>{{ $loan->id_pinjam }}</td>
          <td>{{ $loan->waktu_pinjam }}</td>
          <td>{{ $loan->id }}</td>
          <td>{{ $loan->judul }}</td>
          {{-- <td>{{ $loan->status }}</td> --}}
        </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
</x-admin-app>

<script>
   $(document).ready(function() {
      $("#edit-form :input").prop("disabled", true);
      $("#edit-form :button").prop("disabled", true);
    })
  
</script>
