


<div class="w-full mb-6 mt-6 ">
    <h3 class="text-2xl font-bold text-brand-700 mb-6"><i class="fas fa-bullhorn me-2"></i></i>New Book</h3>
    <div class="w-full relative flex items-center justify-center">
        <button aria-label="slide backward"
            class="absolute z-30 left-[-1%]  bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="prev_new">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <ul class="mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="slider-new"
                class="h-full flex  lg:gap-10 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                @foreach ($books as $key => $book)
                    <div class="border border-gray-200 bg-white dark:border-none w-[30rem]">
                        <div class="bg-gray-200 w-[8rem] ">
                            <a href="/book-details/{{ $book->slug }}" class="relative">
                                <img src="{{ $book->image }}" alt=""
                                    class="hover:scale-110 transition-all object-cover w-full h-[12rem] mx-auto rounded-lg shadow-lg">
                                @if ($book->isFree == 0)
                                    <span
                                        class="book-status bg-green-900 text-green-300 border border-green-400 text-sm me-2 px-2.5 py-0.5 rounded-full">free</span>
                                    {{-- <span class="book-status bg-yellow-600">free</span> --}}
                                @else
                                    <span
                                        class="book-status bg-yellow-900 text-yellow-300 border border-yellow-300 text-sm rounded-full"><i
                                            class="fa-solid fa-crown"></i></span>
                                @endif
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>
        </ul>
        <button aria-label="slide forward"
            class="absolute z-30 right-[-2%] bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="next_new">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>




