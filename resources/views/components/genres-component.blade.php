<div class="flex items-center justify-center w-full px-4">
    <div class="w-full relative flex items-center justify-center">
        <button aria-label="slide backward"
            class="absolute z-30 left-[-2.5%]   cursor-pointer hover:bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="prev">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div class="mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="slider"
                class="h-full flex  lg:gap-4 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                @foreach ($genres as $genre)
                    <div>
                        <a href="/search-books/?genres={{ $genre->slug }} {{ request('author') ? '&author=' . request('author') : '' }} {{ request('search') ? '&search=' . request('search') : '' }}"
                            class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
                            helloworld</a>
                    </div>
                @endforeach

            </div>
        </div>
        <button aria-label="slide forward"
            class="absolute z-30 right-[-2.5%] hover:bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="next">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>
