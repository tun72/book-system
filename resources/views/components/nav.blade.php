<!-- Navbar -->
<header class="header">
    <nav class="nav px-5 pb-1">
        <div class="flex items-center justify-center">
            <button
                class="slide-btn text-button-800  hover:bg-brand-500 hover:text-brand-50 focus:outline-none  font-medium rounded-full text-lg p-2.5 text-center inline-flex items-center   me-2 mt-[0.15rem]">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="flex items-center gap-3">
                <button type="button"
                    class="flex text-sm  bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img src="./img/logo-3.jpg" alt="" class="w-10 h-10 rounded-full">
                </button>
                <h3 class="font-semibold text-xl">Literary L<span class="text-primary text-2xl text-button-800">⚯</span>m</h3>
            </div>


        </div>


        <form action="/search-books/" method="GET" class="flex items-center gap-5 w-[25rem]">
            @if (request('genres'))
                <input type="hidden" name="genres" value="{{ request('genres') }}" />
            @endif

            @if (request('search'))
                <input type="hidden" name="search" value="{{ request('search') }}" />
            @endif

            <input type="text" id="simple-search" data-modal-target="search-modal" data-modal-toggle="search-modal"
                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand-500 focus:border-brand-500 block w-full ps-10 p-2.5 outline-none"
                placeholder="Search branch name..." required name="search" autocomplete="off">
            <button data-ripple-light="true" class="bg-button-800  py-2 px-2 rounded text-brand-50" id="search-addon">
                <i class="fas fa-search"></i>
            </button>

        </form>

        <div class="">
            @if (!auth()->user())
                <div class="flex items-center gap-4">
                    <a type="button" href="/login"
                        class="text-white bg-button-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</a>


                    <a type="button" href="/register"
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Sign
                        up for free</a>
                </div>
            @else
                <ul class="flex items-center gap-5 mr-7">
                    <li>
                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="relative mt-2 inline-flex items-center text-sm font-medium text-center text-gray-700 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 14 20">
                                <path
                                    d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                            </svg>

                            <div
                                class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                            </div>
                        </button>
                    </li>
                    <li>
                        <a href="#" class="fs-4 text-dark"><i class="fas fa-bookmark"></i></a>
                    </li>
                    {{-- <li>
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
                    </li> --}}
                    <li>
                        {{-- <div class="flex items-center user-div">
                            <img src="" alt="" width="49px" height="49px"
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
                                        
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        <button type="button"
                            class="flex text-sm  bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-10 h-10 rounded-full" src="{{ auth()->user()->imageUrl }}" alt="user photo" />
                        </button>
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 w-56 text-base list-none bg-white  divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                            id="dropdown">
                            <div class="py-3 px-4">
                                <span
                                    class="block text-sm font-semibold text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                                <span
                                    class="block text-sm text-gray-900 truncate dark:text-white">{{ auth()->user()->email }}</span>
                            </div>
                            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                                <li>
                                    <a href="/user-profile/{{ auth()->user()->username }}"
                                        class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                                        profile</a>
                                </li>
                                <li>
                                    <a href="/user/update-user"
                                        class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account
                                        settings</a>
                                </li>
                            </ul>
                            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                                <li>
                                    <a href="/user/{{ auth()->user()->username }}/purchased"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                            class="mr-2 w-5 h-5 text-gray-800" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Purchased</a>
                                </li>
                                <li>
                                    <a href="/user/{{ auth()->user()->username }}/readlist"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                            class="mr-2 w-5 h-5 text-gray-800" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                            </path>
                                        </svg>
                                        Readlist</a>
                                </li>
                                @if (auth()->user()->role === 2)
                                    <li><a href="/author/dashboard"
                                            class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                class="mr-2 w-5 h-5 text-gray-800" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                                </path>
                                            </svg>
                                            Work Place</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="/pricing-section"
                                        class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <span class="flex items-center">
                                            <svg aria-hidden="true"
                                                class="mr-2 w-5 h-5 text-primary-600 dark:text-primary-500"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ auth()->user()->ggcoin }} coins
                                        </span>
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                                <li>
                                    <form action="/logout" method="POST" class="col-10">
                                        @csrf
                                        <button type="submit" class="btn btn-dark px-3 me-2 col-10 mb-2">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </li>
                </ul>
            @endif
        </div>
    </nav>
</header>

<x-notification-component />
<x-search />
