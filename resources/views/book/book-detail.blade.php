@php
    $reviews = $book
        ->reviews()
        ->latest()
        ->paginate(4);
    $index = 0;

    $random = ['warning', 'danger', 'info', 'success', 'secondary'];
@endphp
<x-home-layout>

    {{-- <div class="my-body">
        <x-book-sidenav />

    </div> --}}

    <div class="content">
        <div class="col-12 mt-5">
            <div class="col-lg-10 m-auto">
                <div class="d-flex align-content-center justify-content-center gap-5">
                    <div class="mr-lg-5 poster shadow">
                        <img src="{{ $book->image }}" alt="">
                    </div>
                    <div class="col-lg-9 col-sm-6 shadow p-4">
                        <h4 class="mb-2 fs-4 text-primary">{{ $book->title }}</h4>
                        <div class="mb-2">
                            @foreach ($book->genres as $gen)
                                <span class="badge rounded-pill badge-{{ $random[rand(0, 4)] }}">{{ $gen->name }}
                                </span>
                            @endforeach
                        </div>

                        <div class="ms-1">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $book->rating)
                                    <i class="fas fa-star  text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                        </div>



                        <p class="p-1">{{ $book->body }}</p>


                        @if (auth()->user())
                            <div class="d-flex gap-3">
                                @if (!auth()->user()->isBought($book))
                                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        <i
                                            class="fa-brands fa-gg-circle text-primary me-2 "></i><span>{{ $book->ggcoin }}</span>
                                    </button>
                                @else
                                    <form action="/book/chapter/{{ $book->chapters[0]->slug }}/read" method="GET">
                                        <button type="submit" class="btn btn-primary">
                                            read
                                        </button>
                                    </form>
                                @endif
                                <form action="/books/{{ $book->slug }}/favourite" method="POST">
                                    @csrf
                                    @if (auth()->user()->isFavourited($book))
                                        <button type="submit" class="btn btn-danger fs-7">Favourited</button>
                                    @else
                                        <button type="submit" class="btn btn-success fs-7">Add to
                                            Favourite</button>
                                    @endif
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-price-model :book="$book" />

</x-home-layout>




{{-- 

    <a href="/">home</a>
        <img src="{{ $book->image }}" alt="" class="img-thumbnail">
       



        

    

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
        
        
        
        
--}}
