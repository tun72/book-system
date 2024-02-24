<li class="mb-3">
    <a href="#" class="recommend-book" data-modal-target="default-modal-{{ $book->id }}"
        data-modal-toggle="default-modal-{{ $book->id }}">
        <div class="recommend-image">
            <img src="{{ $book->image }}" alt="">
            @if ($book->isFree == 0)
                <span
                    class="book-status bg-green-900 text-green-300 border border-green-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">free</span>
                {{-- <span class="book-status bg-yellow-600">free</span> --}}
            @else
                <span class="book-status bg-yellow-900 text-yellow-300 border border-yellow-300 text-xs rounded-full"><i
                        class="fa-solid fa-crown"></i></span>
            @endif
        </div>
        <div class="recommend-artical">
            <div class="recommend-artical-1">
                <p class="star">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $book->rating)
                            <i class="fas fa-star text-star-400"></i>
                        @else
                            <i class="far fa-star text-star-400"></i>
                        @endif
                    @endfor

                </p>
                <h3 class="text-lg text-brand-700 text-bold ">{{ Str::of($book->title)->limit(12) }}</h3>
                <span>{{ Str::of($book->user?->name)->limit(18) }}</span>
            </div>
            @auth
                @if (auth()->user()->isBought($book))
                    <button type="button"
                        class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm  py-1 text-center me-2 mb-2">Read
                        Now</button>
                @elseif(auth()->user()->isAuthorBook($book))
                    <div></div>
                    {{-- <button
                        class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm  py-1 text-center me-2 mb-2 w-full">Go</button> --}}
                @else
                    <div class="recommend-artical-2 badge rounded-pill badge-warning">
                        <i class="fa-brands fa-gg-circle text-primary fs-5"></i>
                        <span class="see-detail">{{ $book->ggcoin - $book->discount }}</span>

                        @if ($book->discount > 0)
                            <span
                                class="ml-3 text-base font-normal text-gray-500 line-through dark:text-gray-400">{{ $book->ggcoin }}</span>
                        @endif

                    </div>
                @endif
            @else
                <div class="recommend-artical-2 badge rounded-pill badge-warning">
                    <i class="fa-brands fa-gg-circle text-primary fs-5"></i>
                    <span class="see-detail">{{ $book->ggcoin - $book->discount }}</span>

                    @if ($book->discount > 0)
                        <span
                            class="ml-3 text-base font-normal text-gray-500 line-through dark:text-gray-400">{{ $book->ggcoin }}</span>
                    @endif
                </div>
            @endauth

        </div>
    </a>
</li>

<x-book-modal :book="$book" :id="$book->id" />
