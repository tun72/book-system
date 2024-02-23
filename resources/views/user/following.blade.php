<x-user-layout>
    @vite('resources/js/readlist.js')
    <style>
        .header {
            padding-bottom: 10px;
        }

        .main {
            padding: 0;
        }
    </style>


    <!-- Upper part     Starts -->
    <div
        class="w-[100%] bg-cover bg-center bg-no-repeat bg-[url('https://wallpapers.com/images/hd/beautiful-background-9eitvbn5p15z5rlu.jpg')] bg-gray-700 bg-blend-multiply">
        <!-- circles and infos        Start-->
        <div class="w-[100%] h-[350px] flex justify-center items-center flex-col">
            <!-- circle -->
            <div
                class="h-[100px] w-[100px] rounded-full outline-white overflow-hidden border border-[#2a685d] flex justify-center items-center mb-[20px] mt-[80px]">
                <img src="{{ auth()->user()->imageUrl }}" alt="">
            </div>
            <h1 class="text-white font-semibold text-xl">{{ auth()->user()->name }}</h1>
            <span class="text-white font-md">@ {{ auth()->user()->username }}</span>
            <!-- infos -->
            <div class="flex justify-center items-center gap-[30px] mt-[10px]">
                <div class="text-center">
                    <p class="text-white">{{ count(auth()->user()->books) }}</p>
                    <span class="text-white">Books</span>
                </div>
                <div class="text-center" style="cursor: pointer">
                    <p class="text-white">{{ count(auth()->user()->readLists) }}</p>
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
                    <a href="/user-profile/{{auth()->user()->username}}">About</a>
                </li>
                <li class="font-semibold text-xl" style="cursor: pointer">
                    <a href="/user/following">Following</a>
                </li>
            </ul>
        </div>
        <!-- tools -->
        <div class="flex justify-normal items-center gap-3">
            <!-- 1st item -->

            @if (auth()->user()->role)
                <div class="rounded-3xl flex border border-[black] items-center justify-normal relative"
                    style="cursor: pointer">
                    <!-- coin -->
                    {{-- <img class="h-[60px] w-[80px] translate-x-[-20px]" src="./imgs/coin (2).png" alt="" /> --}}
                    <i class="fa-brands fa-gg-circle text-primary text-[2.5rem] text-yellow-500 translate-x-[-1px]"></i>
                    <p class="mr-[30px] text-xl font-semibold">-</p>

                    <a href="/pricing-section"><svg style="border-left: 1px solid black"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M11 13H6q-.425 0-.712-.288T5 12q0-.425.288-.712T6 11h5V6q0-.425.288-.712T12 5q.425 0 .713.288T13 6v5h5q.425 0 .713.288T19 12q0 .425-.288.713T18 13h-5v5q0 .425-.288.713T12 19q-.425 0-.712-.288T11 18z" />
                        </svg>
                    </a>

                </div>
            @endif


            <!-- 2nd item -->
            <div class="flex gap-[5px]  w-[150px] justify-center items-center border border-[#eeeeee] rounded-xl"
                style="cursor: pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m10.135 21l-.362-2.892q-.479-.145-1.035-.454q-.557-.31-.948-.664l-2.667 1.135l-1.865-3.25l2.305-1.738q-.044-.272-.073-.56q-.028-.287-.028-.558q0-.252.028-.53t.073-.626L3.258 9.125l1.865-3.212L7.771 7.03q.448-.373.97-.673q.52-.3 1.013-.464L10.134 3h3.731l.362 2.912q.575.201 1.016.463q.442.262.909.654l2.725-1.116l1.865 3.212l-2.382 1.796q.082.31.092.568q.01.26.01.511q0 .233-.02.491q-.019.259-.088.626l2.344 1.758l-1.865 3.25l-2.681-1.154q-.467.392-.94.673q-.474.281-.985.444L13.865 21zm1.838-6.5q1.046 0 1.773-.727q.727-.727.727-1.773q0-1.046-.727-1.773q-.727-.727-1.773-.727q-1.052 0-1.776.727T9.473 12q0 1.046.724 1.773q.724.727 1.776.727" />
                </svg>
                <a href="/user/update-user">Edit Profile</a>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="px-[20px]  w-[100%]  mb-10 ">
        @if (count(auth()->user()->subscribe))
            <div class="w-[100%]  grid grid-cols-4 gap-3 ">
                <!-- 1st Card -->
                @foreach (auth()->user()->subscribe as $author)
                    <div class="h-[300px] w-[80%] rounded-xl overflow-hidden"
                        style="
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16),
              0 3px 6px rgba(0, 0, 0, 0.23);
          ">
                        <div class="h-[100px] w-[100%] flex justify-center items-center">
                            <img class="h-[100%] w-[100%]"
                                src="https://static.vecteezy.com/system/resources/previews/029/237/654/large_2x/fantasy-realm-of-nature-digital-art-illustration-generative-ai-photo.jpeg"
                                alt="" />
                        </div>
                        <div class="w-[100%] flex justify-center items-center">
                            <img class="h-[80px] w-[80px] rounded-full bg-[red] w-[100%] bg-[yellow] translate-y-[-65px] flex justify-center items-center"
                                src="{{ $author->user->imageUrl }}" alt="" class="w-full h-full" />
                        </div>
                        <h1 class="text-xl font-bold text-[#727275] text-center translate-y-[-60px]">
                            {{ $author->user->name }}
                        </h1>

                        <form action="/user/{{ $author->id }}/subscribe" method="POST">
                            @csrf
                            @if (auth()->user()->isSubscribed($author))
                                <button
                                    class="text-white flex justify-center items-center bg-[#00b2b2] py-2 px-10 ml-[30px] mr-[30px] translate-y-[-45px] rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 14 14">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="5" cy="2.75" r="2.25" />
                                            <path d="M4.5 12.5h-4V11A4.51 4.51 0 0 1 7 7m3.5.5v6m-3-3h6" />
                                        </g>
                                    </svg>
                                    <p>Followed</p>
                                </button>
                            @else
                                <button
                                    class="text-white flex justify-center items-center bg-[#00b2b2] py-2 px-10 ml-[30px] mr-[30px] translate-y-[-45px] rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 14 14">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="5" cy="2.75" r="2.25" />
                                            <path d="M4.5 12.5h-4V11A4.51 4.51 0 0 1 7 7m3.5.5v6m-3-3h6" />
                                        </g>
                                    </svg>
                                    <p>Follow</p>
                                </button>
                            @endif

                        </form>


                        <div class="flex justify-evenly items-center translate-y-[-30px]">
                            <div class="flex justify-center items-center flex-col">
                                <p>{{ count($author->user->books) }}</p>
                                <p>Books</p>
                            </div>
                            <div class="flex justify-evenly items-center flex-col">
                                <p>{{ count($author->user->readLists) }}</p>
                                <p>readlist</p>
                            </div>
                            <div class="flex justify-evenly items-center flex-col">
                                <p>{{ count($author->subscribers) }}</p>
                                <p>Followers</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="w-full flex items-center justify-center">
                <p>No Followed Author!</p>
            </div>
        @endif
    </div>



</x-user-layout>
