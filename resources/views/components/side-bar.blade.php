<aside id="aside" class="border-r-2 border-zinc-100 w-46 fixed flex z-40 top-0 h-screen transition-position overflow-hidden -left-46 lg:left-0 lg:hidden xl:flex">
    <div class="bg-white flex-1 flex flex-col overflow-hidden">
        <div class="border-b-2 border-zinc-100 flex flex-row h-14 items-center justify-between">
            <div class="text-center flex-1 lg:text-left lg:pl-6 xl:text-center xl:pl-0" style="font-family: 'Major Mono Display', monospace;">
                <img class="ml-4 w-16" src="{{ asset('img/logo.png') }}">
            </div>
        </div>
        <div class="pt-2 aside-scrollbars-light flex-1 overflow-y-auto overflow-x-hidden">
            <ul>
                @foreach($sidebar as $sidebar_item => $sidebar_url)
                    <li>
                        <a href="{{ $sidebar_url }}" class="flex cursor-pointer py-3 text-slate-400 font-semibold hover:text-black">
                            <span class="inline-flex justify-center items-center w-16 h-6 flex-none">
                                <svg viewBox="0 0 24 24" width="18" height="18" class="inline-block">
                                    <path fill="currentColor" d="M21,16H3V4H21M21,2H3C1.89,2 1,2.89 1,4V16A2,2 0 0,0 3,18H10V20H8V22H16V20H14V18H21A2,2 0 0,0 23,16V4C23,2.89 22.1,2 21,2Z"></path>
                                </svg>
                            </span>
                            <span class="grow text-ellipsis line-clamp-1 pr-12">{{ $sidebar_item }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</aside>