<!-- Navbar -->
<header class="header border-b-1 border-gray-100">
    <nav class="nav px-5 pb-1">
        <div class="flex items-center justify-center">
            <button
                class="slide-btn text-button-800  hover:bg-button-800 hover:text-brand-50 focus:outline-none  font-medium rounded-full text-lg p-2.5 text-center inline-flex items-center   me-2 mt-[0.15rem]">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="flex items-center gap-3">
                <button type="button"
                    class="flex text-sm  bg-gray-100 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img src="{{ asset('/img/logo.svg') }}" alt="" class="w-12 h-12">
                </button>
                <h3 class="font-semibold text-xl">Literary L<span
                        class="text-primary text-2xl text-button-800">⚯</span>m</h3>
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
                <ul class="flex items-center gap-3 mr-8">
                    <li>
                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="relative mt-2 inline-flex items-center text-sm font-medium text-center text-gray-700 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 14 20">
                                <path
                                    d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                            </svg>

                            @if (count(auth()->user()->notifications) > 0)
                                <div
                                    class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                                </div>
                            @endif

                        </button>
                    </li>
                    <li>
                        <div class="rounded-3xl flex border border-[black] items-center justify-normal relative gap-2 px-[0.25rem]"
                            style="cursor: pointer">
                            <!-- coin -->
                            {{-- <img class="h-[60px] w-[80px] translate-x-[-20px]" src="./imgs/coin (2).png" alt="" /> --}}
                            <i class="fa-brands fa-gg-circle text-primary text-3xl text-button-800"></i>
                            <p class="text-base font-semibold">{{ auth()->user()->ggcoin }}</p>



                        </div>
                    </li>


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
                            @if (auth()->user()->role === 1)
                                <li><a href="/dashboard"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <i class="fa-solid fa-chart-line mr-2 w-5 h-5 text-gray-800"></i>

                                        Dashboard</a>
                                </li>
                            @endif

                            @if (auth()->user()->role === 2)
                                <li><a href="/author/dashboard"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i
                                            class="fa-solid fa-pen-nib me-3"></i>
                                        Work Place</a>
                                </li>
                            @endif
                            <li>
                                <a href="/pricing-section"
                                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <span class="flex items-center">
                                        <i
                                            class="fa-brands fa-gg-circle text-primary fs-5 mr-3 text-base  text-primary-600 dark:text-primary-500"></i>

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
