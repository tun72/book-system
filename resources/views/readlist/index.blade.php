<x-home-layout>
    {{ $readlist->title }}
    @if (count($readlist->books))
        @foreach ($readlist->books as $book)
            {{ $book->title }}

            <form action="/readlist/book/{{ $book->slug }}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
        @endforeach
    @else
        <p>No Book Yet! Go Add Some</p>
    @endif
</x-home-layout>
