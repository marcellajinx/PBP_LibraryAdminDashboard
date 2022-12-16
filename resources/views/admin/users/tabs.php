<x-admin-app title="Transactions Detail">
  <div>
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 ">
      <li>
        <a onclick="clickLoan()" aria-current="page" id="loans" href="#" class="bg-zinc-100 inline-block p-2 text-black bg-white rounded-t-md active">
          Loans Data
        </a>
      </li>
      <li>
        <a onclick="clickReturn()" href="#" id="returns" class="bg-zinc-100 inline-block p-2 text-black rounded-t-md active ">
          Returns Data
        </a>
      </li>
      </li>
    </ul>

    {{-- @foreach($users as $user)
        <p>a</p>
        @endforeach --}}
    <div class="bg-white p-3" id="content-transaction">
      <x-loans :pass="$users" />
    </div>
  </div>
</x-admin-app>

<script>
  function clickLoan() {
    $('#returns').removeAttr('aria-current');
    $('#loans').attr('aria-current', 'page');
    $('#loans').addClass('bg-white');
    $('#returns').removeClass('bg-white');
    // $('#content-transaction').html(`<x-loans users="{{ $users }}"></x-loans>`);
  }

  function clickReturn() {
    $('#loans').removeAttr('aria-current');
    $('#returns').attr('aria-current', 'page');
    $('#returns').addClass('bg-white');
    $('#loans').removeClass('bg-white');
    $('#content-transaction').html(`<x-returns></x-returns>`);

  }
</script>