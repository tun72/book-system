<x-author-layout>
    <div class="recommend mt-4">
        <h3 class="fs-4 text-primary mb-2"><i class="fas fa-bullhorn me-2"></i></i>Your Master Pieces</h3>
        <div class="recommend-books">
            <ul class="recommend-list">
                @foreach ($books as $book)
                    <li class="mb-3 text-center">
                        <a href="/" class="">
                            <div class="author-image mb-2">
                                <img src="{{ $book->image }}" alt="">
                            </div>
                            <div class="recommend-artical">
                                <div class="">
                                    <span class="name">{{ $book->title }}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <div> <a class="badge rounded-pill badge-info"
                                            href="/book/{{ $book->id }}/book-update">Edit</a></div>

                                    <form action="/book/{{ $book->id }}/book-delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="badge rounded-pill badge-danger border-0" type="submits">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</x-author-layout>
