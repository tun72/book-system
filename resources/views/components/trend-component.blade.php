<div class="w-full mb-6 mt-5">
    <div class="w-full relative flex items-center justify-center">
        <button aria-label="slide backward"
            class="absolute z-30 left-[-1.2%] bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="prev_trend">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <ul class="mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="slider-trend"
                class="h-full flex gap-6 items-center justify-start transition ease-out duration-700">
                @foreach ($books as $key => $book)
                    <li class="trend-book bg-gradient-to-tr from-[#C1CDD5] to-[#96A2A8]">
                        <div class="trend-image">
                            <img src="{{ $book->image }}" alt="">
                        </div>
                        <div class="trend-artical">
                            <div class="trend-artical-1">
                                <p>
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $book->rating)
                                            <i class="fas fa-star text-white text-sm"></i>
                                        @else
                                            <i class="far fa-star text-white text-sm"></i>
                                        @endif
                                    @endfor
                                </p>
                                <p class="name line-clamp-1 text-white">{{ $book->title }}</p>
                                <span class="line-clamp-1 text-white">{{ $book->user->name }}</span>
                            </div>
                            @auth
                                @if (auth()->user()->isBought($book))
                                    <button type="button"
                                        class="text-gray-900 w-[140px] py-1 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm   text-center ">Read
                                        Now</button>
                                @else
                                    <div class="trend-artical-2">
                                        <form action="/book-details/{{ $book->slug }}"><button class=""><i
                                                    class="fas fa-eye text-primary"></i>details</button></form>
                                        <button class="" data-modal-target="popup-modal-{{ $book->id }}"
                                            data-modal-toggle="popup-modal-{{ $book->id }}"><i
                                                class="text-stone-800"></i>{{ $book->ggcoin }}</button>
                                    </div>
                                @endif
                            @else
                                <div class="trend-artical-2">
                                    <form action="/book-details/{{ $book->slug }}"><button class=""><i
                                                class="fas fa-eye text-primary"></i>details</button></form>
                                    <button class="" data-modal-target="popup-modal-{{ $book->id }}"
                                        data-modal-toggle="popup-modal-{{ $book->id }}"><i
                                            class="fa-brands fa-gg-circle text-primary"></i>{{ $book->ggcoin }}</button>
                                </div>

                            @endauth
                        </div>
                    </li>
                @endforeach
            </div>
            @foreach ($books as $key => $book)
                <x-price-model :book="$book" />
            @endforeach
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
