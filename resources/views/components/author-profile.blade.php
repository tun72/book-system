<x-home-layout>
    <section class="px-5">
        <div>
            {{-- <div class="w-full h-44 rounded-xl overflow-hidden">
                <img src="{{ $author->user->background }}" alt="" class="w-full h-full object-cover object-center ">
            </div> --}}

            <div class="w-full mt-5 flex gap-5">
                <div class="w-[11.5rem] h-[11.5rem] rounded-full overflow-hidden">
                    <img src="{{ $author->user->imageUrl }}" alt="" class="w-full h-full">
                </div>
                <div class="md:px-10 px-1 flex flex-col gap-3 items-start">
                    <div class="flex items-center gap-3">
                        <h4 class="xl:text-3xl lg:text-5xl md:text-3xl font-bold">{{ $author->name }}</h4>
                        <span><i class="fa-solid fa-music"></i></span>
                    </div>
                    <div class=" lg:text-lg md:text-lg text-sm font-semibold text-gray-700">
                        <p>@ {{ $author->user->username }} . {{ count($author->subscribers) }} subscriber .
                            {{ count($author->user->books) }} books</p>
                    </div>
                    <div class="flex items-center gap-3 text-base font-semibold text-gray-700">
                        <p>Official Artist profile of {{ $author->user->name }}.</p>
                    </div>
                    <div class="text-base font-semibold xl:block lg:block md:block hidden">
                        <p><a href="#" class="text-blue-500">smarturl.it/rapunzelep</a> and 4 more links</p>
                    </div>



                    <form action="/user/{{ $author->id }}/subscribe" method="POST">
                        @csrf
                        @if (auth()->user()->isSubscribed($author))
                            <button type="submit"
                                class="px-2.5 py-2 bg-green-400 text-green-100 text-sm font-semibold text-center rounded-3xl ml-[-5px]">following
                                &check;</button>
                        @else
                            <button
                                class="px-2.5 py-2 bg-green-400 text-green-100 text-base font-semibold text-center rounded-3xl ml-[-7px] mt-[-4px]">+
                                follow</button>
                        @endif

                    </form>
                    <div>
                        <a href="#"></a>
                    </div>
                </div>
            </div>

            <div class=" mt-5 flex items-center ">
                <ul
                    class="flex xl:gap-14 lg:gap-14 md:gap-11 gap-4 text-base md:text-lg text-gray-700 border-gray-600 border-b-2  w-full pl-4">
                    <li class="mb-3">
                        <a href="/author/{{ $author->user->username }}/profile"
                            class=" hover:underline underline-offset-4 decoration-gray-600 decoration-4 active:decoration-gray-600 active:decoration-4">Home</a>
                    </li>
                    <li>
                        <a href="/author/{{ $author->user->username }}/books"
                            class="hover:underline underline-offset-4 decoration-gray-600 decoration-4 active:decoration-gray-600 active:decoration-4">Books</a>
                    </li>
                </ul>
            </div>
        </div>
        {{ $slot }}
    </section>


</x-home-layout>
