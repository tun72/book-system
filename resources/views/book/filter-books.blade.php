<x-home-layout>

    @if (count($books) === 0)
        <p class="text-primary text-center mt-5 fs-3">No book found 😓</p>
    @else
        <div class="recommend mb-4">
            <h3 class="fs-4 text-primary"><i class="fas fa-bullhorn me-2"></i></i>{{ $title }}</h3>
            <div class="recommend-books">
                <ul class="recommend-list">
                    @foreach ($books as $book)
                        <x-book :book="$book" />
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</x-home-layout>
