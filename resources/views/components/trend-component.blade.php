<div class="trends mx-auto mb-3 mt-3">
    <h3 class="fs-4 text-primary mb-0"><i class="fas fa-fire me-2"></i>Top Trends</h3>
    <ul class="trend-list">
        @foreach ($books as $book)
            <li class="trend-book">
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
                        <button class=""><i class="fa-brands fa-gg-circle text-primary"></i>{{ $book->ggcoin }}</button>
                    </div>
                </div>
            </li>
        @endforeach

    </ul>
</div>
