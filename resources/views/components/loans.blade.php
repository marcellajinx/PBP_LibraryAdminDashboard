<div>
    <div class="flex-1">
        @php
         $users = $pass   
        @endphp
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date Addeds</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->tgl_daftar }}</td>
          <td class="whitespace-nowrap">
            <div class="flex items-center justify-start flex-nowrap -mb-3">
              <button type="button" class="inline-flex justify-center items-center whitespace-nowrap transition-colors border cursor-pointer rounded border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 p-1 mr-3 last:mr-0 mb-3">
                <a href="{{ route('users.show', urlencode($user->id_pengguna)) }}">
                <span class="inline-flex justify-center items-center w-6 h-6">
                  <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                      <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"></path>
                  </svg>
                </span>
                </a>
              </button>
            </div>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>

{{-- <x-admin-app title="Loans Data">
  <div class="rounded-2xl flex-col bg-white flex mb-6">
    <div class="mx-5 mt-8 mb-3 flex justify-between">
      <button type="button" class="invisible inline-flex justify-center items-center whitespace-nowrap transition-colors duration-150 border cursor-pointer rounded-md border-blue-600 dark:border-blue-500 ring-blue-300 dark:ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 p-1 mr-3 last:mr-0 mb-3">
        <span class="inline-flex justify-center items-center px-3 py-1 text-sm">
          <a href="{{ route('books.create') }}">+&nbsp;&nbsp;&nbsp;Add Book</a>
        </span>
      </button>
      <input placeholder="Search" type="text" name="search" id="search" class="mb-3 px-3 focus:outline-none border-gray-500 rounded-md border-1 bg-zinc-100">
    </div>
    <div class="flex-1">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date Addeds</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->tgl_daftar }}</td>
          <td class="whitespace-nowrap">
            <div class="flex items-center justify-start flex-nowrap -mb-3">
              <button type="button" class="inline-flex justify-center items-center whitespace-nowrap transition-colors border cursor-pointer rounded border-blue-600 ring-blue-300 bg-blue-600 text-white hover:bg-blue-700 hover:border-blue-700 p-1 mr-3 last:mr-0 mb-3">
                <a href="{{ route('users.show', urlencode($user->id_pengguna)) }}">
                <span class="inline-flex justify-center items-center w-6 h-6">
                  <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                      <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"></path>
                  </svg>
                </span>
                </a>
              </button>
            </div>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>

  </div>
</x-admin-app> --}}