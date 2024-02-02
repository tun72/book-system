<x-home-layout>
    <div class="mx-auto">
        <h3 class="text-3xl mb-4">Popular Books</h3>
        <!-- Book Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Book Card 1 -->
            @foreach ($books as $book)
                <div class="rounded-md">
                    <a href="/book-details/{{ $book->slug}}">
                        <img src="{{ $book->image }}" alt="Book Cover 1" class="w-full h-40 object-cover mb-4 rounded-md">
                        <h3 class="text-lg font-semibold mb-2">{{ $book->title }}</h3>
                        <p class="text-gray-600 mb-2">Author: {{ $book->user->name }}</p></a>

                </div>
            @endforeach




            <!-- Add more book cards as needed -->

        </div>

    </div>
</x-home-layout>
