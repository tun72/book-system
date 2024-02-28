<x-author-profile :author="$author">

    <section class="px-4 py-5 border border-gray-300 bg-white shadow-xl rounded-lg mt-5">
        <div class="flex justify-between items-center">
            <h1 class="text-lg font-semibold text-button-800">New books</h1>
        </div>
        <div class="w-full h-[1px] bg-gray-200 mt-5 mb-4"></div>
        <div class="grid grid-cols-2 gap-7">
            @foreach ($books as $book)
                <div class="flex gap-4" data-modal-target="default-modal-{{ $book->id }}"
                    data-modal-toggle="default-modal-{{ $book->id }}">
                    <div class="w-[142px] h-[221.88px] relative flex-grow-1 overflow-hidden rounded-lg">
                        <img src="{{ $book->image }}" alt="" class="w-full h-full object-cover">
                        <div class="absolute top-0 left-0 text-white bg-brand-700 px-1">
                            <h1>#{{ $book->id }}</h1>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1  w-[50%] flex-auto">
                        <h1 class="text-base font-semibold"><a href="#">{{ $book->title }}</a></h1>

                        <h2 class="text-gray-400"><a href="#">by {{ $book->user->name }}</a></h2>
                        <div class="flex gap-3 text-gray-400">
                            <div class="flex gap-1">
                                <span><i class="fa-regular fa-eye"></i></span>
                                <h1>{{ count($book->readers) }}</h1>
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-star"></i></span>
                                <h1>{{ $book->rating }}</h1>
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-bars"></i></span>
                                <h1>{{ count($book->chapters) }}</h1>
                            </div>
                        </div>
                        <div class="">
                            <p class="line-clamp-2">{{ $book->body }}</p>
                        </div>
                        <div class="flex gap-2 items-center flex-wrap">
                            <span class="w-fit px-2 py-1 bg-lime-600 text-sm font-semibold text-white rounded-md">
                                {{ $book->status }}
                            </span>
                            @foreach ($book->genres as $gens)
                                <span
                                    class="w-fit px-2 py-1 bg-brand-100 text-sm font-semibold text-brand-800 rounded-md">
                                    {{ $gens->name }}
                                </span>
                            @endforeach

                        </div>
                    </div>
                </div>
                <x-book-modal :book="$book" :id="$book->id" />
            @endforeach

        </div>

    </section>
</x-author-profile>
