<x-admin-app title="{{ $title }}">
  <div class="grid gap-6 grid-cols-2 mb-6">

    <div class="rounded-2xl flex-col bg-white flex">
      <div class="text-xl px-6 pt-6">Platform Summary</div>
      <div class="grid gap-6 grid-cols-2 mb-4">

        {{-- total loans --}}
        <div class="flex-1 px-6 pt-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-purple-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/book.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Total Books</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $bookCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>

        {{-- revenue --}}
        <div class="flex-1 px-6 pt-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-yellow-100 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/transaction.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Transactions</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $authorCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


        {{-- cost --}}
        <div class="flex-1 px-6 pt-6 mb-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-emerald-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/user.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Registrated Users</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $userCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


        {{-- profit --}}
        <div class="flex-1 px-6 pt-6 mb-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-orange-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/admin.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Administrators</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $adminCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>

    <div class="rounded-2xl flex-col bg-white flex">
      <div class="text-xl px-6 pt-6">Rental Overview</div>
      <div class="grid gap-6 grid-cols-2 mb-4">

        {{-- total loans --}}
        <div class="flex-1 px-6 pt-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-purple-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/checkedout.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">No of Borrows</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $info_pinjam }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>

        {{-- revenue --}}
        <div class="flex-1 px-6 pt-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-yellow-100 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/returns.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">No of Returns</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $info_kembali }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


        {{-- cost --}}
        <div class="flex-1 px-6 pt-6 mb-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-emerald-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/queue.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">No of Queues</h3>
                  <h1 class="text-2xl leading-tight font-semibold">1000</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


        {{-- profit --}}
        <div class="flex-1 px-6 pt-6 mb-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-orange-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/underactive.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Underactive Users</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $underactive }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>

  </div>
  <div class="flex my-12 justify-between">
    <div class="flex-initial p-6 w-7/12 rounded-2xl flex-col bg-white flex">
      <canvas id="myChart"></canvas>
    </div>

    <div class="flex-initial w-2/5 rounded-2xl flex-col bg-white flex">
      <div class="text-xl px-6 pt-6">Books Overview</div>
      <div class="grid gap-6 grid-cols-2 mb-4">

        {{-- total loans --}}
        <div class="flex-1 px-6 pt-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-purple-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/title.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Titles</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $titleCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>

        {{-- revenue --}}
        <div class="flex-1 px-6 pt-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-yellow-100 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/author.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Authors</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $authorCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


        {{-- cost --}}
        <div class="flex-1 px-6 pt-6 mb-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-emerald-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/publisher.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Publishers</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $publisherCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


        {{-- profit --}}
        <div class="flex-1 px-6 pt-6 mb-6">
          <div class="justify-between items-center">
            <div class="flex">
              {{-- icon --}}
              <div class="flex justify-between items-center">
                <div class="bg-orange-200 rounded-lg my-2 mr-2 flex items-center justify-center">
                  <span class="inline-flex justify-center items-center  h-12 w-12 text-emerald-500">
                    {{-- <svg viewBox="0 0 24 24" width="28" height="28" class="inline-block">
                  <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path>
                </svg> --}}
                    <img width="28" height="28" src="{{ asset('img/category.png') }}" />
                  </span>
                </div>
              </div>

              {{-- text --}}
              <div class="flex justify-between items-center">
                <div class="flex flex-col justify-center">
                  <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Categories</h3>
                  <h1 class="text-2xl leading-tight font-semibold">{{ $categoryCount }}</h1>
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <script type="text/javascript">
    const labels = @json($labels);
    const booksc = @json($data);

    console.log(labels)
    const data = {
      labels: labels,
      datasets: [{
        label: 'Distribusi Kategori',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: booksc,
      }]
    }

    const config = {
      type: 'line',
      data: data,
      options: {}
    };

    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
</x-admin-app>
