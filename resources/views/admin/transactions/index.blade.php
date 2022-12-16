<x-admin-app title="Transaction Details">
  <div class="rounded-2xl flex-col bg-white flex mb-6">
    <div class="mx-5 mt-8 mb-3 flex justify-between">
      
      <h1>Borrows Transaction</h1>
      {{-- <button type="button" class="invisible inline-flex justify-center items-center whitespace-nowrap transition-colors duration-150 border cursor-pointer rounded-md border-blue-600 dark:border-blue-500 ring-blue-300 dark:ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 p-1 mr-3 last:mr-0 mb-3">
        <span class="inline-flex justify-center items-center px-3 py-1 text-sm">
          <a href="{{ route('books.create') }}">+&nbsp;&nbsp;&nbsp;Add Book</a>
        </span>
      </button> --}}
      {{-- <input placeholder="Search" type="text" name="search" id="search" class="mb-3 px-3 focus:outline-none border-gray-500 rounded-md border-1 bg-zinc-100"> --}}
    </div>

    <div class="flex-1">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>ID User</th>
          <th>User</th>
          <th>ISBN</th>
          <th>Judul</th>
        </tr>
      </thead>
      <tbody>
        @foreach($loans as $loan)
          <tr>
          <td>{{ $loan->id_pinjam }}</td>
          <td>{{ $loan->waktu_pinjam }}</td>
          <td>{{ $loan->id_pengguna }}</td>
          <td>{{ $loan->nama }}</td>
          <td>{{ $loan->id }}</td>
          <td>{{ $loan->judul }}</td>
          
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    

  </div>

  <div class="rounded-2xl flex-col bg-white flex mb-6">
    <div class="mx-5 mt-8 mb-3 flex justify-between">
      
      <h1>Returns Transaction</h1>
      {{-- <button type="button" class="invisible inline-flex justify-center items-center whitespace-nowrap transition-colors duration-150 border cursor-pointer rounded-md border-blue-600 dark:border-blue-500 ring-blue-300 dark:ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 p-1 mr-3 last:mr-0 mb-3">
        <span class="inline-flex justify-center items-center px-3 py-1 text-sm">
          <a href="{{ route('books.create') }}">+&nbsp;&nbsp;&nbsp;Add Book</a>
        </span>
      </button> --}}
      {{-- <input placeholder="Search" type="text" name="search" id="search" class="mb-3 px-3 focus:outline-none border-gray-500 rounded-md border-1 bg-zinc-100"> --}}
    </div>

    <div class="flex-1">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>ID User</th>
          <th>User</th>
          <th>ISBN</th>
          <th>Judul</th>
        </tr>
      </thead>
      <tbody>
        @foreach($returns as $return)
          <tr>
          <td>{{ $return->id_kembali }}</td>
          <td>{{ $return->waktu_kembali }}</td>
          <td>{{ $return->id_pengguna }}</td>
          <td>{{ $return->nama }}</td>
          <td>{{ $return->id }}</td>
          <td>{{ $return->judul }}</td>
          
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    

  </div>
</x-admin-app>