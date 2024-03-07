<x-user-layout>

    <section class="">

        <div class="w-full flex gap-10 items-start">
            <div class="w-[60%] flex flex-col gap-5">
                <div class="flex items-center justify-between mb-3">
                    <h1 class="text-2xl font-semibold text-gray-500">Notification</h1>
                    <form action="/noti/clear" method="POST">
                        @csrf
                        <button class="text-button-800 mt-3">clear</button>
                    </form>
                </div>
                @if (count($notifications) === 0)
                    <p class="text-xl">No notification 🧐</p>
                @else
                @foreach ($notifications as $noti)
                <div class="w-full shadow-md flex gap-4 px-[20px] py-2 bg-white">
                    <div class="w-[50px] h-[50px] rounded-full overflow-hidden"><img
                            src="{{ $noti->user->imageUrl }}" alt=""></div>
                    @php
                        $url1 = '#';
                        if ($noti->book_id) {
                            $url1 = '/book-details/' . $noti?->book?->slug;
                        } elseif ($noti->chapter_id) {
                            $url1 = '/book/chapter/' . $noti?->chapter?->slug . '/read';
                        }
                    @endphp
                    <a href="{{ $url1 }}">
                        <div class=" flex flex-col gap-1 text-lg text-gray-500 font-semibold">
                            <p class=""><span
                                    class="text-gray-700 me-3">{{ $noti->user->name }}</span>{{ $noti->about }}</p>
                            <div class="flex items-center gap-2">
                                <span><i class="fas fa-clock"></i></span>
                                <p>{{ $noti->created_at->diffForHumans() }}</p>
                            </div>
                            <p class=""> {{ $noti->comment?->body }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
                @endif
            </div>
            <div class="w-[30%] shadow-md px-3 py-2 rounded-sm bg-white">
                <div class="bg-blue-300 flex flex-col justify-center gap-3 items-center py-10 mb-3">
                    <h1 class="text-white font-semibold text-2xl">Who's missing out?</h1>
                    <h1 class="text-white font-semibold text-base">Invite them to Wattpad</h1>
                    <div class="w-[200px] h-[200px]">
                        <img src="https://png.pngtree.com/png-clipart/20230816/original/pngtree-cute-character-envelope-letter-paper-picture-image_7991250.png"
                            alt="" class="w-full h-full">
                    </div>
                    <form class="flex gap-2 w-full px-2 justify-center items-center"
                        action="/user/{{ auth()->user()->username }}/invite-mail" method="POST">
                        @csrf
                        <input type="email" placeholder="Email address" class="py-1 pl-3 w-[70%] rounded-sm"
                            name="email">
                        <div class="bg-gray-400 text-gray-50 px-4 py-1 flex justify-center items-center rounded-md">
                            <button href="#">Invite</button>
                        </div>
                    </form>
                </div>
                <div class="flex justify-between mb-2 items-center">
                    <div class="flex gap-3 items-center">
                        <span><i class="fa-brands fa-twitter text-3xl text-blue-300"></i></span>
                        <h1 class="text-lg  text-gray-500">Twitter</h1>
                    </div>

                    <div>
                        <span><i class="fa-solid fa-chevron-right text-xl text-gray-600"></i></span>
                    </div>

                </div>
                <div class="w-full h-[1px] bg-gray-300 mb-2"></div>

                <div class="flex justify-between mb-2 items-center">
                    <div class="flex gap-3 items-center">
                        <span><i class="fa-solid fa-envelope text-3xl"></i></span>
                        <h1 class="text-lg  text-gray-500">Email</h1>
                    </div>

                    <div>
                        <span><i class="fa-solid fa-chevron-right text-xl text-gray-600"></i></span>
                    </div>

                </div>
                <div class="w-full h-[1px] bg-gray-300"></div>
                <div class="text-gray-400 my-[15px]">
                    <p>We won't contact annyone without your consent</p>
                </div>
            </div>

        </div>


    </section>
</x-user-layout>
