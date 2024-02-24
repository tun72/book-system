@php
    $i = 0;
@endphp
<div class="rated">
    <h3 class="text-2xl font-bold text-brand-700">Top Rated</h3>
    <div class="rated-items bg-[#F4F6F8]">
        <ul>
            @foreach ($books as $book)
                <a href="/book-details/{{ $book->slug }}">
                    <li>
                        <div class="rated-1">
                            <span class="small">{{ ++$i }}.</span>
                            <img src="{{ $book->image }}" alt="">
                            <div class="about-book">
                                <span class="small">{{ $book->title }}</span>
                                <span class="small">{{ $book->user?->name }}</span>
                            </div>
                        </div>
                        <div class="rated-2">
                            <span class="small">{{ $book->rating}}<i class="fas fa-star text-star-400"></i></span>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</div>
