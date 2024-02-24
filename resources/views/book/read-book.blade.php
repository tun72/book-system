<x-home-layout>
    @php
        $slug = $chapter->slug;
        $index = 0;

    @endphp

    @vite('resources/js/form.js')

    {{-- @dd($chapter->story) --}}
    <main class="pb-5 pt-5  bg-white dark:bg-gray-900 antialiased relative px-5">
        <div class="flex items-start justify-between gap-20 flex-wrap">
            <article
                class="w-[20rem] flex-auto format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <div class="flex items-center justify-between">
                    <header class="not-format self-center">
                        <h1
                            class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                            Chapter {{ $chapter->chapter }}</h1>
                        <h3
                            class="mb-4 text-2xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-2xl dark:text-white">
                            {{ $chapter->title }}</h3>
                    </header>


                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                        data-drawer-placement="right" aria-controls="drawer-right-example">
                        Choose Chapters
                    </button>
                </div>

        </div>
        <p class="leading-loose text-lg mb-10 border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900 pt-4">
            {!! $chapter->story !!}</p>

        <div class="flex items-center  justify-between mb-5">

            @if ($prevChapter)
                <a href="/book/chapter/{{ $prevChapter->slug }}/read" type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center self-end"><-
                        Prev Chapter </a>
            @endif

            @if ($nextChapter)
                <a href="/book/chapter/{{ $nextChapter->slug }}/read?complete=true" type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center self-end">Next
                    Chapter ->
                </a>
            @endif




        </div>

        <section class="not-format" id="user-comment">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comment
                    ({{ count($chapter->comments) }})</h2>
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
                <article class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center gap-3">
                            <p
                                class="inline-flex items-center mr-3 font-semibold text-sm text-gray-900 dark:text-white">
                                <img class="mr-2 w-6 h-6 rounded-full" src="{{ $user->imageUrl }}"
                                    alt="Helene Engels">{{ $user->name }}
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-06-23"
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

                    <form class="flex items-center mt-2" action="/comment/{{ $comment->id }}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="flex items-center font-medium text-sm text-red-500  dark:text-red-400">
                            <i class="fas fa-trash-alt me-2"></i> delete
                        </button>
                    </form>

                </article>
                @php
                    $index++;
                @endphp
            @endforeach
        </section>
        </article>
        </div>
    </main>

    <!-- drawer component -->
    <div id="drawer-right-example"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">

        <h2 class="text-lg">All Chapters</h2>
        <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        <div class="h-[10rem] w-[10rem] rounded-lg overflow-hidden mx-auto mt-5 mb-5">
            <img src="{{ $book->image }}" altp="" class="w-full h-full">
        </div>

        <h2 class="text-center text-lg mb-5">{{ $book->title }}</h2>

        {{-- <img class="mask mask-heart" src="https://daisyui.com/images/stock/photo-1567653418876-5bb0e566e1c2.jpg" /> --}}
        <ul class="flex flex-col gap-2">
            @foreach ($book->chapters as $chap)
                <a href="/book/chapter/{{ $chap->slug }}/read">
                    <li class=" hover:bg-slate-200 cursor-pointer rounded-md  {{ $chap->id === $chapter->id ? 'bg-slate-200' : '' }} {{ $chap->is_finish ? 'text-green-500' : '' }} "
                        aria-selected="true">
                        <div class="flex items-center p-1 justify-between">
                            <span class="min-w-0 me-3">
                                Chapter-{{ $chap->chapter }} <span> {{ $chap->title }}</span>
                            </span>
                            <span class="inline-flex items-center text-sm font-semibold text-gray-900 dark:text-white">
                                @if ($chap->is_finish)
                                    <i class="fas fa-check-circle text-green-400"></i>
                                @endif
                            </span>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>

        <div
            class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[-1]  justify-center items-center w-full h-full max-h-full bg-slate-200/20 backdrop-blur-sm">
        </div>
    </div>









    {{-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="currentColor" viewBox="0 0 20 20">
        <path fill="currentColor"
            d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z" />
        <path fill="#fff"
            d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z" />
    </svg>
    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 21 21">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z" />
    </svg> --}}






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
