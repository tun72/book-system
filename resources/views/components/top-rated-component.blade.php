@php
    $i = 0;
@endphp
<div class="rated">
    <h3 class="text-2xl font-bold text-brand-700 mb-6"><i class="fas fa-star me-2"></i>Top Rated</h3>
    <div class="rated-items mt-4">
        <ul>
            @foreach ($books as $book)
                <li>
                    <div class="rated-1">
                        <span class="small">{{ ++$i }}.</span>
                        <img src="{{ $book->image }}" alt="">
                        <div class="about-book">
                            <span class="small">{{ $book->title }}</span>
                            <span class="small">{{ $book->user->name }}</span>
                        </div>
                    </div>
                    <div class="rated-2">
                        <span class="small">{{ $book->rating }}⭐</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
