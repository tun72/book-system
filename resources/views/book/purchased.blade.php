<x-home-layout>
    <div class="recommend">
        <h3 class="fs-4 text-2xl mb-2"><i class="fas fa-book me-2"></i></i>Purchased Book</h3>
        @if (!count($books))
            <div class="w-[30rem] h-[30rem] mx-auto">
                <p class="text-primary text-center mt-5 fs-3">No book found 😓</p>
            </div>
        @else
            <div class="recommend-books">
                <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7">
                    @foreach ($books as $book)
                        <li class="mb-3">
                            <div class="recommend-book">
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
                                        <span class="text-green-500">{{ $book->title }}</span>
                                        <span>{{ $book->user->name }}</span>
                                    </div>
                                    <a href="/book-details/{{ $book->slug }}" class="recommend-artical-1">read</a>
                                </div>
                                </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</x-home-layout>
