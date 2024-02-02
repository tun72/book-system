<div class="slide-bar slide-bar-1  bg-brand-50  shadow-2xl h-full">
    <aside class="side-nav flex flex-col">
        <div class="w-full mb-2 pl-3">
            <h4 class="text-brand-300 px-[1.3rem] py-4 text-sm">DISCOVER</h4>
            <ul>
                <li><a href="/"><i class="fa-solid fa-house"></i>Home</a></li>

                <li><a href="#" data-modal-target="crud-modal" data-modal-toggle="crud-modal"><i
                            class="fas fa-search"></i>Browse</a>
                </li>
                @auth
                    <li><a href="/user/{{ auth()->user()->username }}/purchased"><i class="fas fa-heart"></i>Purchased</a>
                    @endauth
                </li>
            </ul>

        </div>

        <div class="w-full pl-3 mb-3">
            <h4 class="text-brand-300 px-[1.3rem] py-4 text-base">LIBRARY</h4>
            <ul>
                @auth
                    <li><a href="/user/{{ auth()->user()->username }}/readlist"><i class="fas fa-list-alt"></i>Readlists</a>
                    </li>
                @endauth

                <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#author"><i
                            class="fas fa-book-reader"></i>Current Read</a></li>
                </li>


                <li><a href="#" data-modal-target="model-fav" data-modal-toggle="model-fav"><i
                            class="fas fa-star"></i>Favourites</a></li>

            </ul>
        </div>

        @auth
            <div class="w-full pl-3">
                <h4 class="text-brand-300 px-[1.3rem] py-4 text-base">Subscriptions</h4>
                <button type="button"
                    class="flex items-center gap-4 pl-[1.2rem] text-base text-gray-900 transition duration-75 rounded-lg group-hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa-solid fa-user"></i>
                    <span class="flex-1  text-left rtl:text-right whitespace-nowrap">Authors</span>
                    <svg class="w-3 h-3 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    @foreach (auth()->user()->subscribe as $author)
                        <li class="flex items-center gap-3">
                            <img src="{{ $author->user->imageUrl }}" alt="" class="w-[30px] h-[30px] rounded-full">
                            <a href="#"
                                class="flex items-center w-full  text-gray-900 transition duration-75 rounded-lg">{{ $author->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endauth



        <div class="w-full pl-3">
            <h4 class="text-brand-300 px-[1.3rem] py-4 text-base">Explore</h4>
            <ul>
                <li><a href="/book/trends" data-mdb-toggle="modal" data-mdb-target="#author"><i
                            class="fa-solid fa-fire"></i>Trends</a></li>
                </li>
                <li><a href="/book/populars" data-mdb-toggle="modal" data-mdb-target="#author"><i
                            class="fa-solid fa-star"></i>Popular</a></li>
                </li>
                <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#author"><i
                            class="fa-regular fa-circle-question"></i>Help</a></li>
                </li>

                <li><a href="/user/feedback" data-mdb-toggle="modal" data-mdb-target="#author"><i
                            class="fa-solid fa-message"></i>Sent Feedback</a></li>
                </li>
            </ul>
        </div>




        @auth
            @if (auth()->user()->role === 2)
                <div class="pl-2 py-2 border-b-2 w-full items-center">
                    {{-- <a href="/book/new-book" class="pl-[1.3rem]">New Book</a> --}}
                    <a type="button" href="/book/new-book"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">New
                        Book</a>
                </div>
            @endif
        @endauth


        {{-- <div class="footer pl-2">
                    <a href="#" class="small pl-[1.3rem]">Copyright © 2023 ttm</a>
                </div> --}}
    </aside>

</div>



<div class="slide-bar slide-bar-2 slide-bar-active slide-bar-hide bg-brand-50 mt-1">
    <div class="side-nav flex flex-col">

        <ul class="px-1">
            <li><a href="/"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#browse"><i
                        class="fas fa-search"></i>Browse</a>
            </li>
            @auth
                <li><a href="/user/{{ auth()->user()->username }}/purchased"><i class="fas fa-heart"></i>Purchased</a>
                @endauth
            </li>
        </ul>

    </div>
</div>
