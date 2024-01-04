<x-home-layout>


    <div class="recommend">
        <h3 class="fs-4 text-primary mb-2"><i class="fas fa-book"></i></i>Read List</h3>
        <div class="recommend-books">
            <ul class="recommend-list">
                @foreach ($books as $book)
                    <li>
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
                                    <span class="name">{{ $book->title }}</span>
                                    <span>{{ $book->user->name }}</span>
                                </div>
                                <div class="recommend-artical-1">
                                    <div class="w-full bg-brand-500 rounded-full">
                                        <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                            style="width: 45%"> 45%</div>
                                    </div>

                                </div>

                                <div>
                                    <a href="/book-details/{{ $book->slug }}">Read</a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>



</x-home-layout>
