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
                <img src="{{ $user->imageUrl }}" alt="">
            </div>
            <h1 class="text-white font-semibold text-xl">{{ $user->name }}</h1>
            <span class="text-white font-md">@ {{ $user->username }}</span>
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
                    <a href="/user-public/{{ $user->username }}">About</a>
                </li>
                <li class="font-semibold text-xl" style="cursor: pointer">
                    <a href="/user/following">Following</a>
                </li>
            </ul>
        </div>

    </div>

    <!-- About Start -->
    <div class="px-[20px]  w-[100%]  mb-10 ">
        @if (count($user->subscribe))
            <div class="w-[100%]  grid grid-cols-4 gap-3 ">
                <!-- 1st Card -->
                @foreach ($user->subscribe as $author)
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
                            @elseif(auth()->user()->id === $author->id)
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
                                    <p>Followed-You</p>
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
