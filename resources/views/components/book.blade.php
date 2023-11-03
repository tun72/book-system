<li class="recommend-book mb-3">
    <div class="recommend-image">
        <img src="{{ $book->image }}" alt="">
        @if ($book->isFree)
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
        <div class="recommend-artical-2">
            <a class="see-detail" href="/book-details/{{ $book->slug }}"><i class="fas fa-eye text-primary"></i>details</a>
            <a class="see-detail"><i class="fa-brands fa-gg-circle text-primary fs-5"></i>{{ $book->dosh }}dosh</a>
        </div>
    </div>
</li>
