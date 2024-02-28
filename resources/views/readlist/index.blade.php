<x-home-layout>



    <div class="max-w-[68rem] mx-auto">
        <h3 class="text-3xl mb-6">My Readlist</h3>
        <div class="flex items-start gap-8 ">
            <div class="w-[40rem] ">
                <div class="h-[56vh] w-[18rem]">
                    <img src="{{ count($readlist->books) ? $readlist->books[0]->image : '' }}" alt=""
                        class="w-full h-full">
                </div>
                <div class="mt-3 flex flex-col gap-3 items-start" id="toggle-readlist">
                    <h5 class="text-3xl">{{ $readlist->title }}</h5>
                    <span>ReadingList . {{ count($readlist->books) }} books</span>
                    <button type="button"
                        class="text-white rounded-lg bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium  text-sm py-2.5 text-center mb-2 dark:focus:ring-blue-900 px-10">Edit</button>
                </div>
                <div class="mt-4  hidden" id="edit-toggle">
                    <div class="flex">
                        <form action="/readlist/{{ $readlist->id }}/edit" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="text" id="small-input" value="{{ $readlist->title }}" name="title"
                                class="block mb-4 w-[160%] p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <button type="submit"
                                class="text-white rounded-lg bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium  text-sm py-2.5 text-center mb-2 dark:focus:ring-blue-900 px-10">Done</button>
                        </form>

                        <form action="/readlist/{{ $readlist->id }}/delete" method="POST" class="mt-[3.1rem] -ml-5">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="readlist" id="" value="{{ $readlist->id }}">
                            <button type="submit"
                                class="text-white rounded-lg bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium  text-sm py-2.5 text-center mb-2 dark:focus:ring-blue-900 px-5">Delete
                                List</button>
                        </form>
                    </div>
                </div>
            </div>

            @if (count($readlist->books))
                <div class="bg-white p-2 rounded-lg">
                    @foreach ($readlist->books as $book)
                        <div class="flex gap-2" data-modal-target="default-modal-{{ $book->id }}"
                            data-modal-toggle="default-modal-{{ $book->id }}">
                            <div class="w-[84px] h-[140px] relative flex-grow-1">
                                <img src="{{ $book->image }}" alt="" class="w-full h-full">
                                <div class="absolute top-0 left-0 text-white bg-brand-700 px-1">
                                    <h1>#{{ $book->id }}</h1>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1  w-[50%] flex-auto">
                                <h1 class="text-dm font-semibold"><a href="/book-details/{{$book->slug}}">{{ $book->title }}</a></h1>
                                <h2 class="text-gray-400"><a href="#" class="text-sm">by
                                        {{ $book->user->name }}</a>
                                </h2>
                                <div class="flex gap-3 text-gray-400">
                                    <div class="flex gap-1">
                                        <span><i class="fa-regular fa-eye"></i></span>
                                        <h5 class="text-sm">{{ count($book->readers) }}</h5>
                                    </div>
                                    <div class="flex gap-1">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <h5 class="text-sm">{{ $book->rating }}</h5>
                                    </div>
                                    <div class="flex gap-1">
                                        <span><i class="fa-solid fa-bars"></i></span>
                                        <h5 class="text-sm">{{ count($book->chapters) }}</h5>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="line-clamp-1">{{ $book->body }}</p>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <span
                                        class="w-fit px-2 py-1 bg-lime-600 text-[0.70rem] font-semibold text-white rounded-md">
                                        {{ $book->status }}
                                    </span>
                                    @foreach ($book->genres as $gens)
                                        <span
                                            class="w-fit px-2 py-1 bg-brand-100 text-[0.70rem] font-semibold text-brand-800 rounded-md">
                                            {{ $gens->name }}
                                        </span>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        {{-- <form action="/readlist/book/{{ $book->slug }}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form> --}}
                    @endforeach
                </div>
            @else
                <div class="w-full h-[50vh] flex items-center justify-center">
                    <p>No Book Yet! Go Add Some</p>
                </div>
            @endif
        </div>


    </div>

</x-home-layout>
