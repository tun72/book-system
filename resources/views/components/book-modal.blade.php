@props(['book', 'id'])
<div id="default-modal-{{ $id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-slate-200/20 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="border-4 border-white rounded-xl overflow-hidden">

                <div
                    class="flex xl:w-[630px] lg:w-[630px] md:w-[630px] w-[350px] xl:h-[400px] lg:h-[389px] md:h-[380px] h-[280px]">
                    <div class="w-[40%]">
                        <img src="{{ $book->image }}" alt="" class="w-full h-full">
                    </div>
                    <div
                        class="flex flex-col  w-[60%] xl:py-2 lg:py-2 md:py-2 py-0 pl-3 xl:gap-3 lg:gap-3 md:gap-3 gap-1 relative">
                        <div class="flex justify-between">
                            <p class="text-lg font-semibold">{{ $book->title }}</p>
                            <button type="button"
                                class="w-[30px] h-[30px] mt-1 hover:bg-gray-200 ease-linear flex justify-center items-center"
                                data-modal-hide="default-modal-{{ $id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>


                        <div class="flex gap-3 items-center">
                            <span><i class="fas fa-list-ul"></i></span>
                            <p class="text-sm">{{ count($book->chapters) }} chapter</p>
                            <div class="w-[90px] bg-slate-500 flex justify-center items-center rounded-2xl">
                                <p>{{ $book->status }}</p>
                            </div>
                        </div>

                        @if (auth()->user()?->isBought($book))
                            <div
                                class="w-full flex justify-between items-center px-[50px]  bg-slate-700 rounded-xl text-white">
                                <div class="w-[78%] flex border-r-2 py-2 gap-4">
                                    <span><i class="fa-solid fa-book"></i></span>
                                    <a href="/book/chapter/{{ $book->chapters[0]->slug }}/read">Start reading</a>
                                </div>
                                <div class="w-[8%] bg-white">

                                </div>

                                <div class="w-[10%] flex justify-center items-center cursor-pointer"
                                    data-modal-target="dropdown-example-{{ $id }}"
                                    data-modal-toggle="dropdown-example-{{ $id }}"><span><i
                                            class="fa-solid fa-plus"></i></span>
                                </div>

                            </div>
                        @elseif(auth()->user()?->isAuthorBook($book))
                            <div class="mt-3">
                                <a href="/book-details/{{ $book->slug }}"
                                    class="flex-auto text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    go
                                </a>
                            </div>
                        @else
                            <form action="/books/{{ $book->slug }}/buy" method="POST"
                                class="flex justify-between items-center gap-4">
                                @csrf
                                <span
                                    class="px-5 py-2.5 bg-yellow-100 text-gray-900  text-sm font-medium cursor-pointer dark:bg-yellow-900 dark:text-yellow-300 rounded-lg"><i
                                        class="fa-brands fa-gg-circle text-primary fs-5"></i>
                                    {{ $book->ggcoin - $book->discount }}
                                    @if ($book->discount > 0)
                                        <span
                                            class="ml-2 text-base font-normal text-gray-500 line-through dark:text-gray-400">{{ $book->ggcoin }}</span>
                                    @endif
                                </span>


                                <button type="submit"
                                    class="flex-auto text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Buy
                                    Now</button>


                            </form>
                        @endif


                        <x-read-list :book="$book" :id="$id" />
                        <div class="text-sm px-2 text-gray-500">
                            <p class="line-clamp-5">{{ $book->body }}</p>
                        </div>



                        <a class="flex gap-3 text-base font-semibold absolute bottom-[10px] right-[10px]"
                            href="/book-details/{{ $book->slug }}">
                            <p>More detail</p>
                            <span><i class="fa-solid fa-chevron-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
