<x-home-layout>
    <h2>Reviews and Rating</h2>

    <form action="/books/{{ $book->slug }}/review" method="POST">
        @csrf
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <input type="number" name="rating">
        <button type="submit">Submit</button>
    </form>

    <div>
        @foreach ($reviews as $review)
            <h3>{{ $review->user->name }}</h3>
            <p>{{ $review->rating }}</p>
            <p>{{ $review->body }}</p>




            <p>{{ count($review->likes) }} likes</p>
            @auth
                @if (!$review->isLiked(auth()->user()))
                    <form action="/reviews/{{ $review->id }}/like" method="POST">
                        @csrf
                        <button type="submit">Like</button>
                    </form>
                @else
                    <form action="/reviews/{{ $review->id }}/unlike" method="POST">
                        @csrf
                        <button type="submit">Liked</button>
                    </form>
                @endif
            @else
                <form action="#" method="POST">
                    @csrf
                    <button type="submit">Like</button>
                </form>
            @endauth

            <form action="/reviews/{{ $review->id }}/comment" method="POST">
                @csrf
                <input type="text" name="body" id="">
                <button type="submit">comment</button>
            </form>

            <div class="pl-10">
                @foreach ($review->comments as $comment)
                    <div class="bg-red-100 mb-3">
                        <h1>{{ $comment->user->name }}</h1>
                        <span>{{ $comment->user->id === $book->user->id ? 'Owner' : '' }}</span>
                        <span>{{ $comment->user->id === auth()->user()->id ? 'You' : '' }}</span>
           
                        <p>{{ $comment->body }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach


    </div>
</x-home-layout>
