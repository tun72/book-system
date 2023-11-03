<x-layout>

    <div class="progress"></div>
    <div class="my-body">
        <x-sidebar />
        <x-nav />
    </div>
    <div class="content">
        <div class="recommend">
            <h3 class="fs-4 text-primary mb-2"><i class="fas fa-bullhorn me-2"></i></i>Your Purchased Book</h3>
            <div class="recommend-books">
                <ul class="recommend-list">
                    @foreach ($books as $book)
                        <li class="mb-3">
                            <a href="/book-details/{{ $book->slug }}" class="recommend-book">
                                <div class="recommend-image">
                                    <img src="{{ $book->image }}" alt="">
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
                                    <div class="recommend-artical-1">go</div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

</x-layout>
