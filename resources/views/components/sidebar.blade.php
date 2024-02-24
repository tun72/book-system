<div class="slide-bar slide-bar-2   h-full border-r-1 border-gray-100">
    <aside class="side-nav flex flex-col">
        <div class="w-full mb-2 pl-3">
            <h4 class="text-brand-300 px-[1.3rem] py-4 text-sm">DISCOVER</h4>

            <ul>
                <li class="{{ request()->routeIs('home') ? 'bg-[#9b9b9b7a]' : '' }}"><a href="/"><i
                            class="fa-solid fa-house"></i>Home</a></li>

                <li><a href="#" data-modal-target="browse-modal" data-modal-toggle="browse-modal"><i
                            class="fas fa-search browse"></i>Browse</a>
                </li>
                @auth
                    <li class="{{ request()->routeIs('purchased') ? 'bg-[#9b9b9b7a]' : '' }}"><a
                            href="/user/{{ auth()->user()->username }}/purchased">
                            <i class="fas fa-heart"></i>Purchased</a>
                    @endauth
                </li>
            </ul>

        </div>

        <div class="w-full pl-3 mb-3">
            <h4 class="text-brand-300 px-[1.3rem] py-4 text-base">LIBRARY</h4>
            <ul>
                @auth
                    <li class="{{ request()->routeIs('readlist') ? 'bg-[#9b9b9b7a]' : '' }}"><a href="/user/{{ auth()->user()->username }}/readlist"><svg class="w-5 h-5 text-gray-900"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                </path>
                            </svg>Readlists</a>
                    </li>
                @endauth

                <li><a href="/user/library" data-mdb-toggle="modal" data-mdb-target="#author"><i
                            class="fas fa-book-reader"></i>Library</a></li>
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

        {{-- <div class="footer pl-2">
                    <a href="#" class="small pl-[1.3rem]">Copyright © 2023 ttm</a>
                </div> --}}
    </aside>

</div>



<div class="slide-bar slide-bar-1 slide-bar-active  slide-bar-hide  mt-1">
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

<x-browse-component />
