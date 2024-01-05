<!-- Navbar -->
<header class="header  bg-brand-50">
    <nav class="nav px-5">
        <div class="flex items-center justify-center">
            <button
                class="slide-btn text-brand-500  hover:bg-brand-500 hover:text-brand-50 focus:outline-none  font-medium rounded-full text-lg p-2.5 text-center inline-flex items-center   me-6 mt-[0.15rem]">
                <i class="fa-solid fa-bars"></i>
            </button>
            <h3 class="text-dark">B<span class="text-primary">oo</span>k
            </h3>
        </div>


        <form action="/search-books/" method="GET" class="flex items-center gap-5 w-[25rem]">
            @if (request('genres'))
                <input type="hidden" name="genres" value="{{ request('genres') }}" />
            @endif

            @if (request('search'))
                <input type="hidden" name="search" value="{{ request('search') }}" />
            @endif

            <input type="text" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand-500 focus:border-brand-500 block w-full ps-10 p-2.5 outline-none"
                placeholder="Search branch name..." required name="search">
            <button data-ripple-light="true" class="bg-brand-500 py-2 px-2 rounded text-brand-50" id="search-addon">
                <i class="fas fa-search"></i>
            </button>

        </form>



        <div class="">

            @if (!auth()->user())
                <div class="d-flex align-items-center">
                    <a type="button" class="btn btn-outline-primary px-3 me-2" href="/login">
                        Login
                    </a>
                    <a type="button" class="btn btn-primary me-3" href="/register">
                        Sign up for free
                    </a>
                </div>
            @else
                <ul class="nav-list">
                    <li>
                        <a href="#" class="fs-4 text-dark"><i class="fas fa-bookmark"></i></a>
                    </li>
                    <li><a href="#" class="fs-4 text-dark"><i class="fas fa-bell"></i></a></li>
                    <li>
                        <button id="theme-toggle" type="button"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <div class="flex items-center user-div">
                            <img src="{{ auth()->user()->imageUrl }}" alt="" width="49px" height="49px"
                                class="rounded-full">
                            <div>
                                <a href="#" class="text-dark toggle-btn">&#x2BC6;</a>
                                <ul class="drop-down-form">
                                    <li><a href="#" class="text-dark"><i
                                                class="fa-brands fa-gg-circle text-brand-500 fs-5 me-1"></i>
                                            <span>{{ auth()->user()->ggcoin }}</span></a></li>

                                    <li><a href="/user-profile/{{ auth()->user()->username }}"
                                            class="text-dark">Profile</a></li>
                                    @if (auth()->user()->role === 1)
                                        <li><a href="#" class="text-dark">Dashboard</a></li>
                                    @endif

                                    @if (auth()->user()->role === 2)
                                        <li><a href="/author/dashboard" class="text-dark">Work Place</a></li>
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
            @endif
        </div>
    </nav>
</header>
