<!-- Navbar -->
<header class="header border-solid border-b-2 border-gray-300 ">
    <nav class="flex justify-between px-5">
        <div class="flex items-center justify-center">
            <button
                class="slide-btn text-brand-500  hover:bg-brand-500 hover:text-brand-50 focus:outline-none  font-medium rounded-full text-lg p-2.5 text-center inline-flex items-center   me-6 mt-[0.15rem]">
                <i class="fa-solid fa-bars"></i>
            </button>
            <h3 class="text-dark">B<span class="text-primary">oo</span>k
            </h3>
        </div>
        <div class="">
            <ul class="nav-list">
                {{-- <li>
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </li> --}}
                <li>
                    <a type="button"
                        class="py-2.5 px-5 me-2  text-sm font-medium text-yellow-50 focus:outline-none bg-yellow-500 rounded-lg border border-gray-200 hover:bg-yellow-400  focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 cursor-pointer">New Book</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <img src="{{ auth()->user()->imageUrl }}" alt=""
                            class="rounded-full toggle-btn w-[3rem] h-[3rem]">
                        <div class="">
                            <ul class="drop-down-form py-4">
                                <li class="px-2"><a href="/user-profile/{{ auth()->user()->username }}"
                                        class="text-dark">Profile</a>
                                </li>
                                @if (auth()->user()->role === 1)
                                    <li class="px-2"><a href="#" class="text-dark">Dashboard</a></li>
                                @endif

                                @if (auth()->user()->role === 2)
                                    <li class="px-2"><a href="/author/dashboard" class="text-dark">Work Place</a></li>
                                @endif

                                <li>
                                    <form action="/logout" method="POST" class="col-10">
                                        @csrf
                                        <button type="submit" class="btn btn-dark px-3 me-2 col-10">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
