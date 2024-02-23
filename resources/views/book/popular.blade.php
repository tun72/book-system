<x-home-layout>
    <div class="mx-auto">
        <h3 class="text-3xl mb-5 text-button-800 "><i class="fas fa-star me-2"></i>Popular Books</h3>
        <!-- Book Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 mb-5">
            <!-- Book Card 1 -->
            @foreach ($books as $book)
                <div class="flex gap-4" data-modal-target="default-modal-{{ $book->id }}"
                    data-modal-toggle="default-modal-{{ $book->id }}">
                    <div class="w-[142px] h-[221.88px] relative flex-grow-1 rounded-md overflow-hidden">
                        <img src="{{ $book->image }}" alt="" class="w-full h-full object-cover">
                        <div class="absolute top-0 left-0 text-white bg-brand-700 px-1">
                            <h1>#{{ $book->id }}</h1>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2  w-[50%] flex-auto">
                        <h1 class="text-base font-semibold"><a href="#">{{ $book->title }}</a></h1>

                        <h2 class="text-button-800"><a href="#">by {{ $book->user->name }}</a></h2>
                        <div class="flex gap-3 text-gray-400">
                            <div class="flex gap-2">
                                <span><i class="fa-regular fa-eye"></i></span>
                                <h1>{{ count($book->readers) }}</h1>
                            </div>
                            <div class="flex gap-2">
                                <span><i class="fa-solid fa-star text-star-400"></i></span>
                                <h1>{{ $book->rating }}</h1>
                            </div>
                            <div class="flex gap-2">
                                <span><i class="fa-solid fa-bars"></i></span>
                                <h1>{{ count($book->chapters) }}</h1>
                            </div>
                        </div>
                        <div class="">
                            <p class="line-clamp-2">{{ $book->body }}</p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <span class="w-fit px-2 py-1 bg-green-400 text-sm font-semibold text-white rounded-md">
                                {{ $book->status }}
                            </span>
                            @foreach ($book->genres as $gens)
                                <span
                                    class="w-fit px-2 py-1 bg-brand-100 text-sm font-semibold text-brand-800 rounded-md">
                                    {{ $gens->name }}
                                </span>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Add more book cards as needed -->

        </div>
        {{ $books->links('pagination::tailwind') }}

    </div>
</x-home-layout>
