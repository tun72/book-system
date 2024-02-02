<div class="w-full mb-4 mt-4">
    <div class="w-full relative flex items-center justify-center">
        <button aria-label="slide backward"
            class="absolute z-30 left-[-1.2%]  bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="prev_trend">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <ul class="mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="slider-trend"
                class="h-full flex  lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                @foreach ($books as $key => $book)
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
        <button aria-label="slide forward"
            class="absolute z-30 right-[0%] bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="next_trend">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>
