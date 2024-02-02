@php
    $reviews = $book->latest()->paginate(4);
    $index = 0;

    $random = ['warning', 'danger', 'info', 'success', 'secondary'];
@endphp

<x-home-layout>
    <section class="container mx-auto p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:items-center">
            <!-- Course Image -->
            <div class="flex gap-10 justify-center ">
                <div class="lg:flex flex-col gap-5  hidden">
                    <div class="">
                        <a href="#" class="block border border-blue-300 hover:border-blue-300">
                            <img src="{{ $book->image }}" alt="" class="object-cover w-full lg:h-20">
                        </a>
                    </div>
                    <div class="">
                        <a href="#" class="block border border-transparent hover:border-blue-300">
                            <img src="{{ $book->image }}" alt="" class="object-cover w-full lg:h-20">
                        </a>
                    </div>
                    <div class="">
                        <a href="#" class="block border border-transparent hover:border-blue-300">
                            <img src="{{ $book->image }}" alt="" class="object-cover w-full lg:h-20">
                        </a>
                    </div>
                </div>
                <div class="w-[50%]">
                    <img src="{{ $book->image }}" alt="Course Image" class="w-full h-full rounded-lg object-cover">
                </div>
            </div>
            <!-- Course Information -->
            <div>
                <h2 class="text-sm title-font text-gray-400 tracking-widest">BOOK NAME</h2>
                <h2 class="text-3xl font-semibold mb-4">{{ $book->title }}</h2>
                <p class="text-gray-600 mb-4">{{ $book->body }}</p>

                <div class="flex items-center mb-4">

                    <a href="/books/{{ $book->slug }}/review">
                        <span class="text-green-500 font-semibold">⭐</span>
                        <span class="ml-2">{{ number_format($book->rating, 2, '.', ',') }} (1,234 ratings)</span>
                    </a>
                </div>

                <div class="flex items-center mb-4">
                    <span class="text-gray-600">Created by <a
                            href="/author/{{ $book->user->username }}/profile">{{ $book->user->name }}</a> </span>
                    <span class="ml-4">Last updated {{ $book->created_at->diffForHumans() }}</span>
                </div>

                <div class="flex items-center mb-4">
                    <span class="text-xl font-semibold text-blue-500"><i
                            class="fa-brands fa-gg-circle text-primary"></i> {{ $book->ggcoin }}</span>
                    <span class="ml-4 line-through text-gray-500"><i class="fa-brands fa-gg-circle text-primary"></i>
                        2000</span>
                    <span class="ml-4 text-green-500">50% off</span>
                </div>

                <div class="flex items-center gap-3">
                    @if (
                        !auth()->user()
                            ?->isBought($book))
                        <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Buy Now</button>
                    @else
                        <form action="/book/chapter/{{ $book->chapters[0]->slug }}/read" method="GET">
                            <button type="submit"
                                class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">
                                read
                            </button>
                        </form>
                    @endif

                    <form action="/books/{{ $book->slug }}/favourite" method="POST">
                        @csrf
                        @if (auth()->user()
                                ?->isFavourited($book))
                            <button type="submit" class="text-xl"><i
                                    class="fa-solid fa-heart text-red-500"></i></button>
                        @else
                            <button type="submit" class="text-xl"><i
                                    class="fa-regular fa-heart text-red-500 focus:outline-none focus:ring focus:ring-red-300 "></i></button>
                        @endif
                    </form>
                </div>


            </div>
        </div>
    </section>



    <div class="container mx-auto mt-5 px-10">
        <div class="flex flex-wrap items-start  gap-5 md:flex-col lg:flex-row">
            <div class="py-8 px-8 lg:w-[50%] w-[100%] md:flex-auto bg-white rounded-lg">
                <h4 class="mb-5">Chapters</h4>
                <ul class="flex flex-col gap-8">
                    @foreach ($book->chapters as $chapter)
                        <li class="flex justify-between items-start">
                            <a href="/book/chapter/{{ $chapter->slug }}/read">Chapter-{{ $chapter->chapter }}
                                {{ $chapter->title }}</a>
                            <span>{{ $chapter->created_at->diffForHumans() }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-col gap-5 lg:w-[40%]  flex-auto">
                <div class="p-2 rounded-lg bg-white">
                    <!-- Total Reader -->
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8  rounded-full flex items-center justify-center mr-2">
                            <i class="fa-solid fa-eye text-blue-400"></i>
                        </div>
                        <div class="flex gap-4 items-center">
                            <p class="text-sm font-semibold">Reader</p>
                            <p class="text-sm text-gray-600">2,500</p>
                        </div>
                    </div>


                    <!-- Quantity of Selling -->
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center mr-2">
                            <i class="fa-regular fa-star text-yellow-500"></i>
                        </div>
                        <div class="flex gap-4 items-center">
                            <p class="text-sm font-semibold">Votes</p>
                            <p class="text-sm text-gray-600">2,500</p>
                        </div>
                    </div>


                    <!-- Total View -->
                    <div class="flex items-center">
                        <a href="#" class="w-8 h-8  rounded-full flex items-center justify-center mr-2">
                            <i class="fa-regular fa-flag text-red-400"></i>
                        </a>

                        <div class="flex gap-4 items-center">
                            <p class="text-sm font-semibold">Report</p>
                        </div>
                    </div>

                </div>

                <div class="p-6 bg-gray-50 border-r-4 border-blue-500 rounded-lg">
                    <h2 class="text-2xl font-semibold mb-4">Introduction</h2>
                    <div class="flex items-center mb-4">

                        <p class="mb-3 text-gray-500 dark:text-gray-400">Track work across the enterprise through an
                            open,
                            collaborative platform. Link issues across Jira and ingest data from other software
                            development
                            tools,
                            so your IT support and operations teams have richer contextual information to rapidly
                            respond to
                            requests, incidents, and changes.</p>
                    </div>
                </div>


                <div class="p-6 bg-gray-50 border-l-4 border-blue-500 rounded-lg">
                    <h2 class="text-2xl font-semibold mb-4">About the Author</h2>
                    <div class="flex items-center mb-4">
                        <img src="{{ $book->user->imageUrl }}" alt="Author Avatar" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h3 class="text-xl font-semibold">{{ $book->user->name }}</h3>
                            <p class="text-gray-600">Bestselling author with a passion for storytelling. Lorem ipsum
                                dolor sit amet,
                                consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    @if (count($randomBooks) > 0)
        <div class="w-full px-12 rounded">

            <h2 class="text-2xl font-semibold mb-6">Related Books</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                @foreach ($randomBooks as $book)
                    <!-- Book Card 1 -->
                    <div class="bg-gray-200 p-4 rounded-md transition transform hover:scale-105">
                        <a href="/book-details/{{ $book->slug }}">
                            <img src="{{ $book->image }}" alt="Book 1"
                                class="w-full h-40 object-cover mb-4 rounded-md">
                            <h3 class="text-lg font-semibold mb-2">{{ $book->title }}</h3>
                            <p class="text-gray-600">Author-{{ $book->user->name }}</p>
                            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
                        </a>
                    </div>
                @endforeach

                <!-- Book Card 2 -->

                <!-- Add more book cards as needed -->

            </div>

        </div>
    @endif





    <x-price-model :book="$book" />
</x-home-layout>
