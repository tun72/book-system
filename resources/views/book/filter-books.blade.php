<x-home-layout>
    @vite('resources/js/readlist.js')
    @if (count($books) === 0)
        <p class="text-primary text-center mt-5 fs-3">No book found 😓</p>
    @else
        <section class="w-full container">
            <h1 class="text-2xl font-semibold mb-5">Filtered Books</h1>


            <!-- show book section end -->

            {{-- <div class="w-[78vw] h-[1px] bg-gray-200 mt-[40px]"></div> --}}

            <!-- tag section start -->
            <div class="px-4 py-5 border border-gray-300 bg-white shadow-sm rounded-lg mb-10">
                <h1 class="text-sm font-medium">Refine by tag:</h1>

                <div class="flex flex-col gap-1 mt-3">
                    <div class="flex gap-2 flex-wrap">
                        @foreach ($genres as $gen)
                            @php
                                $arr = explode(',', request('genres'));
                            @endphp
                            <div
                                class="text-[0.85rem]  py-1 px-2 rounded-2xl justify-center items-center flex gap-2 border-[1px] border-gray-300 {{ in_array($gen->slug, $arr) ? 'bg-gray-400' : '' }}">

                                @if (in_array($gen->slug, $arr))
                                    @php
                                        $test = $gen->slug;
                                        $arr = array_filter($arr, function ($it) use ($test) {
                                            return $it !== $test;
                                        });
                                    @endphp
                                    <a href="/search-books/?genres={{ join(',', $arr) }}"
                                        class="text-[0.85rem]">{{ $gen->name }}</a>
                                @else
                                    <a href="/search-books/?genres={{ $gen->slug }}{{ request('genres') ? ',' . request('genres') : '' }}"
                                        class="text-[0.85rem]">{{ $gen->name }}</a>
                                @endif
                                <span><i class="fa-solid fa-plus"></i></span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>



            <!-- tag section end -->
            <!-- blog section start -->



            <section class="px-4 py-5 border border-gray-300 bg-white shadow-xl rounded-lg">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-semibold text-button-800">{{ count($books )}} books</h1>
                    
                </div>
                <div class="w-full h-[1px] bg-gray-200 mt-5 mb-4"></div>
                <div class="grid grid-cols-2 gap-7">
                    @foreach ($books as $book)
                        <div class="flex gap-4" data-modal-target="default-modal-{{ $book->id }}"
                            data-modal-toggle="default-modal-{{ $book->id }}">
                            <div class="w-[142px] h-[221.88px] relative flex-grow-1 overflow-hidden rounded-lg">
                                <img src="{{ $book->image }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute top-0 left-0 text-white bg-brand-700 px-1">
                                    <h1>#{{$book->id}}</h1>
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
                                    <span
                                        class="w-fit px-2 py-1 bg-lime-600 text-sm font-semibold text-white rounded-md">
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

           

            <!-- blog section end -->



        </section>


        <!-- choice section end -->
    @endif
</x-home-layout>
