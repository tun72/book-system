<x-home-layout>
    @vite('resources/js/readlist.js')



    <!-- Upper part     Starts -->
    <div
        class="w-[100%] bg-cover bg-center bg-no-repeat bg-[url('https://wallpapers.com/images/hd/beautiful-background-9eitvbn5p15z5rlu.jpg')] bg-gray-700 bg-blend-multiply">
        <!-- circles and infos        Start-->
        <div class="w-[100%] h-[350px] flex justify-center items-center flex-col">
            <!-- circle -->
            <div
                class="h-[100px] w-[100px] rounded-full outline-white overflow-hidden border border-[#2a685d] flex justify-center items-center mb-[20px] mt-[80px]">
                <img src="{{ $user->imageUrl }}" alt="">
            </div>
            <h1 class="text-white font-semibold text-xl">{{ $user->name }}</h1>
            <span class="text-white font-md">@ {{ $user->username }}
                ({{ auth()->user()->role !== 0 ? ($user->role === 2 ? 'author' : 'user') : '' }})</span>
            <!-- infos -->
            <div class="flex justify-center items-center gap-[30px] mt-[10px]">
                <div class="text-center">
                    <p class="text-white">{{ count($user->books) }}</p>
                    <span class="text-white">Books</span>
                </div>
                <div class="text-center" style="cursor: pointer">
                    <p class="text-white">{{ count($user->readLists) }}</p>
                    <span class="text-white">Reading List</span>
                </div>
                <div class="text-center">
                    <p class="text-white">0</p>
                    <span class="text-white">Followers</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Nav -->
    <div class="px-[100px] w-[100%] mt-4 flex justify-between items-center mb-5">
        <!-- nav items -->
        <div class="">
            <ul class="flex justify-normal gap-[30px] items-center">
                <li class="font-semibold text-xl" style="cursor: pointer">
                    <a href="/user-profile/{{ $user->username }}">About</a>
                </li>
                <li class="font-semibold text-xl" style="cursor: pointer">
                    <a href="/user-public/{{ $user->username }}/following">Following</a>
                </li>
            </ul>
        </div>
        <!-- tools -->

        <div class="flex justify-normal items-center gap-3">

            <form action="/user/{{ $user->id }}/subscribe" method="POST">
                @csrf
                @if (auth()->user()->isSubscribed($user))
                    <button
                        class="flex gap-[5px]  w-[150px] justify-center items-center border border-[#eeeeee] rounded-xl"
                        style="cursor: pointer">
                        <i class="fas fa-user-plus me-1"></i>
                        <a href="/user/update-user">Followed</a>
                    </button>
                @else
                    <button
                        class="flex gap-[5px]  w-[150px] justify-center items-center border border-[#eeeeee] rounded-xl"
                        style="cursor: pointer">
                        <i class="fas fa-user-plus me-1"></i>
                        <a href="/user/update-user">Followed</a>
                    </button>
                @endif

            </form>


        </div>
    </div>

    <!-- About Start -->
    <div class="px-[20px]  w-[100%] flex gap-[30px] mb-10 items-start">
        <!-- first card -->
        <!-- first part -->
        <div class="basis-[30%] rounded-lg bg-white"
            style="
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
                  0 1px 2px rgba(0, 0, 0, 0.24);
              ">
            @if ($user->role !== 1)
                {{-- @dd($user->role); --}}
                @if ($user->role === 0)

                    @if ($user->reader->about === '')
                        <p class="w-[100%] text-sm text-center pt-[10px] font-bold">
                            Help people get to know you
                        </p>
                        <a href="/user/update-user" class="flex justify-center items-center w-[100%] mt-[10px]">
                            <button class="h-[40px] w-[140px] bg-[#ff6122] rounded-lg text-white text-md font-bold">
                                Verify
                            </button>
                        </a>
                    @else
                        <p class="w-[100%] text-md px-[10px] pt-[10px]">
                            {{ $user->reader->about }}
                        </p>
                    @endif
                @else
                    @if ($user->author->about === '')
                        <p class="w-[100%] text-sm text-center pt-[10px] font-bold">
                            Help people get to know you
                        </p>
                        <a href="/user/update-user" class="flex justify-center items-center w-[100%] mt-[10px]">
                            <button class="h-[40px] w-[140px] bg-[#ff6122] rounded-lg text-white text-md font-bold">
                                Verify
                            </button>
                        </a>
                    @else
                        <p class="w-[100%] text-md px-[10px] pt-[10px]">
                            {{ $user->author->about }}
                        </p>
                    @endif

                @endif

            @endif
            <div class="mt-[10px] px-[10px]">
                <span class="font-sm font-semibold">Joined</span><span
                    class="font-sm text-light">{{ $user->created_at->diffForHumans() }}</span>
            </div>
            <!-- middle part -->
            <div class="h-[1px] bg-gray-300 w-[100%] mt-[10px] mb-[10px]"></div>
            <div class="px-[10px]">
                <span>Following</span>
                @if (count($user->subscribe))
                    <div class="flex gap-[10px] mt-[10px]">
                        @foreach ($user->subscribe as $author)
                            <a href="/author/{{ $author->user->username }}/profile"
                                class="h-[40px] w-[40px] rounded-full bg-[yellow] bg-center bg-cover bg-no-repeat overflow-hidden">
                                <img src="{{ $author->user->imageUrl }}" alt="" class="w-full h-full">
                            </a>
                        @endforeach
                    </div>
                @else
                    <p>Not Yet!</p>
                @endif
                <div class="h-[1px] bg-gray-300 w-[100%] mt-[10px] mb-[10px]"></div>
            </div>

            <!-- last part  -->
            <div class="px-[10px] w-[100%] pb-5">
                <span class="text-md font-semibold">SHARE PROFILE</span>
                <div class="flex gap-[10px] mt-[10px]">
                    <div class="h-[40px] w-[40px] rounded-full flex justify-center items-center bg-[blue]">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="-7 -2 24 24">
                            <path fill="currentColor"
                                d="M2.046 3.865v2.748H.032v3.36h2.014v9.986H6.18V9.974h2.775s.26-1.611.386-3.373H6.197V4.303c0-.343.45-.805.896-.805h2.254V0H6.283c-4.34 0-4.237 3.363-4.237 3.865" />
                        </svg>
                    </div>
                    <div class="h-[40px] w-[40px] rounded-full flex justify-center items-center bg-[#55acee]">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M0 0h24v24H0z" />
                                <path fill="currentColor"
                                    d="M14.058 3.41c-1.807.767-2.995 2.453-3.056 4.38L11 7.972l-.243-.023C8.365 7.68 6.259 6.437 4.813 4.418a1 1 0 0 0-1.685.092l-.097.186l-.049.099c-.719 1.485-1.19 3.29-1.017 5.203l.03.273c.283 2.263 1.5 4.215 3.779 5.679l.173.107l-.081.043c-1.315.663-2.518.952-3.827.9c-1.056-.04-1.446 1.372-.518 1.878c3.598 1.961 7.461 2.566 10.792 1.6c4.06-1.18 7.152-4.223 8.335-8.433l.127-.495c.238-.993.372-2.006.401-3.024l.003-.332l.393-.779l.44-.862l.214-.434l.118-.247c.265-.565.456-1.033.574-1.43l.014-.056l.008-.018c.22-.593-.166-1.358-.941-1.358l-.122.007a.997.997 0 0 0-.231.057l-.086.038a7.46 7.46 0 0 1-.88.36l-.356.115l-.271.08l-.772.214c-1.336-1.118-3.144-1.254-5.012-.554l-.211.084z" />
                            </g>
                        </svg>
                    </div>
                    <div class="h-[40px] w-[40px] rounded-full flex justify-center items-center bg-[red]">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M8.617 13.227C8.091 15.981 7.45 18.621 5.549 20c-.586-4.162.861-7.287 1.534-10.605c-1.147-1.93.138-5.812 2.555-4.855c2.975 1.176-2.576 7.172 1.15 7.922c3.891.781 5.479-6.75 3.066-9.199C10.369-.275 3.708 3.18 4.528 8.245c.199 1.238 1.478 1.613.511 3.322c-2.231-.494-2.897-2.254-2.811-4.6c.138-3.84 3.449-6.527 6.771-6.9c4.201-.471 8.144 1.543 8.689 5.494c.613 4.461-1.896 9.293-6.389 8.945c-1.218-.095-1.728-.699-2.682-1.279" />
                        </svg>
                    </div>
                    <div class="h-[40px] w-[40px] rounded-full flex justify-center items-center bg-[#35465c]">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="11.72" height="24"
                            viewBox="0 0 616.059 1000">
                            <path fill="currentColor"
                                d="M345.603 0v252.756h237.3v156.983h-237.3v256.442c0 57.96 3.061 95.177 9.218 111.653c6.122 16.446 17.571 29.584 34.251 39.414c22.126 13.261 47.413 19.907 75.914 19.907c50.608 0 100.978-16.476 151.073-49.398V945.47c-42.746 20.124-81.441 34.283-116.056 42.382c-34.653 8.099-72.119 12.149-112.384 12.149c-45.694 0-86.108-5.782-121.238-17.312c-35.128-11.561-65.082-28.037-89.897-49.366c-24.817-21.392-42.016-44.111-51.587-68.192c-9.583-24.051-14.374-58.949-14.374-104.639V409.739H0V268.224c39.276-12.766 72.958-31.048 100.94-54.899c28.025-23.815 50.493-52.44 67.432-85.855C185.335 94.085 196.997 51.58 203.37.001h142.232" />
                        </svg>
                    </div>
                    <div class="h-[40px] w-[40px] rounded-full flex justify-center items-center bg-[#ff6122]">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2 20V4h20v16zm10-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second part -->
        <div class="flex-auto h-[100%] rounded-xl  bg-white"
            style="
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
                  0 1px 2px rgba(0, 0, 0, 0.24);
              ">
            <!-- head -->
            <div class="w-[100%] mt-[10px] px-[2rem]  flex justify-between items-center">
                <h1 class="text-2xl font-semibold">{{ count($user->readLists) }} Reading List</h1>
                <div class="flex gap-[5px]" style="cursor: pointer">
                    {{-- <a href="#" data-modal-target="readlist-modal" data-modal-toggle="readlist-modal"><svg
                            class="text-[#6f6f6f]" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                        </svg>
                    </a>


                    <a href="/user/{{ auth()->user()->username }}/readlist"><svg class="text-[#6f6f6f]"
                            xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10.125 22q-.375 0-.65-.25t-.325-.625l-.3-2.325q-.325-.125-.612-.3t-.563-.375l-2.175.9q-.35.15-.7.038t-.55-.438L2.4 15.4q-.2-.325-.125-.7t.375-.6l1.875-1.425Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L2.65 9.9q-.3-.225-.375-.6t.125-.7l1.85-3.225q.2-.325.55-.437t.7.037l2.175.9q.275-.2.575-.375t.6-.3l.3-2.325q.05-.375.325-.625t.65-.25h3.75q.375 0 .65.25t.325.625l.3 2.325q.325.125.613.3t.562.375l2.175-.9q.35-.15.7-.038t.55.438L21.6 8.6q.2.325.125.7t-.375.6l-1.875 1.425q.025.175.025.338v.674q0 .163-.05.338l1.875 1.425q.3.225.375.6t-.125.7l-1.85 3.2q-.2.325-.562.45t-.713-.025l-2.125-.9q-.275.2-.575.375t-.6.3l-.3 2.325q-.05.375-.325.625t-.65.25zm1.925-6.5q1.45 0 2.475-1.025T15.55 12q0-1.45-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12q0 1.45 1.013 2.475T12.05 15.5" />
                        </svg>
                    </a> --}}
                </div>
            </div>
            <div class="h-[1px] w-[100%] bg-gray-300 mt-[10px] mb-[10px] px-[10px]"></div>
            <!-- username's list Header -->

            @foreach ($user->readLists as $readlist)
                @if (count($readlist->books) && !$readlist->private)
                    <div class="px-[2rem] mt-[10px]">
                        <a href="" class="flex mb-[10px] mt-[10px]">
                            <h1 class="text-2xl font-semibold">{{ $readlist->title }}</h1>

                        </a>
                        <span class="text-sm text-light">Reading List .
                            {{ count($readlist->books) ? count($readlist->books) : 0 }} Books</span>
                    </div>
                    @php

                        $index = 0;
                    @endphp
                    <!-- List begin -->
                    <div class="w-[100%] px-[2rem] mt-[10px]  pb-[2rem] flex items-center gap-10">
                        @foreach ($readlist->books as $book)
                            <!-- first list  -->

                            <a href="#"
                                data-modal-target="default-modal-{{ $readlist->id }}-{{ $book->id }}"
                                data-modal-toggle="default-modal-{{ $readlist->id }}-{{ $book->id }}"
                                class="w-[20%]">
                                <div class="">
                                    <img class="h-[250px] w-[100%] mb-[10px] object-cover" src="{{ $book->image }}"
                                        alt="" />
                                    <h1 class="text-md font-semibold">{{ $book->title }}</h1>
                                    <div class="flex items-center gap-3 mt-[3px]">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class="text-sm text-light">{{ $book->rating }}K</span>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M3 19v-2.077h2.077V19zm4.846 0v-2.077H21V19zM3 13.038v-2.076h2.077v2.076zm4.846 0v-2.076H21v2.076zM3 7.077V5h2.077v2.077zm4.846 0V5H21v2.077z" />
                                            </svg>
                                            <span class="text-sm text-light">{{ count($book->chapters) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @php
                                $index = $readlist->id . '-' . $book->id;
                            @endphp
                            <x-book-modal :book="$book" :id="$index++" />
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div id="readlist-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full bg-slate-200/20 backdrop-blur-sm">
        <div class="relative p-4 w-full max-w-[40rem] max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Reading List
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="readlist-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="/readlist/new" method="POST">

                        <div>
                            @csrf
                            <label for="readlist"
                                class="block mb-5 text-sm font-medium text-gray-900 dark:text-white">Give
                                your Reading List a name. It helps to be specific.</label>
                            <input type="text" name="title" id="readlist"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="e.g.Best Horror Books" required>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                            List</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


</x-home-layout>
