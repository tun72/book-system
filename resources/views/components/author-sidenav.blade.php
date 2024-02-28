<div>
    <div class="slide-bar slide-bar-1  bg-brand-50 shadow-2xl h-full">
        <div class="side-nav flex flex-col">
            <div class="flex flex-col items-center justify-center w-full my-5 gap-3">
                <img src="{{ auth()->user()->imageUrl }}" alt="" class="rounded-full w-[7rem] h-[7rem]">
                <p class="flex flex-col items-center">Your studio <span class="text-xs">{{ auth()->user()->name }}</span>
                </p>

            </div>
            <div class="w-full mb-2 pl-3">
                <ul>
                    <li>
                        <a href="/author/dashboard" class="text-lg items-center"><i class="fas fa-th-large text-lg"></i>
                            Dashboard</a>
                    </li>
                    <li>
                        <a href="/author/creation" class="text-lg items-center"><i class="fas fa-book text-lg"></i>
                            Content</a>
                    </li>
                    <li>
                        <a href="/author/{{ auth()->user()->id }}/comments" class="text-lg items-center"><i
                                class="fas fa-comment-dots text-lg"></i>
                            Comments</a>
                    </li>
                    <li>
                        <a href="/book/new-book" class="text-lg items-center"><i
                                class="fas fa-feather-alt text-lg"></i>write</a>
                    </li>
                    <li>
                        <a href="/author/notifications"><span class="relative inline-block">
                                <svg class="w-6 h-6 text-gray-700 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                                <span
                                    class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
                                {{-- <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span> --}}
                            </span>Notification</a>
                    </li>
                    <li>
                        <a href="/author/{{ auth()->user()->id }}/incomes" class="text-lg items-center"><i
                                class="fas fa-money-check-alt text-lg"></i>
                            Earn</a>
                    </li>
                    <li> <a href="/author/readers" class="text-lg items-center"><i
                                class="fas fa-feather-alt text-lg"></i>Followers</a></li>



                </ul>

            </div>

        </div>

    </div>
    <div class="slide-bar slide-bar-2 slide-bar-active slide-bar-hide bg-brand-50 mt-1">
        <div class="side-nav flex flex-col">

            <ul class="px-1">
                <li>
                    <a href="/author/dashboard" class="text-lg items-center"><i class="fas fa-th-large text-lg"></i></a>
                </li>
                <li>
                    <a href="/author/creation" class="text-lg items-center"><i class="fas fa-book text-lg"></i></a>
                </li>
                <li>
                    <a href="/book/new-book" class="text-lg items-center"><i class="fas fa-feather-alt text-lg"></i></a>
                </li>
                <li>
                    <a href="" class="text-lg items-center"><i class="fas fa-copyright text-lg"></i></a>
                </li>
                <li>
                    <a href="" class="text-lg items-center"><i class="fas fa-money-check-alt text-lg"></i></a>
                </li>
                <li>
                    <a href="" class="text-lg items-center"><i class="fas fa-cogs text-lg"></i></a>
                </li>
            </ul>

        </div>
    </div>
</div>
