<x-author-profile :author="$author">


    <div class="w-full mb-4 mt-4">
        <h3 class="text-2xl font-bold text-brand-700 mb-6"><i class="fas fa-bullhorn me-2"></i>For You</h3>
        <div class="w-full relative flex items-center">


            @if (count($author->user->books) > 8)
                <button aria-label="slide backward"
                    class="absolute z-30 left-[-1.2%]  bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
                    id="prev_trend">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            @endif
            <ul class="overflow-x-hidden overflow-y-hidden">
                <div id="slider-trend"
                    class="h-full flex  lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    @foreach ($author->user->books as $key => $book)
                        <li class="trend-book bg-brand-600">
                            <div class="trend-image">
                                <img src="{{ $book->image }}" alt="">
                            </div>
                            <div class="trend-artical">
                                <div class="trend-artical-1">
                                    <p>
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $book->rating)
                                                <i class="fas fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </p>
                                    <p class="name">{{ $book->title }}</p>
                                    <span>{{ $book->user->name }}</span>
                                </div>
                                <div class="trend-artical-2">
                                    <button class=""><i class="fas fa-eye text-primary"></i>details</button>
                                    <button class=""><i
                                            class="fa-brands fa-gg-circle text-primary"></i>{{ $book->ggcoin }}</button>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </div>
            </ul>

            @if (count($author->user->books) > 8)
                <button aria-label="slide forward"
                    class="absolute z-30 right-[0%] bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
                    id="next_trend">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            @endif
        </div>
    </div>

    <div class="w-full mb-6 mt-6">
        <h3 class="text-2xl font-bold text-brand-700 mb-6"><i class="fas fa-bullhorn me-2"></i></i>New Book</h3>
        <div class="w-full relative flex items-center">
            @if (count($author->user->books) > 8)
                <button aria-label="slide backward"
                    class="absolute z-30 left-[-1.2%]  bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
                    id="prev_trend">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            @endif
            <ul class="overflow-x-hidden overflow-y-hidden">
                <div id="slider-new"
                    class="h-full flex  lg:gap-10 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    @foreach ($author->user->books as $key => $book)
                        <div class="border border-gray-200 bg-white dark:border-none">
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
            @if (count($author->user->books) > 8)
                <button aria-label="slide forward"
                    class="absolute z-30 right-[0%] bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
                    id="next_trend">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            @endif
        </div>
    </div>

    <div class="w-full mb-6 mt-6">
        <h3 class="text-2xl font-bold text-brand-700 mb-6"><i class="fas fa-bullhorn me-2"></i></i>Popular Book</h3>
        <div class="w-full relative flex items-center">
            @if (count($author->user->books) > 8)
                <button aria-label="slide backward"
                    class="absolute z-30 left-[-1.2%]  bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
                    id="prev_trend">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            @endif
            <ul class="overflow-x-hidden overflow-y-hidden">
                <div id="slider-new"
                    class="h-full flex  lg:gap-10 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    @foreach ($author->user->books as $key => $book)
                        <div class="border border-gray-200 bg-white dark:border-none">
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
            @if (count($author->user->books) > 8)
                <button aria-label="slide forward"
                    class="absolute z-30 right-[0%] bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
                    id="next_trend">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            @endif
        </div>
    </div>
</x-author-profile>
