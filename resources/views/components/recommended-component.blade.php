<div class="recommend">
    <h3 class="text-3xl font-bold text-brand-700"><i class="fas fa-bullhorn me-2"></i></i>Recommended</h3>
    <div class="recommend-books">
        <ul class="grid grid-cols-3 gap-5">
            @foreach ($books as $book)
                <x-book :book="$book" />
            @endforeach
        </ul>
    </div>
</div>
