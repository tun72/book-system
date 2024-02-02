<x-author-profile :author="$author">
    <div class="mx-auto mt-5">
        <!-- Book Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Book Card 1 -->
            @foreach ($author->user->books as $book)
                <div class="rounded-md">
                    <img src="{{ $book->image }}" alt="Book Cover 1" class="w-full h-40 object-cover mb-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">{{ $book->title }}</h3>
                    <p class="text-gray-600 mb-2">Author: {{ $book->user->name }}</p>
    
                </div>
            @endforeach




            <!-- Add more book cards as needed -->

        </div>

    </div>
</x-author-profile>
