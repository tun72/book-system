<div class="recommend">
    <h3 class="text-2xl font-bold text-brand-700">Recommendations</h3>
    <div class="recommend-books">
        <ul class="grid grid-cols-3 gap-x-10 gap-y-7">
            @foreach ($books as $book)
                <x-book :book="$book" />
            @endforeach
        </ul>
    </div>
</div>
