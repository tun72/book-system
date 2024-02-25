<x-home-layout>
    @php
        $slug = $chapter->slug;
        $index = 0;

    @endphp
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:900i");

        .wrapper {
            display: flex;
            justify-content: center;
        }

        .cta {
            display: flex;
            padding: 10px 15px;
            text-decoration: none;
            font-family: "Poppins", sans-serif;
            font-size: 24px;
            color: white;
            background: #6225e6;
            transition: 1s;
            box-shadow: 6px 6px 0 black;
            transform: skewX(-15deg);
        }

        .cta:focus {
            outline: none;
        }

        .cta:hover {
            transition: 0.5s;
            box-shadow: 10px 10px 0 #fbc638;
        }

        .cta span:nth-child(2) {
            transition: 0.5s;
            margin-right: 0px;
        }

        .cta:hover span:nth-child(2) {
            transition: 0.5s;
            margin-right: 45px;
        }

        .cta span {
            transform: skewX(15deg);
        }

        .cta span:nth-child(2) {
            width: 20px;
            margin-left: 30px;
            position: relative;
            top: 12%;
        }

        /**************SVG****************/

        path.one {
            transition: 0.4s;
            transform: translateX(-60%);
        }

        path.two {
            transition: 0.5s;
            transform: translateX(-30%);
        }

        .cta:hover path.three {
            animation: color_anim 1s infinite 0.2s;
        }

        .cta:hover path.one {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.6s;
        }

        .cta:hover path.two {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.4s;
        }

        /* SVG animations */

        @keyframes color_anim {
            0% {
                fill: white;
            }

            50% {
                fill: #fbc638;
            }

            100% {
                fill: white;
            }
        }
    </style>

    @vite('resources/js/form.js')

    {{-- @dd($chapter->story) --}}
    <main class="p-5 bg-white dark:bg-gray-900 antialiased relative px-5">

        <article class="w-[100%] grid grid-cols-12 items-start gap-5">
            <div class="flex  bg-green-100 items-center justify-between col-span-3 row-span-3">

            </div>


            <div class="w-full flex  justify-between col-span-7 flex-col">
                <div>
                    <header class="not-format self-center">
                        <h1
                            class="mb-4 text-2xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                            {{ $chapter->title }}</h1>
                    </header>
                    <p class="leading-loose text-lg border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900 pt-4">
                        {!! $chapter->story !!}</p>
                </div>
            </div>



            <div class="col-span-2 px-3 pt-10">
                <button
                    class="text-white bg-blue-700 hover:bg-blue-800  focus:ring-4 focus:ring-blue-300  font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                    data-drawer-placement="right" aria-controls="drawer-right-example">
                    Choose Chapters
                </button>
            </div>

        </article>


        <div class="flex items-center justify-center mb-10 px-10">
            {{-- @if ($prevChapter)
                <a href="/book/chapter/{{ $prevChapter->slug }}/read" type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center self-end"><-
                        Prev Chapter </a>
            @endif --}}

            @if ($nextChapter)
                <div class="wrapper">
                    <a class="cta" href="/book/chapter/{{ $nextChapter->slug }}/read?complete=true">
                        <span>NEXT</span>
                        <span>
                            <svg width="40px" height="30px" viewBox="0 0 66 43" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path class="one"
                                        d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                    <path class="two"
                                        d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                    <path class="three"
                                        d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
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


</x-home-layout>
