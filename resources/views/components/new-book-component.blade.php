<div class="recommend mb-4">
    <h3 class="text-lg font-bold"><i class="fas fa-bullhorn me-2"></i></i>New Book</h3>
    <div class="recommend-books">
        <ul class="recommend-list">
            @foreach ($books as $book)
                <x-book :book="$book" />
            @endforeach
        </ul>
    </div>
</div>
