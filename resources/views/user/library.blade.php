<x-home-layout>
    <style>
        .main {
            padding: 20px;
        }
    </style>
    <div class="w-full">
        <!-- Header -->
        <h1 class="text-4xl font-semibold mb-3">Library</h1>
        <!-- attributes -->
        <div class="flex gap-[40px]  border-t-[1px] border-b-[1px] cursor-pointer">
            <a href="/user/library">
                <h1 class="text-xl hover:font-bold border-b-[3px] border-button-800 py-[15px]">
                    Current Reads
                </h1>
            </a>
            <a href="/user/archive">
                <h1 class="text-xl hover:font-bold  py-[15px]">Archive</h1>
            </a>
        </div>
        <!-- private logo -->
        <div class="flex justify-end items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M384 200v-56a128 128 0 0 0-256 0v56H88v128c0 92.635 75.364 168 168 168s168-75.365 168-168V200Zm-224-56a96 96 0 0 1 192 0v56H160Zm232 184c0 74.99-61.01 136-136 136s-136-61.01-136-136v-96h272Z" />
            </svg>
            <span class="text-sm">Private</span>
        </div>
        <!-- grid 5 col -->
        <div class="grid grid-cols-5 gap-12">
            @foreach ($books as $book)
                @if (!$book->isArchive)
                    <div class="">
                        @php
                            $chapters = count($book->chapters);
                            $finish = $book->chapters->filter(function ($chapter) {
                                return $chapter['is_finish'];
                            });

                            $current = $book->chapters->where('is_finish', false)->first();
                            $percentage = (count($finish) / $chapters) * 100 . '%';
                        @endphp
                        <!-- for image -->
                        <div class="relative">
                            <img class="h-[250px] w-[90%] rounded-md object-cover object-center" src="{{ $book->image }}" alt="" />
                            <div
                                class="opacity-0 hover:opacity-100 duration-300 absolute inset-0 z-10 flex justify-center items-center text-white font-semibold bg-slate-200/20 backdrop-blur-sm">

                                <ul class="flex items-center flex-col gap-5">
                                    <li class="border border-gray-200 w-full flex justify-center px-2">
                                        <form action="/book/{{ $book->id }}/archive" method="POST">
                                            @csrf
                                            <button type="submit">Archive</button>
                                        </form>
                                    </li>
                                    <li class="border border-gray-200 w-full flex justify-center px-2"><a
                                            href="/book/chapter/{{ $current->slug }}/read">continue reading</a></li>
                                </ul>

                            </div>
                        </div>

                        <!-- for image end -->


                        <!-- Progress bar -->
                        <div class="py-[10px]">
                            <div class="w-[90%] bg-gray-300 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-orange-600 h-2.5 rounded-full" style="width: {{ $percentage }}"></div>
                            </div>
                        </div>
                        <!-- Progress bar end -->

                        <!-- Body -->
                        <div class="w-[90%] flex justify-center items-center gap-3">
                            <div class="">
                                <h1 class="text-xl font-semibold line-clamp-1">{{ $book->title }}</h1>
                                <span
                                    class="text-sm text-gray-400">{{ count($book->genres) ? $book->genres[0]->name : '' }}</span>
                            </div>
                           
                        </div>
                    </div>
                @endif
            @endforeach



        </div>
    </div>

</x-home-layout>
