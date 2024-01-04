<div>
    <div class="slide-bar slide-bar-1  bg-brand-50">
        <div class="side-nav flex flex-col">
            <div class="w-full mb-2 pl-3">
                <h4 class="text-brand-300 px-[1.3rem] py-4 text-sm">DISCOVER</h4>
                <ul>
                    <li><a href="/"><i class="fa-solid fa-house"></i>Home</a></li>

                    <li><a href="#"data-modal-target="crud-modal" data-modal-toggle="crud-modal"><i
                                class="fas fa-search"></i>Browse</a>
                    </li>
                    @auth
                        <li><a href="/user/{{ auth()->user()->username }}/purchased"><i
                                    class="fas fa-heart"></i>Purchased</a>
                        @endauth
                    </li>
                </ul>

            </div>

            <div class="w-full pl-3">
                <h4 class="text-brand-300 px-[1.3rem] py-4 text-base">LIBRARY</h4>
                <ul>
                    @auth
                        <li><a href="/user/{{ auth()->user()->username }}/readlist"><i
                                    class="fas fa-list-alt"></i>Readlists</a></li>
                    @endauth

                    <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#author"><i
                                class="fas fa-search"></i>Author</a></li>
                    </li>


                    <li><a href="#" data-modal-target="model-fav" data-modal-toggle="model-fav"><i
                                class="fas fa-star"></i>Favourites</a></li>
                </ul>
            </div>



            @auth
                @if (auth()->user()->role === 2)
                    <div class="pl-2 py-2 border-b-2 w-full border-brand-600">
                        <a href="/book/new-book" class="pl-[1.3rem]">New Book</a>
                    </div>
                @endif
            @endauth


            {{-- <div class="footer pl-2">
                    <a href="#" class="small pl-[1.3rem]">Copyright © 2023 ttm</a>
                </div> --}}


        </div>

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
</div>
