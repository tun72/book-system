<x-home-layout>


    <div class="recommend">
        <h3 class="fs-4 text-2xl mb-2"><i class="fas fa-book me-2"></i></i>Purchased Book</h3>
        <div class="recommend-books">
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-7">
                @foreach ($books as $book)
                    <li class="mb-3">
                        <div  class="recommend-book" >
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
    </div>


    {{-- <div class="mx-auto">
        <!-- Book Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Book Card 1 -->
            @foreach ($books as $book)
                <div class="bg-white p-6 rounded-md shadow-md">
                    <img src="{{ $book->image }}" alt="Book Cover 1" class="w-full h-40 object-cover mb-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">{{ $book->title }}</h3>
                    <p class="text-gray-600 mb-2">Author: {{ $book->user->name }}</p>
                    <div class="mb-1 text-base font-medium text-indigo-700 dark:text-indigo-500">45%</div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2 dark:bg-gray-700">
                        <div class="bg-indigo-600 h-2.5 rounded-full dark:bg-indigo-500" style="width: 45%"></div>
                    </div>
                    <button
                        class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Continue
                        Reading</button>
                </div>
            @endforeach




            <!-- Add more book cards as needed -->

        </div>

    </div> --}}




</x-home-layout>
