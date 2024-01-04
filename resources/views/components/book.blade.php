<li class="mb-3">
    <a href="/book-details/{{ $book->slug }}" class="recommend-book">
        <div class="recommend-image">
            <img src="{{ $book->image }}" alt="">
            @if ($book->isFree == 0)
                <span
                    class="book-status bg-green-900 text-green-300 border border-green-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">free</span>
                {{-- <span class="book-status bg-yellow-600">free</span> --}}
            @else
                <span class="book-status bg-yellow-900 text-yellow-300 border border-yellow-300 text-xs rounded-full"><i class="fa-solid fa-crown"></i></span>
            @endif
        </div>
        <div class="recommend-artical">
            <div class="recommend-artical-1">
                <p class="star">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $book->rating)
                            <i class="fas fa-star"></i>
                        @else
                            <i class="far fa-star"></i>
                        @endif
                    @endfor

                </p>
                <h3 class="text-lg text-brand-700 text-bold">{{ $book->title }}</h3>
                <span>{{ $book->user->name }}</span>
            </div>
            <div class="recommend-artical-2 badge rounded-pill badge-warning">
                <i class="fa-brands fa-gg-circle text-primary fs-5"></i>
                <span class="see-detail">{{ $book->ggcoin }}</span>
            </div>
        </div>
    </a>
</li>
