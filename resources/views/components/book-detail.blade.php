@php
    $reviews = $book
        ->reviews()
        ->latest()
        ->paginate(4);
    $index = 0;
@endphp
<x-layout>
    <div class="content" style="width: 100%; height: 97vh">
        <a href="/">home</a>
        <img src="{{ $book->image }}" alt="" class="img-thumbnail">
        <p>{{ $book->title }}</p>
        <p>{{ $book->body }}</p>

        @foreach ($book->genres as $gen)
            <span class="bg-success me-3">{{ $gen->name }} </span>
        @endforeach

        @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $book->rating)
                <i class="fas fa-star"></i>
            @else
                <i class="far fa-star"></i>
            @endif
        @endfor

        @if (auth()->user())
            <form action="/books/{{ $book->slug }}/favourite" method="POST">
                @csrf
                @if (auth()->user()->isFavourited($book))
                    <button type="submit" class="btn btn-danger">Favourited</button>
                @else
                    <button type="submit" class="btn btn-success">Add to
                        Favourite</button>
                @endif
            </form>

            @if (!auth()->user()->isBought($book))
                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#price">
                    <i class="fa-brands fa-gg-circle text-primary me-2"></i>1000
                </button>
            @else
                <form action="/book/chapter/{{$book->chapters[0]->slug}}/read" method="GET">
                    <button type="submit" class="btn btn-primary">
                        read
                    </button>
                </form>
            @endif


        @endif


        @foreach ($book->chapters as $chapter)
            <div class="col-9 mx-auto">
                <div class="col-12 bg-secondary" data-mdb-toggle="collapse" href="#collapseExample{{ ++$index }}"
                    role="button" aria-expanded="false" aria-controls="collapseExample">
                    Chapter {{ $index }}
                </div>
                <!-- Collapsed content -->
                <div class="collapse bg-light shadow" id="collapseExample{{ $index }}">
                    <div class="p-2">
                        <p>{{ $chapter->title }}</p>
                        <p>{{ $chapter->intro }}</p>
                    </div>
                </div>
            </div>
        @endforeach

        <form action="/books/{{ $book->slug }}/review" class="col-3 mt-4" method="POST">
            @csrf
            <input type="text" class="form-control" name="body" placeholder="Review">
            Rating <input type="number" name="rating" id="rating" max="5" min="0"> ⭐
            <button class="btn btn-success" type="submit">Submit</button>
        </form>

        @foreach ($reviews as $review)
            <div class="border col-4">
                <p>{{ $review->user->name }}</p>
                <p>{{ $review->body }} </p>
                <p>{{ $review->rating }}</p>
            </div>
        @endforeach
    </div>

    <x-price-model :book="$book" />

</x-layout>
