<x-home-layout>
    @php
        $slug = $chapter->slug;
        $index = 0;

    @endphp


    @vite('resources/js/form.js')

    {{-- @dd($chapter->story) --}}

    <main class="pb-16 pt-5 lg:pb-24 bg-white dark:bg-gray-900 antialiased relative px-5">
        <div class="flex items-start justify-between px-4 gap-20 flex-wrap">

            <article
                class="w-[20rem] flex-auto format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format self-center">
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        Chapter {{ $chapter->chapter }}</h1>
                    <h3
                        class="mb-4 text-2xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-2xl dark:text-white">
                        {{ $chapter->title }}</h3>
                </header>
                <p
                    class="leading-loose text-lg mb-10 border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900 pt-4">
                    {!! $chapter->story !!}</p>

                <div class="flex items-center  justify-end"><button type="button"
                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center self-end">Next
                        Chapter -></button></div>

                <section class="not-format" id="user-comment">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
                    </div>
                    <form class="mb-6" action="/chapter/{{ $chapter->id }}/comment" method="POST">
                        @csrf
                        <div
                            class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                            <label for="comment" class="sr-only">Your comment</label>
                            <textarea id="comment" rows="6" name="body"
                                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                placeholder="Write a comment..." required></textarea>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Post comment
                        </button>
                    </form>

                    @foreach ($chapter->comments as $comment)
                        @php
                            $user = $comment->user;
                        @endphp
                        <article
                            class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p
                                        class="inline-flex items-center mr-3 font-semibold text-sm text-gray-900 dark:text-white">
                                        <img class="mr-2 w-6 h-6 rounded-full" src="{{ $user->imageUrl }}"
                                            alt="Helene Engels">{{ $user->name }}
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-06-23"
                                            title="June 23rd, 2022">{{ $comment->created_at }}</time></p>
                                </div>

                            </footer>

                            <p class="comment edit-comment" data-id="{{ $index }}">{{ $comment->body }}</p>

                            <form action="/comments/{{ $comment->id }}/edit" method="POST" class="hidden editForm">
                                @csrf
                                @method('PATCH')
                                <textarea id="message" rows="4" name="body"
                                    class="block p-2.5 mb-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $comment->body }}</textarea>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>

                                <button type="button" data-id="{{ $index }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 close-comment">Cancel</button>
                            </form>


                            <form class="flex items-center mt-4 space-x-4"
                                action="/comment/{{ $comment->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="flex items-center font-medium text-sm text-gray-500  dark:text-gray-400">
                                    <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                    </svg>
                                    delete
                                </button>
                            </form>
                        </article>
                        @php
                            $index++;
                        @endphp
                    @endforeach
                </section>
            </article>

            <div class=" flex flex-col gap-10 pt-[4rem]">
                <div
                    class=" inline-block w-64 text-sm text-gray-500  bg-white border border-gray-200 rounded-lg shadow-sm  dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                    <div class="p-3">
                        <div class="flex items-center justify-between mb-2">
                            <a href="#">
                                <img class="w-10 h-10 rounded-full" src="{{ $book->user->imageUrl }}" alt="Jese Leos">
                            </a>
                            <div>
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Follow</button>
                            </div>
                        </div>
                        <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                            <a href="#">{{ $book->user->name }}</a>
                        </p>
                        <p class="mb-3 text-sm font-normal">
                            <a href="#" class="hover:underline">@ {{ $book->user->username }}</a>
                        </p>
                        {{-- <p class="mb-4 text-sm">Open-source contributor. Building <a href="#"
                                class="text-blue-600 dark:text-blue-500 hover:underline">flowbite.com</a>.</p> --}}
                        <ul class="flex text-sm">
                            <li>
                                <a href="#" class="hover:underline">
                                    <span
                                        class="font-semibold text-gray-900 dark:text-white">{{ count($book->user->subscribe) }}</span>
                                    <span>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl mb-2">Chapters</h3>
                    <ul class="max-w-md  dark:divide-gray-700  border border-gray-200  flex flex-col">
                        @foreach ($book->chapters as $chapter)
                            <a href="/book/chapter/{{ $chapter->slug }}/read">
                                <li class=" hover:bg-gray-400 cursor-pointer px-4 py-2">
                                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                        <div class="flex-1 min-w-0">
                                            Chapter-{{ $chapter->chapter }}
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            {{ $chapter->title }}
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>

    {{-- <aside aria-label="Related articles" class="py-8 lg:py-24  dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Our first office</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
                        changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-blue-600 dark:text-blue-500 hover:no-underline">
                        Read in 2 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png"
                            class="mb-5 rounded-lg" alt="Image 2">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Enterprise design tips</a>
                    </h2>
                    <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
                        changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-blue-600 dark:text-blue-500 hover:no-underline">
                        Read in 12 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png"
                            class="mb-5 rounded-lg" alt="Image 3">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">We partnered with Google</a>
                    </h2>
                    <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
                        changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-blue-600 dark:text-blue-500 hover:no-underline">
                        Read in 8 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png"
                            class="mb-5 rounded-lg" alt="Image 4">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Our first project with React</a>
                    </h2>
                    <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
                        changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-blue-600 dark:text-blue-500 hover:no-underline">
                        Read in 4 minutes
                    </a>
                </article>
            </div>
        </div>
    </aside> --}}
</x-home-layout>
