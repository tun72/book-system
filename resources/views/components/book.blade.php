<li class="mb-3">
    <a href="/book-details/{{ $book->slug }}" class="recommend-book">
        <div class="recommend-image">
            <img src="{{ $book->image }}" alt="">
            @if ($book->isFree == 0)
                <span class="book-status bg-warning">free</span>
            @else
                <span class="book-status bg-warning"><i class="fa-solid fa-crown"></i></span>
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
                <span class="name">{{ $book->title }}</span>
                <span>{{ $book->user->name }}</span>
            </div>
            <div class="recommend-artical-2 badge rounded-pill badge-warning">
                <i class="fa-brands fa-gg-circle text-primary fs-5"></i>
                <span class="see-detail">{{ $book->ggcoin }}</span>
            </div>
        </div>
    </a>
</li>
