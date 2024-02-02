<x-home-layout>
    @if (count($books) === 0)
        <p class="text-primary text-center mt-5 fs-3">No book found 😓</p>
    @else
        {{-- <div class="recommend mb-4">
            <h3 class="fs-4 text-primary"><i class="fas fa-bullhorn me-2"></i></i>{{ $title }}</h3>
            <div class="recommend-books">
                <ul class="recommend-list">
                    
                        <x-book :book="$book" />
                    
                </ul>
            </div>
        </div> --}}
        {{-- <section class="flex items-center  font-poppins dark:bg-gray-800">
            <div class="justify-center flex-1 max-w-6xl  mx-auto text-left py-5">
                <div class="text-start mb-3 flex items-center justify-between">
                    <h4 class="text-3xl font-bold capitalize dark:text-white">Filtered Books</h4>
                    <a href="#" class="mr-2 hover:bg-white transition-all w-10 h-10 flex items-center justify-center rounded-lg hover:shadow-lg"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25" />
                        </svg></a>
                </div>
                @foreach ($books as $book)
                    <div class="grid grid-cols-1 bg-white dark:bg-gray-900  mb-6 lg:grid-cols-[1fr,70%]  gap-4 ">
                        <div>
                            <img src="{{ $book->image }}" alt=""
                                class="object-cover w-full rounded-md h-80 lg:h-44">
                        </div>
                        <div class="px-4 py-4 lg:px-0">
                            <a href="#"
                                class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                                {{ $book->ggcoin }} coins</a>
                            <a href="#">
                                <h2
                                    class="mt-3 mb-3 text-xl font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400">
                                    {{ $book->title }}</h2>
                            </a>
                            <p class="mb-3 text-sm text-gray-500 dark:text-gray-400">
                                {{ $book->body }}
                            </p>
                            <span
                                class="text-xs font-medium text-gray-700 dark:text-gray-400">{{ $book->created_at }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </section> --}}

        <section class="w-full container px-10">
            <h1 class="text-3xl font-semibold">Adventure Stories</h1>

            <div class="mt-[40px]">
                <h1 class="text-2xl font-semibold">Hottest Book Originals</h1>
                <h1 class="text-lg text-gray-400">Read the stories we love</h1>
            </div>

            <!-- show book section start -->

            <div class="flex mt-3 gap-4">
                @foreach ($books as $book)
                    <div class="flex flex-col gap-4 items-start">
                        <div class="w-[15rem] object-cover object-center rounded-lg overflow-hidden">
                            <img src="{{ $book->image }}" alt="" class="w-full max-h-[20rem]">
                        </div>
                        <h1 class="text-sm font-semibold  rounded-2xl  bg-gray-200 px-4 py-1">
                            {{ $book->title }}
                        </h1>
                    </div>
                @endforeach
                {{-- flex justify-center items-center --}}



            </div>

            <!-- show book section end -->

            <div class="w-[78vw] h-[1px] bg-gray-200 mt-[40px]"></div>

            <!-- tag section start -->

            <div class="px-[10px] mt-[20px] border-[1px] py-[20px] shadow-xl ">
                <h1 class="text-lg font-medium">Refine by tag:</h1>

                <div class="flex flex-col gap-1 mt-3">
                    <div class="flex gap-2 flex-wrap">
                        @foreach ($genres as $gen)
                            @php
                                $arr = explode(',', request('genres'));
                            @endphp
                            <div
                                class="text-sm  py-1 px-2 rounded-2xl justify-center items-center flex gap-2 border-[1px] border-gray-300 {{ in_array($gen->slug, $arr) ? 'bg-gray-400' : '' }}">

                                @if (in_array($gen->slug, $arr))
                                    @php
                                        $test = $gen->slug;
                                        $arr = array_filter($arr, function ($it) use ($test){
                                            return $it !== $test;
                                        });
                                    @endphp
                                    <a href="/search-books/?genres={{ join(',', $arr) }}"
                                        class="">{{ $gen->name }}</a>
                                @else
                                    <a href="/search-books/?genres={{ $gen->slug }}{{ request('genres') ? ',' . request('genres') : '' }}"
                                        class="">{{ $gen->name }}</a>
                                @endif
                                <span><i class="fa-solid fa-plus"></i></span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>



            <!-- tag section end -->
            <!-- blog section start -->
            <section class="mt-[20px] py-[10px]">

                <div class="flex justify-between">
                    <h1 class="text-lg font-semibold">1.2K stories</h1>
                    <div class="text-lg font-semibold">
                        <h1>Sort by : Hot <span><i class="fa-solid fa-angle-down"></i> </span></h1>
                    </div>
                </div>
                <div class="w-full h-[1px] bg-gray-200 mt-5"></div>
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($books as $book)
                        <div class="flex gap-4">
                            <div class="w-[142px] h-[221.88px] relative flex-grow-1">
                                <img src="{{ $book->image }}" alt="" class="w-full h-full">
                                <div class="absolute top-0 left-0 text-white bg-brand-700 px-1">
                                    <h1>#1</h1>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1  w-[50%] flex-auto">
                                <h1 class="text-base font-semibold"><a href="#">{{ $book->title }}</a></h1>

                                <h1 class="text-gray-400"><a href="#">by {{ $book->user->name }}</a></h1>
                                <div class="flex gap-3 text-gray-400">
                                    <div class="flex gap-1">
                                        <span><i class="fa-regular fa-eye"></i></span>
                                        <h1>471K</h1>
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
                                    <p>{{ $book->body }}</p>
                                </div>
                                <div class="flex gap-2">
                                    <div
                                        class="w-fit px-2 py-1 bg-brand-600 text-sm font-semibold text-white rounded-md">
                                        <h1>Complete</h1>
                                    </div>
                                    <div class="w-fit px-3 py-1  text-sm font-semibold  rounded-xl bg-gray-200">
                                        <h1>delta</h1>
                                    </div>
                                    <div class="w-fit px-3 py-1  text-sm font-semibold bg-gray-200  rounded-xl">
                                        <h1>bullet</h1>
                                    </div>
                                    <div class="w-fit px-3 py-1  text-sm font-semibold  bg-gray-200  rounded-xl">
                                        <h1>danger </h1>
                                    </div>
                                    <div class="text-sm text-gray-500 font-semibold">
                                        <h1>+7 more</h1>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </section>


            <!-- blog section end -->



        </section>






        <!-- choice section end -->
    @endif
</x-home-layout>
