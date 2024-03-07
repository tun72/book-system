<x-author-layout>
    @if (count($books))
        <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 mb-5 ">
            <h3 class="text-3xl font-bold dark:text-white">All Books</h3>

            <div class="flex gap-2 items-center">
                <form action="/author/creation" method="GET">
                    <input type="text" id="table-search-users" name="search"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search books">
                </form>

                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    type="button">
                    <span class="sr-only">Action button</span>
                    Action
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownAction"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                    <form action="/book/book-delete" method="POST" class="py-2 delete-form">
                        @csrf
                        @method('DELETE')
                        <button
                            class="block w-full px-4 py-2  text-sm text-red-700 hover:bg-red-100 dark:hover:bg-red-600 dark:text-red-200 dark:hover:text-white"
                            type="submits">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white mb-3">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="all-check w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Chapters
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IsPublished
                        </th>

                        <th scope="col" class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="book-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        value="{{ $book->id }}">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>

                                </div>
                            </td>
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-12 h-12 rounded" src="{{ $book->image }}" alt="Jese image">
                                <div class="ps-3">
                                    <a class="text-base font-semibold"
                                        href="/author/book/{{ $book->id }}/detail">{{ $book->title }}</a>
                                    <div class="font-normal text-gray-500">{{ $book->slug }}</div>
                                </div>
                            </th>

                            <td class="px-6 py-4">
                                {{ $book->created_at->diffForHumans() }}
                            </td>

                            <td class="px-6 py-4">

                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-blue-300">{{ $book->status }}</span>

                            </td>
                            <td class="px-6 py-4">
                                {{ $book->ggcoin }} coins
                            </td>
                            <td class="px-6 py-4">

                                {{ count($book->chapters) }} Chapter
                            </td>



                            <td class="px-6 py-4">

                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $book->isPublished ? 'Published' : 'UnPublished' }}</span>

                            </td>
                            <td class="px-6 py-4">
                                <!-- Modal toggle -->
                                <a href="/book/{{ $book->id }}/book-update"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @else
        <div class="mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <p class="mb-4 text-3xl tracking-tight font-bold text-button-800 md:text-4xl dark:text-white">🔎 No Books
                    Found 😵‍💫</p>
                <div class="w-[80%] h-[50%] mx-auto">

                    <svg class="animated" id="freepik_stories-search" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs">
                        <style>
                            svg#freepik_stories-search:not(.animated) .animable {
                                opacity: 0;
                            }

                            svg#freepik_stories-search.animated #freepik--speech-bubbles--inject-90 {
                                animation: 1.5s Infinite linear floating;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-search.animated #freepik--Character--inject-90 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-search.animated #freepik--character--inject-90 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                animation-delay: 0s;
                            }

                            @keyframes floating {
                                0% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }

                                50% {
                                    transform: translateY(-10px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }
                            }

                            @keyframes slideLeft {
                                0% {
                                    opacity: 0;
                                    transform: translateX(-30px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateX(0);
                                }
                            }

                            @keyframes fadeIn {
                                0% {
                                    opacity: 0;
                                }

                                100% {
                                    opacity: 1;
                                }
                            }
                        </style>
                        <g id="freepik--background-complete--inject-90" class="animable"
                            style="transform-origin: 250px 225.15px;">
                            <rect y="382.4" width="500" height="0.25"
                                style="fill: rgb(224, 224, 224); transform-origin: 250px 382.525px;"
                                id="elflz6scqggzn" class="animable"></rect>
                            <rect x="344.93" y="391.62" width="34.4" height="0.25"
                                style="fill: rgb(224, 224, 224); transform-origin: 362.13px 391.745px;"
                                id="el0p7k57nfiql" class="animable"></rect>
                            <rect x="400.44" y="390.91" width="19.36" height="0.25"
                                style="fill: rgb(224, 224, 224); transform-origin: 410.12px 391.035px;"
                                id="elemgcxxufomb" class="animable"></rect>
                            <rect x="221.66" y="391.5" width="25.68" height="0.25"
                                style="fill: rgb(224, 224, 224); transform-origin: 234.5px 391.625px;"
                                id="elhujlukgbl9i" class="animable"></rect>
                            <rect x="248.35" y="395.05" width="17.54" height="0.25"
                                style="fill: rgb(224, 224, 224); transform-origin: 257.12px 395.175px;"
                                id="elhudp9m9nvp8" class="animable"></rect>
                            <rect x="91.68" y="388.97" width="52.99" height="0.25"
                                style="fill: rgb(224, 224, 224); transform-origin: 118.175px 389.095px;"
                                id="el1rq05kd0v15i" class="animable"></rect>
                            <path
                                d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 140.46px 196.4px;"
                                id="els02t2sy7cia" class="animable"></path>
                            <path
                                d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 356.75px 196.4px;"
                                id="elnj5xt5z0fvf" class="animable"></path>
                            <rect x="283.33" y="79.27" width="150.7" height="129.56"
                                style="fill: rgb(224, 224, 224); transform-origin: 358.68px 144.05px;"
                                id="elcihnje8hzra" class="animable"></rect>
                            <rect x="286.68" y="79.27" width="150.7" height="129.56"
                                style="fill: rgb(240, 240, 240); transform-origin: 362.03px 144.05px;"
                                id="elb87tzsgccsr" class="animable"></rect>
                            <g id="ela3lb4w48tn7">
                                <rect x="303.33" y="74.71" width="117.4" height="138.68"
                                    style="fill: rgb(250, 250, 250); transform-origin: 362.03px 144.05px; transform: rotate(90deg);"
                                    class="animable" id="eljeupok1n36"></rect>
                            </g>
                            <g id="el1ynga06b5cb">
                                <rect x="323.82" y="139.51" width="117.4" height="9.06"
                                    style="fill: rgb(224, 224, 224); transform-origin: 382.52px 144.04px; transform: rotate(90deg);"
                                    class="animable" id="elvhqu3sklmr"></rect>
                            </g>
                            <g id="el0tcwz66lvep8">
                                <rect x="276.15" y="139.51" width="117.4" height="9.06"
                                    style="fill: rgb(224, 224, 224); transform-origin: 334.85px 144.04px; transform: rotate(90deg);"
                                    class="animable" id="el0trwzi46x5io"></rect>
                            </g>
                            <g id="eltgg2957v59e">
                                <rect x="322.81" y="139.18" width="125.78" height="9.06"
                                    style="fill: rgb(240, 240, 240); transform-origin: 385.7px 143.71px; transform: rotate(90deg);"
                                    class="animable" id="elv00qq2bh13s"></rect>
                            </g>
                            <g id="elj20nu5hys3">
                                <rect x="275.15" y="139.18" width="125.78" height="9.06"
                                    style="fill: rgb(240, 240, 240); transform-origin: 338.04px 143.71px; transform: rotate(90deg);"
                                    class="animable" id="elrqkth0pkq3"></rect>
                            </g>
                            <g id="el7d4378n46qu">
                                <rect x="371.4" y="142.78" width="117.4" height="2.53"
                                    style="fill: rgb(224, 224, 224); transform-origin: 430.1px 144.045px; transform: rotate(90deg);"
                                    class="animable" id="elcwg2y38tfn5"></rect>
                            </g>
                            <path
                                d="M177.34,181.59S159,150,184.45,124.81c0,0,6.64,4.33,6.54,10.15s-7.12,7.29-5.61,12.15,8.12,9.61,3.78,13.63.7,7.58.41,12.5S177.34,181.59,177.34,181.59Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 180.969px 153.2px;"
                                id="el0ice5h0ou23e" class="animable"></path>
                            <path
                                d="M180.22,186.76s7.44-35.78-24.64-51.64c0,0-4.94,6.2-3,11.69s9.05,4.67,9.15,9.76-4.67,11.69.71,14.13,1.73,7.42,3.56,12S180.22,186.76,180.22,186.76Z"
                                style="fill: rgb(230, 230, 230); transform-origin: 166.548px 160.949px;"
                                id="elj86xjp1md98" class="animable"></path>
                            <path d="M163.89,177.67s.32,30.89,12.67,30.89,12.66-30.89,12.66-30.89Z"
                                style="fill: rgb(240, 240, 240); transform-origin: 176.555px 193.115px;"
                                id="elyx1yd1bb0np" class="animable"></path>
                            <path d="M89.69,196.94s.69,11.62,27.06,11.62,27.07-11.62,27.07-11.62Z"
                                style="fill: rgb(230, 230, 230); transform-origin: 116.755px 202.75px;"
                                id="elokwr2kh8tx" class="animable"></path>
                            <rect x="350.64" y="267" width="20.2" height="29.3" rx="3.14"
                                style="fill: rgb(240, 240, 240); transform-origin: 360.74px 281.65px;"
                                id="elnp3w7lbwf28" class="animable"></rect>
                            <rect x="393.14" y="276.58" width="13.59" height="19.72" rx="2.11"
                                style="fill: rgb(230, 230, 230); transform-origin: 399.935px 286.44px;"
                                id="elzmv471bfvze" class="animable"></rect>
                            <rect x="393.14" y="274.67" width="13.59" height="2.22" rx="0.71"
                                style="fill: rgb(240, 240, 240); transform-origin: 399.935px 275.78px;"
                                id="elg79i7cbedx" class="animable"></rect>
                            <path d="M318.42,280s.5,16.3,19.59,16.3,19.6-16.3,19.6-16.3Z"
                                style="fill: rgb(230, 230, 230); transform-origin: 338.015px 288.15px;"
                                id="el6ekecqj0nwb" class="animable"></path>
                            <g id="elhdqihhm72qq">
                                <rect x="270.94" y="252.78" width="28.89" height="5.7"
                                    style="fill: rgb(224, 224, 224); transform-origin: 285.385px 255.63px; transform: rotate(180deg);"
                                    class="animable" id="elezcw6p82pzb"></rect>
                            </g>
                            <rect x="299.83" y="252.78" width="143.63" height="5.7"
                                style="fill: rgb(240, 240, 240); transform-origin: 371.645px 255.63px;"
                                id="el5dimk2j71h2" class="animable"></rect>
                            <g id="el2sdpzoqa5nv">
                                <rect x="270.94" y="296.3" width="28.89" height="5.7"
                                    style="fill: rgb(224, 224, 224); transform-origin: 285.385px 299.15px; transform: rotate(180deg);"
                                    class="animable" id="el4w9roclmu2t"></rect>
                            </g>
                            <rect x="299.83" y="296.3" width="143.63" height="5.7"
                                style="fill: rgb(240, 240, 240); transform-origin: 371.645px 299.15px;"
                                id="eln3uu9g285w" class="animable"></rect>
                            <rect x="276.02" y="258.47" width="5.33" height="123.92"
                                style="fill: rgb(224, 224, 224); transform-origin: 278.685px 320.43px;"
                                id="ela9vk9amgq2" class="animable"></rect>
                            <rect x="299.83" y="258.47" width="5.33" height="123.92"
                                style="fill: rgb(240, 240, 240); transform-origin: 302.495px 320.43px;"
                                id="eljz5ral5xbgs" class="animable"></rect>
                            <rect x="419.65" y="258.47" width="5.33" height="123.92"
                                style="fill: rgb(224, 224, 224); transform-origin: 422.315px 320.43px;"
                                id="ellj60yh8drpr" class="animable"></rect>
                            <rect x="438.13" y="258.47" width="5.33" height="123.92"
                                style="fill: rgb(240, 240, 240); transform-origin: 440.795px 320.43px;"
                                id="el9bv3lwi99i" class="animable"></rect>
                            <rect x="62.37" y="215.81" width="27.32" height="159.09"
                                style="fill: rgb(230, 230, 230); transform-origin: 76.03px 295.355px;"
                                id="el3e6ud0dlph8" class="animable"></rect>
                            <rect x="67.62" y="374.89" width="134.72" height="7.51"
                                style="fill: rgb(230, 230, 230); transform-origin: 134.98px 378.645px;"
                                id="elqvk8hpxx8d" class="animable"></rect>
                            <g id="elbc4lyrq99sw">
                                <rect x="89.69" y="215.81" width="117.89" height="159.09"
                                    style="fill: rgb(240, 240, 240); transform-origin: 148.635px 295.355px; transform: rotate(180deg);"
                                    class="animable" id="elsx3gi5no5jn"></rect>
                            </g>
                            <g id="el138aix3wod1p">
                                <rect x="100.43" y="275.92" width="96.41" height="38.86"
                                    style="fill: rgb(230, 230, 230); transform-origin: 148.635px 295.35px; transform: rotate(180deg);"
                                    class="animable" id="el200bmt4m6rl"></rect>
                            </g>
                            <g id="elvw2epcig179">
                                <rect x="100.43" y="321.86" width="96.41" height="38.86"
                                    style="fill: rgb(230, 230, 230); transform-origin: 148.635px 341.29px; transform: rotate(180deg);"
                                    class="animable" id="elb9eiwkxm75l"></rect>
                            </g>
                            <path
                                d="M159.46,280.18H137.81a2.67,2.67,0,0,1-2.66-2.66h0a2.67,2.67,0,0,1,2.66-2.67h21.65a2.67,2.67,0,0,1,2.66,2.67h0A2.67,2.67,0,0,1,159.46,280.18Z"
                                style="fill: rgb(240, 240, 240); transform-origin: 148.635px 277.515px;"
                                id="el6uzie6mnhy4" class="animable"></path>
                            <g id="elqib1f8val9l">
                                <rect x="100.43" y="229.98" width="96.41" height="38.86"
                                    style="fill: rgb(230, 230, 230); transform-origin: 148.635px 249.41px; transform: rotate(180deg);"
                                    class="animable" id="elm6xu6phxsrd"></rect>
                            </g>
                            <path
                                d="M159.46,234.24H137.81a2.67,2.67,0,0,1-2.66-2.67h0a2.67,2.67,0,0,1,2.66-2.66h21.65a2.67,2.67,0,0,1,2.66,2.66h0A2.67,2.67,0,0,1,159.46,234.24Z"
                                style="fill: rgb(240, 240, 240); transform-origin: 148.635px 231.575px;"
                                id="elczvuvsrskfm" class="animable"></path>
                            <path
                                d="M159.46,326.12H137.81a2.67,2.67,0,0,1-2.66-2.66h0a2.67,2.67,0,0,1,2.66-2.67h21.65a2.67,2.67,0,0,1,2.66,2.67h0A2.67,2.67,0,0,1,159.46,326.12Z"
                                style="fill: rgb(240, 240, 240); transform-origin: 148.635px 323.455px;"
                                id="el7blsvwj83zq" class="animable"></path>
                            <rect x="89.69" y="208.56" width="121.53" height="7.25"
                                style="fill: rgb(230, 230, 230); transform-origin: 150.455px 212.185px;"
                                id="elt2utqzqjn4c" class="animable"></rect>
                            <g id="ellvwarn5c3ep">
                                <rect x="58.56" y="208.56" width="31.14" height="7.25"
                                    style="fill: rgb(224, 224, 224); transform-origin: 74.13px 212.185px; transform: rotate(180deg);"
                                    class="animable" id="el49asg4edlf"></rect>
                            </g>
                            <rect x="75.94" y="85.35" width="44.2" height="48.54"
                                style="fill: rgb(230, 230, 230); transform-origin: 98.04px 109.62px;"
                                id="eloep80kyikp" class="animable"></rect>
                            <rect x="79.27" y="85.35" width="45.66" height="48.54"
                                style="fill: rgb(240, 240, 240); transform-origin: 102.1px 109.62px;"
                                id="elaiki9ho29w" class="animable"></rect>
                            <g id="el8vyb1x7tse9">
                                <rect x="81.65" y="90.61" width="40.89" height="38.01"
                                    style="fill: rgb(250, 250, 250); transform-origin: 102.095px 109.615px; transform: rotate(90deg);"
                                    class="animable" id="elhj0p6f8h5su"></rect>
                            </g>
                            <g id="elbapbbhekv1s">
                                <rect x="91.56" y="99.82" width="21.07" height="19.58"
                                    style="fill: rgb(240, 240, 240); transform-origin: 102.095px 109.61px; transform: rotate(90deg);"
                                    class="animable" id="el6xy50sfsfim"></rect>
                            </g>
                            <rect x="133.22" y="71.02" width="33.52" height="36.01"
                                style="fill: rgb(230, 230, 230); transform-origin: 149.98px 89.025px;"
                                id="elllsgwtlorh" class="animable"></rect>
                            <rect x="136.43" y="71.02" width="33.87" height="36.01"
                                style="fill: rgb(240, 240, 240); transform-origin: 153.365px 89.025px;"
                                id="elwx2waks5xmg" class="animable"></rect>
                            <g id="elsv7m6zqd5g">
                                <rect x="138.2" y="74.92" width="30.33" height="28.19"
                                    style="fill: rgb(250, 250, 250); transform-origin: 153.365px 89.015px; transform: rotate(90deg);"
                                    class="animable" id="ellk80lcd6kbr"></rect>
                            </g>
                            <polygon points="153.36 81.35 145.65 94.71 161.07 94.71 153.36 81.35"
                                style="fill: rgb(240, 240, 240); transform-origin: 153.36px 88.03px;"
                                id="eloy6bem46dfp" class="animable"></polygon>
                        </g>
                        <g id="freepik--Shadow--inject-90" class="animable"
                            style="transform-origin: 250px 416.24px;">
                            <ellipse cx="250" cy="416.24" rx="193.89" ry="11.32"
                                style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;" id="elz9keo0vzuxh"
                                class="animable"></ellipse>
                        </g>
                        <g id="freepik--speech-bubbles--inject-90" class="animable"
                            style="transform-origin: 269.848px 176.815px;">
                            <rect x="312.33" y="145.82" width="116.84" height="45.42" rx="9.37"
                                style="fill: #2993FF; transform-origin: 370.75px 168.53px;" id="elp5gy5aum3m"
                                class="animable"></rect>
                            <rect x="322.07" y="153.48" width="79.91" height="5.08" rx="1.64"
                                style="fill: #2993FF; transform-origin: 362.025px 156.02px;" id="el6g8m5esgzd5"
                                class="animable"></rect>
                            <rect x="322.07" y="165.72" width="55.64" height="5.08" rx="1.64"
                                style="fill: #2993FF; transform-origin: 349.89px 168.26px;" id="elhff2w7qt0q4"
                                class="animable"></rect>
                            <rect x="322.07" y="177.96" width="41.6" height="5.08" rx="1.64"
                                style="fill: #2993FF; transform-origin: 342.87px 180.5px;" id="eldp4knsq89l"
                                class="animable"></rect>
                            <rect x="369.56" y="177.96" width="41.6" height="5.08" rx="1.64"
                                style="fill: #2993FF; transform-origin: 390.36px 180.5px;" id="el4cqiwriuwn6"
                                class="animable"></rect>
                            <g id="elmv8yc6xoyvp">
                                <g style="opacity: 0.5; transform-origin: 366.615px 168.26px;" class="animable"
                                    id="el1u0gmdsarmph">
                                    <rect x="322.07" y="153.48" width="79.91" height="5.08" rx="1.64"
                                        style="fill: rgb(255, 255, 255); transform-origin: 362.025px 156.02px;"
                                        id="elk4bjstif87" class="animable"></rect>
                                    <rect x="322.07" y="165.72" width="55.64" height="5.08" rx="1.64"
                                        style="fill: rgb(255, 255, 255); transform-origin: 349.89px 168.26px;"
                                        id="elgs8jwh8lm4p" class="animable"></rect>
                                    <rect x="322.07" y="177.96" width="41.6" height="5.08" rx="1.64"
                                        style="fill: rgb(255, 255, 255); transform-origin: 342.87px 180.5px;"
                                        id="elktexq4evfzr" class="animable"></rect>
                                    <rect x="369.56" y="177.96" width="41.6" height="5.08" rx="1.64"
                                        style="fill: rgb(255, 255, 255); transform-origin: 390.36px 180.5px;"
                                        id="ell7aj7uyt56r" class="animable"></rect>
                                </g>
                            </g>
                            <rect x="216.13" y="135.23" width="138.83" height="66.6" rx="13.74"
                                style="fill: #2993FF; transform-origin: 285.545px 168.53px;" id="elomb12p92psf"
                                class="animable"></rect>
                            <rect x="230.41" y="146.46" width="117.16" height="7.45" rx="2.41"
                                style="fill: #2993FF; transform-origin: 288.99px 150.185px;" id="el9kl9e9cff9t"
                                class="animable"></rect>
                            <rect x="230.41" y="164.41" width="81.57" height="7.45" rx="2.41"
                                style="fill: #2993FF; transform-origin: 271.195px 168.135px;" id="elfkqnumo23rj"
                                class="animable"></rect>
                            <rect x="230.41" y="182.36" width="60.99" height="7.45" rx="2.41"
                                style="fill: #2993FF; transform-origin: 260.905px 186.085px;" id="elzfdjengc3jj"
                                class="animable"></rect>
                            <rect x="300.04" y="182.36" width="51.62" height="7.45" rx="2.41"
                                style="fill: #2993FF; transform-origin: 325.85px 186.085px;" id="el48lecyu2ulh"
                                class="animable"></rect>
                            <g id="elssk8lrdfaq">
                                <g style="opacity: 0.5; transform-origin: 291.035px 168.135px;" class="animable"
                                    id="elayxeujbmv9v">
                                    <rect x="230.41" y="146.46" width="117.16" height="7.45" rx="2.41"
                                        style="fill: rgb(255, 255, 255); transform-origin: 288.99px 150.185px;"
                                        id="el2ql4gi0p72e" class="animable"></rect>
                                    <rect x="230.41" y="164.41" width="81.57" height="7.45" rx="2.41"
                                        style="fill: rgb(255, 255, 255); transform-origin: 271.195px 168.135px;"
                                        id="el34vacavkssi" class="animable"></rect>
                                    <rect x="230.41" y="182.36" width="60.99" height="7.45" rx="2.41"
                                        style="fill: rgb(255, 255, 255); transform-origin: 260.905px 186.085px;"
                                        id="el29yzfq8du13" class="animable"></rect>
                                    <rect x="300.04" y="182.36" width="51.62" height="7.45" rx="2.41"
                                        style="fill: rgb(255, 255, 255); transform-origin: 325.85px 186.085px;"
                                        id="eljwzs5qxutnq" class="animable"></rect>
                                </g>
                            </g>
                            <rect x="211.94" y="213.9" width="66.47" height="93.18" rx="6.42"
                                style="fill: #2993FF; transform-origin: 245.175px 260.49px;" id="el8j184jqe59c"
                                class="animable"></rect>
                            <g id="elhie2tk469s4">
                                <rect x="211.94" y="213.9" width="66.47" height="93.18" rx="6.42"
                                    style="opacity: 0.4; transform-origin: 245.175px 260.49px;" class="animable"
                                    id="elono9bmad5co"></rect>
                            </g>
                            <rect x="219.63" y="223.62" width="51.08" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 245.17px 225.685px;"
                                id="elx6q4p5uye3g" class="animable"></rect>
                            <rect x="219.63" y="233.56" width="35.57" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 237.415px 235.625px;"
                                id="eldc128agoqw8" class="animable"></rect>
                            <rect x="219.63" y="243.51" width="51.08" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 245.17px 245.575px;"
                                id="elr8xxk9kakz" class="animable"></rect>
                            <rect x="219.63" y="253.45" width="20.47" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 229.865px 255.515px;"
                                id="elpanrz1im6he" class="animable"></rect>
                            <rect x="244.97" y="253.45" width="20.47" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 255.205px 255.515px;"
                                id="elbi9vdu9u6gf" class="animable"></rect>
                            <rect x="219.63" y="263.4" width="51.08" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 245.17px 265.465px;"
                                id="el9c1w555ivlh" class="animable"></rect>
                            <rect x="219.63" y="273.34" width="51.08" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 245.17px 275.405px;"
                                id="elk45a10h426r" class="animable"></rect>
                            <rect x="219.63" y="283.29" width="42.44" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 240.85px 285.355px;"
                                id="elmokcoiuxm1" class="animable"></rect>
                            <rect x="219.63" y="293.23" width="21.06" height="4.13" rx="1.18"
                                style="fill: rgb(250, 250, 250); transform-origin: 230.16px 295.295px;"
                                id="elfbnm0u27mds" class="animable"></rect>
                            <path d="M286.5,213.33H212.11L245,239.5l50.43,19V222.24A8.93,8.93,0,0,0,286.5,213.33Z"
                                style="fill: #2993FF; transform-origin: 253.77px 235.915px;" id="el4c33x5n7rma"
                                class="animable"></path>
                            <g id="elu8g0c839asb">
                                <path d="M286.5,213.33H212.11L245,239.5l50.43,19V222.24A8.93,8.93,0,0,0,286.5,213.33Z"
                                    style="opacity: 0.4; transform-origin: 253.77px 235.915px;" class="animable"
                                    id="el0l3t1329oxf"></path>
                            </g>
                            <rect x="227.34" y="226.81" width="57.39" height="5.72" rx="1.48"
                                style="fill: rgb(250, 250, 250); transform-origin: 256.035px 229.67px;"
                                id="el9bm1olipezv" class="animable"></rect>
                            <g id="elp4714aawopg">
                                <rect x="329.04" y="205.32" width="66.84" height="105.37" rx="7.26"
                                    style="fill: #2993FF; transform-origin: 362.46px 258.005px; transform: rotate(90deg);"
                                    class="animable" id="elb2dgakkqg3"></rect>
                            </g>
                            <g id="el3yyrrg0xevh">
                                <rect x="345.63" y="188.73" width="66.84" height="105.37" rx="7.26"
                                    style="fill: #2993FF; transform-origin: 379.05px 241.415px; transform: rotate(90deg);"
                                    class="animable" id="el3g4rwufoezh"></rect>
                            </g>
                            <g id="el1l4gtv3gich">
                                <rect x="345.63" y="188.73" width="66.84" height="105.37" rx="7.26"
                                    style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 379.05px 241.415px; transform: rotate(90deg);"
                                    class="animable" id="elrrvzoilwv1"></rect>
                            </g>
                            <g id="el7qspr29wmu8">
                                <rect x="385.1" y="215.48" width="38.67" height="36.15" rx="3.23"
                                    style="fill: #2993FF; transform-origin: 404.435px 233.555px; transform: rotate(90deg);"
                                    class="animable" id="elgpr0j2rwzlc"></rect>
                            </g>
                            <g id="elszir4t64eqh">
                                <rect x="385.1" y="215.48" width="38.67" height="36.15" rx="3.23"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 404.435px 233.555px; transform: rotate(90deg);"
                                    class="animable" id="eliugtkr7q89n"></rect>
                            </g>
                            <g id="elwzj429mqsiq">
                                <rect x="352.04" y="239.04" width="29.64" height="27.71" rx="2.48"
                                    style="fill: #2993FF; transform-origin: 366.86px 252.895px; transform: rotate(90deg);"
                                    class="animable" id="el00c7omhq6ktbj"></rect>
                            </g>
                            <g id="el4y4ldonhe08">
                                <rect x="352.04" y="239.04" width="29.64" height="27.71" rx="2.48"
                                    style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 366.86px 252.895px; transform: rotate(90deg);"
                                    class="animable" id="el40g0uyylmuq"></rect>
                            </g>
                            <g id="elkn8rahfuh0s">
                                <rect x="223.36" y="-27.34" width="28.09" height="258.89" rx="7.38"
                                    style="fill: #2993FF; transform-origin: 237.405px 102.105px; transform: rotate(90deg);"
                                    class="animable" id="elpk6ll95x81s"></rect>
                            </g>
                            <g id="el65218tq8obq">
                                <rect x="223.36" y="-27.34" width="28.09" height="258.89" rx="7.38"
                                    style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 237.405px 102.105px; transform: rotate(90deg);"
                                    class="animable" id="eltlw554q5akh"></rect>
                            </g>
                            <g id="els8yleqogaal">
                                <rect x="280.71" y="80.88" width="9.67" height="70.25"
                                    style="fill: #2993FF; transform-origin: 285.545px 116.005px; transform: rotate(90deg);"
                                    class="animable" id="elau0dblglq5s"></rect>
                            </g>
                            <g id="elral1wc0rtjn">
                                <rect x="280.71" y="80.88" width="9.67" height="70.25"
                                    style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 285.545px 116.005px; transform: rotate(90deg);"
                                    class="animable" id="el1tzbym12lh4"></rect>
                            </g>
                            <g id="eld63799oxyf">
                                <rect x="248.54" y="-68.85" width="28.09" height="258.89" rx="7.38"
                                    style="fill: #2993FF; transform-origin: 262.585px 60.595px; transform: rotate(90deg);"
                                    class="animable" id="el4riqe4w4ev5"></rect>
                            </g>
                        </g>
                        <g id="freepik--Character--inject-90" class="animable"
                            style="transform-origin: 227.869px 256.639px;">
                            <path
                                d="M130.36,194.26c-.88,2-1.85,4.16-2.7,6.27s-1.73,4.28-2.5,6.44a91.35,91.35,0,0,0-3.79,12.93l-.29,1.6-.1.6c0,.17,0,.39-.06.59a24.53,24.53,0,0,0,.06,2.92c.19,2.11.53,4.37,1,6.63.84,4.53,1.91,9.2,3,13.8l-5.13,2a92.65,92.65,0,0,1-6.09-13.59,57,57,0,0,1-2.12-7.47,26.81,26.81,0,0,1-.56-4.26c0-.4,0-.78,0-1.21s0-.91.07-1.19l.2-2a63,63,0,0,1,1.37-7.65c.56-2.5,1.28-4.93,2-7.33s1.62-4.76,2.57-7.08c.47-1.16,1-2.31,1.46-3.46s1-2.25,1.64-3.48Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 120.72px 218.68px;"
                                id="el0i6bou4bjgm8" class="animable"></path>
                            <path d="M124.71,244.69l3.9,3.81-8.51,4s-2.06-3.61-.63-6.87Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 123.787px 248.595px;"
                                id="elxga1vb10jrd" class="animable"></path>
                            <polygon points="131.76 254.17 124.57 257.11 120.11 252.46 128.61 248.5 131.76 254.17"
                                style="fill: rgb(228, 137, 123); transform-origin: 125.935px 252.805px;"
                                id="elpr91241d99r" class="animable"></polygon>
                            <g id="eljfbm6l79gyc">
                                <path d="M277.41,250.07A72,72,0,1,1,357,186.5,72,72,0,0,1,277.41,250.07Z"
                                    style="fill: rgb(250, 250, 250); opacity: 0.4; transform-origin: 285.444px 178.52px;"
                                    class="animable" id="ell1y3uw2w1ir"></path>
                            </g>
                            <g id="elflr5ebbrvch">
                                <path
                                    d="M329.79,121.79l-109.5,87.49c-.46-1-.91-2-1.33-3a71.24,71.24,0,0,1-5.21-20.48h0l94.58-75.57A71.15,71.15,0,0,1,329.79,121.79Z"
                                    style="fill: rgb(250, 250, 250); opacity: 0.4; transform-origin: 271.77px 159.755px;"
                                    class="animable" id="elv6p0yhg54x"></path>
                            </g>
                            <g id="el181nyv0ijd1">
                                <path
                                    d="M355.06,160.12,252.11,242.37a71.86,71.86,0,0,1-24.77-21.28l112.41-89.82A72,72,0,0,1,355.06,160.12Z"
                                    style="fill: rgb(250, 250, 250); opacity: 0.4; transform-origin: 291.2px 186.82px;"
                                    class="animable" id="elu52l04vfr8q"></path>
                            </g>
                            <path
                                d="M204.39,151l-.95-.32a87.68,87.68,0,0,1,6.18-14.05l.87.48A86.93,86.93,0,0,0,204.39,151Zm12.14-23.34-.81-.59a86.7,86.7,0,0,1,31.37-26.21l.45.9A85.74,85.74,0,0,0,216.53,127.69Zm109.59-24.53A83.6,83.6,0,0,0,316,98.54l.36-.94a85.62,85.62,0,0,1,10.22,4.68Z"
                                style="fill: #2993FF; transform-origin: 265.01px 124.3px;" id="elbxgslpd2s6o"
                                class="animable"></path>
                            <g id="el4sgl6truq8">
                                <path
                                    d="M204.39,151l-.95-.32a87.68,87.68,0,0,1,6.18-14.05l.87.48A86.93,86.93,0,0,0,204.39,151Zm12.14-23.34-.81-.59a86.7,86.7,0,0,1,31.37-26.21l.45.9A85.74,85.74,0,0,0,216.53,127.69Zm109.59-24.53A83.6,83.6,0,0,0,316,98.54l.36-.94a85.62,85.62,0,0,1,10.22,4.68Z"
                                    style="opacity: 0.3; transform-origin: 265.01px 124.3px;" class="animable"
                                    id="elepykqhjxqm9"></path>
                            </g>
                            <path
                                d="M359.87,141.74a83,83,0,0,0-152.65,64.73c-6.68,2.34-13.28,4.85-19.84,7.44q-14.19,5.63-28.12,11.76c-9.28,4.11-18.52,8.3-27.67,12.68-4.59,2.15-9.12,4.42-13.69,6.62a19.79,19.79,0,0,0-6.34,4.35,19.15,19.15,0,0,0-2.57,3.37,17.25,17.25,0,0,0-2,4.63,12.72,12.72,0,0,0,7.33,14.85,17.56,17.56,0,0,0,4.86,1.26,18.88,18.88,0,0,0,4.25,0,19.76,19.76,0,0,0,7.3-2.39c4.53-2.29,9.09-4.5,13.59-6.85,9-4.59,18-9.38,26.89-14.24S189,240,197.68,234.78c6-3.63,12.06-7.34,18-11.22a83,83,0,0,0,144.21-81.82Zm-45.46,95.53a65.53,65.53,0,1,1,29.75-87.78A65.53,65.53,0,0,1,314.41,237.27Z"
                                style="fill: #2993FF; transform-origin: 237.695px 184.169px;" id="elyzaj1z4tdt"
                                class="animable"></path>
                            <g id="el3f4xy1jaxei">
                                <path
                                    d="M359.87,141.74a83,83,0,0,0-152.65,64.73c-6.68,2.34-13.28,4.85-19.84,7.44q-14.19,5.63-28.12,11.76c-9.28,4.11-18.52,8.3-27.67,12.68-4.59,2.15-9.12,4.42-13.69,6.62a19.79,19.79,0,0,0-6.34,4.35,19.15,19.15,0,0,0-2.57,3.37,17.25,17.25,0,0,0-2,4.63,12.72,12.72,0,0,0,7.33,14.85,17.56,17.56,0,0,0,4.86,1.26,18.88,18.88,0,0,0,4.25,0,19.76,19.76,0,0,0,7.3-2.39c4.53-2.29,9.09-4.5,13.59-6.85,9-4.59,18-9.38,26.89-14.24S189,240,197.68,234.78c6-3.63,12.06-7.34,18-11.22a83,83,0,0,0,144.21-81.82Zm-45.46,95.53a65.53,65.53,0,1,1,29.75-87.78A65.53,65.53,0,0,1,314.41,237.27Z"
                                    style="opacity: 0.3; transform-origin: 237.695px 184.169px;" class="animable"
                                    id="elnwu5xe4xj1b"></path>
                            </g>
                            <path
                                d="M158,158.55c0,.59.31,1.07.7,1.07s.7-.48.7-1.07-.31-1.07-.7-1.07S158,158,158,158.55Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 158.7px 158.55px;" id="elwswacw1w57"
                                class="animable"></path>
                            <path d="M158.28,159.62a21.33,21.33,0,0,0,2.83,5.07,3.41,3.41,0,0,1-2.83.53Z"
                                style="fill: rgb(222, 87, 83); transform-origin: 159.695px 162.473px;"
                                id="elqaybna0nu2j" class="animable"></path>
                            <path
                                d="M155.93,155.26a.37.37,0,0,1-.29-.14.36.36,0,0,1,.08-.49,3.43,3.43,0,0,1,3.13-.53.35.35,0,1,1-.25.65,2.73,2.73,0,0,0-2.47.45A.36.36,0,0,1,155.93,155.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 157.343px 154.596px;"
                                id="elt8fehiyftm" class="animable"></path>
                            <path
                                d="M137.8,163c1,5.37,2.1,15.22-1.66,18.81,0,0,1.47,5.45,11.46,5.45,11,0,5.24-5.45,5.24-5.45-6-1.44-5.83-5.88-4.79-10.06Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 145.244px 175.13px;"
                                id="elef2650v0c3m" class="animable"></path>
                            <path
                                d="M131.65,184.64c1.19-1.85-.81-6.34-.81-6.34s17.68-4.45,24.91,2.38c1.5,1.41-.16,3.49-.16,3.49Z"
                                style="fill: #2993FF; transform-origin: 143.609px 180.758px;" id="elvqp1kfkyny"
                                class="animable"></path>
                            <g id="elbizsz6elyk">
                                <path
                                    d="M131.65,184.64c1.19-1.85-.81-6.34-.81-6.34s17.68-4.45,24.91,2.38c1.5,1.41-.16,3.49-.16,3.49Z"
                                    style="opacity: 0.1; transform-origin: 143.609px 180.758px;" class="animable"
                                    id="elm77rwt10e9h"></path>
                            </g>
                            <path
                                d="M102.4,388.67c-.93,0-2.42-1.55-2.86-2.13a.17.17,0,0,1,0-.19.18.18,0,0,1,.16-.09c.11,0,2.56.22,3.23,1.09a.81.81,0,0,1,.16.66.72.72,0,0,1-.52.65Zm-2.32-2c.73.84,1.9,1.79,2.4,1.67,0,0,.2-.05.26-.37a.45.45,0,0,0-.1-.38A4.67,4.67,0,0,0,100.08,386.65Z"
                                style="fill: #2993FF; transform-origin: 101.308px 387.465px;" id="eldv8h4093c3"
                                class="animable"></path>
                            <path
                                d="M100.19,386.65a2.68,2.68,0,0,1-.54,0,.16.16,0,0,1-.14-.11.2.2,0,0,1,0-.18c.07-.06,1.54-1.59,2.65-1.59h0a.94.94,0,0,1,.71.3.57.57,0,0,1,.14.7C102.72,386.33,101.19,386.65,100.19,386.65Zm-.13-.35c1,0,2.45-.31,2.69-.75,0,0,.07-.13-.09-.29a.59.59,0,0,0-.46-.19h0A4.23,4.23,0,0,0,100.06,386.3Z"
                                style="fill: #2993FF; transform-origin: 101.281px 385.717px;" id="el4jn1eu89ugf"
                                class="animable"></path>
                            <path
                                d="M168.39,411.37a13.25,13.25,0,0,1-2.26-.21A.16.16,0,0,1,166,411a.18.18,0,0,1,.08-.18c.11-.06,2.67-1.53,3.9-1.19a.86.86,0,0,1,.55.4.66.66,0,0,1,0,.76C170.24,411.24,169.33,411.37,168.39,411.37Zm-1.69-.47c1.36.2,3.22.19,3.56-.29.05-.06.09-.17,0-.38a.56.56,0,0,0-.34-.25C169.14,409.78,167.59,410.44,166.7,410.9Z"
                                style="fill: #2993FF; transform-origin: 168.324px 410.475px;" id="elrbd5baer68l"
                                class="animable"></path>
                            <path
                                d="M166.17,411.17a.18.18,0,0,1-.1,0A.16.16,0,0,1,166,411a4.88,4.88,0,0,1,1.14-2.83,1.25,1.25,0,0,1,1-.29c.48,0,.62.29.65.48.13.83-1.62,2.42-2.51,2.82Zm1.79-3a.91.91,0,0,0-.6.22,4,4,0,0,0-1,2.27c.9-.55,2.1-1.79,2-2.29,0,0,0-.17-.34-.2Z"
                                style="fill: #2993FF; transform-origin: 167.396px 409.523px;" id="elky5tgzuq5o"
                                class="animable"></path>
                            <polygon points="158.09 410.99 165.44 410.99 166.17 393.98 158.82 393.98 158.09 410.99"
                                style="fill: rgb(228, 137, 123); transform-origin: 162.13px 402.485px;"
                                id="el6m2hac6qfoj" class="animable"></polygon>
                            <polygon points="92.64 381.79 98.78 385.81 112.34 374.36 106.19 370.33 92.64 381.79"
                                style="fill: rgb(228, 137, 123); transform-origin: 102.49px 378.07px;"
                                id="el1orlrnpojks" class="animable"></polygon>
                            <path
                                d="M99.79,385.43l-6.38-5.23a.63.63,0,0,0-.8,0l-5.26,4.13a1.08,1.08,0,0,0,0,1.69c2.26,1.79,3.45,2.55,6.26,4.85,1.73,1.41,6,5.73,8.41,7.68s4.62-.15,3.82-1.16c-3.59-4.55-5-8.44-5.41-10.85A1.81,1.81,0,0,0,99.79,385.43Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 96.4747px 389.704px;"
                                id="eld2kzyqk5wz" class="animable"></path>
                            <path
                                d="M165.39,410.14h-8a.65.65,0,0,0-.63.5l-1.45,6.53a1.07,1.07,0,0,0,1.06,1.31c2.89-.05,7.07-.22,10.71-.22,4.25,0,7.93.23,12.91.23,3,0,3.86-3.05,2.59-3.32-5.74-1.26-10.44-1.39-15.4-4.46A3.44,3.44,0,0,0,165.39,410.14Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 169.215px 414.315px;"
                                id="elqy9eg12gtc" class="animable"></path>
                            <path
                                d="M121.66,184c-6.37,3-10,23.1-10,23.1l15.57,6.21a115.83,115.83,0,0,0,5.51-17.15C134.88,186.9,128.18,180.9,121.66,184Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 122.403px 198.243px;"
                                id="eluh5h6o2mqmm" class="animable"></path>
                            <path
                                d="M129.92,195.33c-3.85,3.9-5.61,11.54-6.38,16.51l3.73,1.49a116.7,116.7,0,0,0,5.4-16.65C132.34,194.56,131.52,193.71,129.92,195.33Z"
                                style="fill: rgb(32, 48, 72); transform-origin: 128.105px 203.907px;"
                                id="el2mtevzqrkvf" class="animable"></path>
                            <path
                                d="M164.14,183.86s7.82,8.84.44,63.5H125.29c-.27-6,3.52-35.45-2.3-63.87a100.56,100.56,0,0,1,13.15-1.66,140.87,140.87,0,0,1,16.7,0A74.19,74.19,0,0,1,164.14,183.86Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 145.37px 214.471px;"
                                id="el3z1ognq1wqp" class="animable"></path>
                            <path
                                d="M167.73,205.08l-6.62-11.41a58.31,58.31,0,0,0-1.55,16.27c.18,3.92,3.77,18.44,7,20.56A230.84,230.84,0,0,0,167.73,205.08Z"
                                style="fill: rgb(32, 48, 72); transform-origin: 163.619px 212.085px;"
                                id="elrlkqp34dc3g" class="animable"></path>
                            <path
                                d="M168.65,191.67c1,4.86,2,9.84,3.07,14.72s2.18,9.78,3.47,14.51c.33,1.17.64,2.37,1,3.49l.27.86.13.43,0-.05c-.07-.09-.15-.1-.09,0a3.35,3.35,0,0,0,1.52.95,17.84,17.84,0,0,0,2.91.81,77.79,77.79,0,0,0,14.3.93l.95,5.44c-1.34.43-2.59.74-3.91,1.05s-2.62.57-3.95.77a42.73,42.73,0,0,1-8.33.56,22.61,22.61,0,0,1-4.6-.6,13.39,13.39,0,0,1-5.28-2.45,9.65,9.65,0,0,1-2.47-3c-.16-.3-.3-.64-.43-.93l-.18-.47-.37-1c-.51-1.27-.93-2.52-1.39-3.77-1.69-5-3.1-10.05-4.34-15.09s-2.31-10.07-3.2-15.24Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 176.955px 213.915px;"
                                id="elug5mhe3le8" class="animable"></path>
                            <path
                                d="M154.33,189.22c-2.07,6.71,6.32,26.72,6.32,26.72l16.71-4.2s-.64-10.4-4.45-18.65C167.17,180.65,156.81,181.17,154.33,189.22Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.681px 199.68px;"
                                id="el2nfyx92wi55" class="animable"></path>
                            <path
                                d="M195.09,228.32l8.32-.21-4,8.66s-3.39.45-6.17-4.12l-2.93-3.5,3.37-.67A7.52,7.52,0,0,1,195.09,228.32Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 196.86px 232.446px;"
                                id="elf0vp77wr2ig" class="animable"></path>
                            <polygon points="208.66 229.72 203.9 236.9 199.41 236.77 203.41 228.11 208.66 229.72"
                                style="fill: rgb(228, 137, 123); transform-origin: 204.035px 232.505px;"
                                id="el497wwg80q1x" class="animable"></polygon>
                            <polygon points="166.17 393.98 165.79 402.75 158.44 402.75 158.82 393.98 166.17 393.98"
                                style="fill: rgb(206, 111, 100); transform-origin: 162.305px 398.365px;"
                                id="el3j1kzm7sksp" class="animable"></polygon>
                            <polygon points="106.19 370.33 112.34 374.36 105.34 380.26 99.2 376.24 106.19 370.33"
                                style="fill: rgb(206, 111, 100); transform-origin: 105.77px 375.295px;"
                                id="elpk8jocz2rwe" class="animable"></polygon>
                            <path
                                d="M138.26,157.28c.44,7.27.33,11.56,4,15.29,5.52,5.63,14.51,2.3,16.25-5,1.57-6.54.59-17.34-6.53-20.24A10,10,0,0,0,138.26,157.28Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 148.696px 161.003px;"
                                id="elxjnhwu1jrp" class="animable"></path>
                            <path
                                d="M129.7,156c1.81,6.63,6.07,14.27,11.58,14.76,6.84.6,9.93-6.47,10.83-13.77,4.1-2.81,1.95-5.9,6.06-6.29,5.28-.5,3.59-10.16-3.36-11.71,0,0,2.33,4.35-2.56,2.15a28.22,28.22,0,0,0-14.94-2.59s6.24,3.12.14,4.51-7.92,5.15-5.11,7.42C132.34,150.49,128.51,151.64,129.7,156Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 145.37px 154.602px;"
                                id="ely18goyemr0e" class="animable"></path>
                            <path
                                d="M147.94,158.49a8.22,8.22,0,0,0,2.07,4.87c1.6,1.77,3.27.67,3.55-1.48.26-1.93-.27-5.18-2.23-6.16S147.81,156.31,147.94,158.49Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 150.777px 159.832px;"
                                id="el8pcgnig8wp3" class="animable"></path>
                            <path
                                d="M150.64,247.36s7.16,51.85,1.52,72.63c-8.94,32.9-43.12,60.67-43.12,60.67l-11.59-7.6s29.11-23.45,32.67-51c3.2-24.73-4.83-54.64-4.83-74.71Z"
                                style="fill: #2993FF; transform-origin: 125.888px 314.005px;" id="el2affnvhdnfp"
                                class="animable"></path>
                            <g id="elz7mlp2a5je">
                                <path
                                    d="M150.64,247.36s7.16,51.85,1.52,72.63c-8.94,32.9-43.12,60.67-43.12,60.67l-11.59-7.6s29.11-23.45,32.67-51c3.2-24.73-4.83-54.64-4.83-74.71Z"
                                    style="opacity: 0.1; transform-origin: 125.888px 314.005px;" class="animable"
                                    id="eltx5qhpccksm"></path>
                            </g>
                            <path
                                d="M153.6,277a48.4,48.4,0,0,0-6.27-6c1.22,16.83,2.22,41.76,1.11,59.47A76.41,76.41,0,0,0,152.16,320C154.91,309.85,154.62,292.32,153.6,277Z"
                                style="fill: #2993FF; transform-origin: 150.829px 300.735px;" id="elzvv2dafgdk"
                                class="animable"></path>
                            <g id="elg1acxiog9ms">
                                <path
                                    d="M153.6,277a48.4,48.4,0,0,0-6.27-6c1.22,16.83,2.22,41.76,1.11,59.47A76.41,76.41,0,0,0,152.16,320C154.91,309.85,154.62,292.32,153.6,277Z"
                                    style="opacity: 0.3; transform-origin: 150.829px 300.735px;" class="animable"
                                    id="eli5735hzd6bk"></path>
                            </g>
                            <path d="M113.71,378.07c.05,0-4.49,3-4.49,3l-12.66-8.3,4-3.31Z"
                                style="fill: #2993FF; transform-origin: 105.135px 375.265px;" id="el421jsez0c0x"
                                class="animable"></path>
                            <g id="elcjmizx91pya">
                                <path d="M113.71,378.07c.05,0-4.49,3-4.49,3l-12.66-8.3,4-3.31Z"
                                    style="opacity: 0.3; transform-origin: 105.135px 375.265px;" class="animable"
                                    id="el8uqzt52l0i6"></path>
                            </g>
                            <path
                                d="M164.58,247.36s11.06,46.9,11.84,69.31c.88,25.12-7.89,84.38-7.89,84.38H156.08s-1.53-59.72-2.08-82.6c-.61-24.95-15.25-71.09-15.25-71.09Z"
                                style="fill: #2993FF; transform-origin: 157.616px 324.205px;" id="elj2ut5ccov"
                                class="animable"></path>
                            <g id="elkuqqu9kfci">
                                <path
                                    d="M164.58,247.36s11.06,46.9,11.84,69.31c.88,25.12-7.89,84.38-7.89,84.38H156.08s-1.53-59.72-2.08-82.6c-.61-24.95-15.25-71.09-15.25-71.09Z"
                                    style="opacity: 0.1; transform-origin: 157.616px 324.205px;" class="animable"
                                    id="elzrrp0qa41at"></path>
                            </g>
                            <path d="M170.92,396.1c.06,0-.7,5.16-.7,5.16H155.08l-.41-4.61Z"
                                style="fill: #2993FF; transform-origin: 162.797px 398.68px;" id="elgzkjfm5n8wh"
                                class="animable"></path>
                            <g id="elcobay6z25zw">
                                <path d="M170.92,396.1c.06,0-.7,5.16-.7,5.16H155.08l-.41-4.61Z"
                                    style="opacity: 0.3; transform-origin: 162.797px 398.68px;" class="animable"
                                    id="elj93k6fq00zr"></path>
                            </g>
                        </g>
                        <g id="freepik--character--inject-90" class="animable"
                            style="transform-origin: 337.551px 287.938px;">
                            <path
                                d="M356,202.29c.85.8,1.52,1.48,2.22,2.24s1.36,1.5,2,2.27c1.3,1.53,2.52,3.14,3.7,4.76a76.27,76.27,0,0,1,6.27,10.26l.37.73a7.05,7.05,0,0,1,.45,1.1,9.12,9.12,0,0,1,.44,2.26,11,11,0,0,1-.55,4,20.16,20.16,0,0,1-3.21,5.92,42.68,42.68,0,0,1-8.8,8.46l-2.49-2.86c1.17-1.37,2.39-2.84,3.48-4.31a36.76,36.76,0,0,0,3-4.5,15.63,15.63,0,0,0,1.82-4.42,4.58,4.58,0,0,0,.07-1.7,2.22,2.22,0,0,0-.18-.55,1.59,1.59,0,0,0-.13-.22l-.32-.54a105.06,105.06,0,0,0-6.27-9.11c-1.11-1.47-2.3-2.88-3.5-4.27-.59-.7-1.2-1.38-1.81-2.06s-1.27-1.36-1.8-1.89Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 361.111px 223.29px;"
                                id="elsmqffopsee" class="animable"></path>
                            <path d="M357.36,240.59l-7.47-1.22,3.91,6.54s4.81-.17,6.18-3Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 354.935px 242.64px;"
                                id="elcdozuaqjzco" class="animable"></path>
                            <polygon points="344.37 242.39 347.93 247.7 353.8 245.91 349.89 239.37 344.37 242.39"
                                style="fill: rgb(228, 137, 123); transform-origin: 349.085px 243.535px;"
                                id="els8hopedv09m" class="animable"></polygon>
                            <path
                                d="M357,411.28a2.15,2.15,0,0,1-1.43-.39,1,1,0,0,1-.29-.94.59.59,0,0,1,.35-.5c.87-.39,3.15,1.07,3.41,1.24a.16.16,0,0,1,.07.18.16.16,0,0,1-.13.14A8.85,8.85,0,0,1,357,411.28Zm-1-1.55a.72.72,0,0,0-.22,0,.26.26,0,0,0-.15.23.67.67,0,0,0,.18.63c.38.34,1.36.39,2.67.13A6.59,6.59,0,0,0,356,409.73Z"
                                style="fill: #2993FF; transform-origin: 357.187px 410.336px;" id="elxeblrlz7xt"
                                class="animable"></path>
                            <path
                                d="M359,411l-.09,0c-.71-.41-2.08-2-1.91-2.87a.65.65,0,0,1,.6-.5.9.9,0,0,1,.75.24c.82.72.83,2.88.83,3a.19.19,0,0,1-.09.15Zm-1.28-3h-.08c-.22,0-.27.12-.29.21-.1.51.75,1.73,1.46,2.3a4.09,4.09,0,0,0-.69-2.36A.57.57,0,0,0,357.67,408Z"
                                style="fill: #2993FF; transform-origin: 358.083px 409.32px;" id="el6k2gvkc81k"
                                class="animable"></path>
                            <path
                                d="M322.92,411.28a2.77,2.77,0,0,1-1.81-.46,1,1,0,0,1-.33-.86.58.58,0,0,1,.3-.47c.93-.52,3.91,1,4.25,1.19a.2.2,0,0,1,.09.19.17.17,0,0,1-.14.14A12.47,12.47,0,0,1,322.92,411.28Zm-1.33-1.55a.62.62,0,0,0-.33.07.21.21,0,0,0-.12.19.65.65,0,0,0,.2.57c.46.41,1.69.48,3.35.2A9.73,9.73,0,0,0,321.59,409.73Z"
                                style="fill: #2993FF; transform-origin: 323.097px 410.337px;" id="el45q187uoe62"
                                class="animable"></path>
                            <path
                                d="M325.25,411l-.08,0c-.89-.4-2.66-2-2.52-2.87,0-.2.18-.45.67-.5a1.32,1.32,0,0,1,1,.31c.94.78,1.12,2.8,1.12,2.89a.17.17,0,0,1-.07.16A.19.19,0,0,1,325.25,411Zm-1.79-3h-.11c-.32,0-.34.16-.35.2-.08.51,1.12,1.78,2,2.33a4.16,4.16,0,0,0-1-2.31A.93.93,0,0,0,323.46,408Z"
                                style="fill: #2993FF; transform-origin: 324.042px 409.314px;" id="elalmmqbxmf6i"
                                class="animable"></path>
                            <path
                                d="M337.07,179.3c-.29,4.52-1.07,13.7,2.4,16.24,0,0-.63,4.63-8.82,5.71-9,1.17-4.89-3.91-4.89-3.91,4.77-1.82,4.16-5.45,2.86-8.77Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 332.147px 190.363px;"
                                id="el8k2mlo6holf" class="animable"></path>
                            <path
                                d="M318.44,171.31a.34.34,0,0,1-.26-.12,2.83,2.83,0,0,0-2.35-1,.35.35,0,0,1-.41-.3.36.36,0,0,1,.31-.4,3.51,3.51,0,0,1,3,1.26.36.36,0,0,1-.27.59Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 317.115px 170.409px;"
                                id="elsicas3efl1" class="animable"></path>
                            <path d="M316.88,175.74a16.28,16.28,0,0,1-1.63,4.1,2.58,2.58,0,0,0,2.19.12Z"
                                style="fill: rgb(222, 87, 83); transform-origin: 316.345px 177.944px;"
                                id="el0yg0c4j4wyja" class="animable"></path>
                            <path
                                d="M317.28,174.64c.08.6-.17,1.12-.56,1.18s-.78-.4-.85-1,.17-1.12.56-1.17S317.21,174,317.28,174.64Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 316.576px 174.736px;"
                                id="elz8n7211n64" class="animable"></path>
                            <path d="M316.61,173.66l-1.49-.23S316,174.46,316.61,173.66Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 315.865px 173.697px;"
                                id="el0iorilg0coxl" class="animable"></path>
                            <polygon points="333.49 410.84 325.99 410.84 325.49 393.49 332.99 393.49 333.49 410.84"
                                style="fill: rgb(228, 137, 123); transform-origin: 329.49px 402.165px;"
                                id="ely331vg1dv6o" class="animable"></polygon>
                            <polygon points="367.54 410.84 360.04 410.84 357.63 393.49 365.13 393.49 367.54 410.84"
                                style="fill: rgb(228, 137, 123); transform-origin: 362.585px 402.165px;"
                                id="elx55rp37ww2s" class="animable"></polygon>
                            <path
                                d="M359.58,410H368a.59.59,0,0,1,.59.51l1,6.67a1.2,1.2,0,0,1-1.2,1.33c-2.93-.05-4.35-.22-8.05-.22-2.28,0-5.61.23-8.75.23s-3.31-3.11-2-3.39c5.87-1.26,6.8-3,8.77-4.67A2,2,0,0,1,359.58,410Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 359.208px 414.26px;"
                                id="elfzpqf4qg0bn" class="animable"></path>
                            <path
                                d="M325.74,410h8.41a.6.6,0,0,1,.6.51l1,6.67a1.2,1.2,0,0,1-1.2,1.33c-2.93-.05-4.35-.22-8.05-.22-2.28,0-7,.23-10.14.23s-3.31-3.11-2-3.39c5.87-1.26,8.18-3,10.16-4.67A2,2,0,0,1,325.74,410Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 324.673px 414.26px;"
                                id="elilnrhgdmqkj" class="animable"></path>
                            <polygon points="325.49 393.49 325.75 402.44 333.25 402.44 332.99 393.49 325.49 393.49"
                                style="fill: rgb(206, 111, 100); transform-origin: 329.37px 397.965px;"
                                id="eloa1ohla71xl" class="animable"></polygon>
                            <polygon points="365.13 393.49 357.63 393.49 358.88 402.44 366.37 402.44 365.13 393.49"
                                style="fill: rgb(206, 111, 100); transform-origin: 362px 397.965px;"
                                id="el38sfrjlr237" class="animable"></polygon>
                            <path
                                d="M337.17,169.94c.51,7.42.88,10.55-2.34,14.82-4.85,6.41-14.07,5.42-16.79-1.7-2.45-6.41-2.87-17.46,3.95-21.34A10.15,10.15,0,0,1,337.17,169.94Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 326.957px 174.705px;"
                                id="eldqlj4ze1wnb" class="animable"></path>
                            <path
                                d="M341.49,176.83c4.16,2.32,7.25-3.4,7.25-3.4s-7.46.81-6.79-3.63c.88-5.89-3.34-13.05-13.92-12.13-.59.05-1.15.12-1.7.21a5.44,5.44,0,0,0-6.58,1.52c-3,.25-7.05,3.83-4.3,8.56a4.35,4.35,0,0,1,.88-1.47c.23,2.77,2.65,7.17,5.67,7.46.65,3.79-1.87,8.18-1,12.14,1.29,5.71,10.92,7,10.92,7a4.17,4.17,0,0,1,.56-4.41c6.54,3,10.85.07,10.85.07-4.46-1.66-3.11-4.62-3.11-4.62a6.51,6.51,0,0,0,8.49-3.09A7.68,7.68,0,0,1,341.49,176.83Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 331.638px 175.223px;"
                                id="elwpf2l8hisdb" class="animable"></path>
                            <path
                                d="M324.61,175.09a5.4,5.4,0,0,1-1.5,3.87c-1.32,1.37-2.94.41-3.38-1.34-.39-1.58-.17-4.19,1.55-4.91A2.44,2.44,0,0,1,324.61,175.09Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 322.089px 176.076px;"
                                id="el8wkeq2p64wx" class="animable"></path>
                            <path
                                d="M330.84,244.22s1.9,49.36,6.42,78.34c3.64,23.42,19.81,78.14,19.81,78.14h10.22s-8.43-52.85-10.28-76c-4.68-58.59,7.47-71.17-4-83.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 349.065px 321.015px;"
                                id="eltyowygd64p" class="animable"></path>
                            <path
                                d="M339.38,259.83s-4.62-.8-7.32,8c1,16.67,2.71,38.79,5.2,54.73.55,3.55,1.39,7.83,2.42,12.52C337.73,306.92,339.38,259.83,339.38,259.83Z"
                                style="fill: rgb(22, 31, 51); transform-origin: 335.87px 297.446px;"
                                id="el40orhjfk8yt" class="animable"></path>
                            <path
                                d="M322.87,245.26s-8.42,54.61-7.93,77.46c.51,23.77,9.22,78,9.22,78h10.13s-1.6-52.82-.71-76.16c1-25.45,11.39-82.17,11.39-82.17Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 329.945px 321.555px;"
                                id="el687viybbhg" class="animable"></path>
                            <polygon points="368.77 401.18 355.18 401.18 354.12 396.62 368.67 396.72 368.77 401.18"
                                style="fill: #2993FF; transform-origin: 361.445px 398.9px;" id="elqv3ly7l81ea"
                                class="animable"></polygon>
                            <g id="el26dda2h550x">
                                <polygon points="368.77 401.18 355.18 401.18 354.12 396.62 368.67 396.72 368.77 401.18"
                                    style="opacity: 0.2; transform-origin: 361.445px 398.9px;" class="animable"
                                    id="el6plo851pbbm"></polygon>
                            </g>
                            <path
                                d="M352.5,195.55c3.91.38,9.85,11.49,9.85,11.49l-9.87,7.57s-8.17-7.17-7.2-11.2C346.29,199.22,348.75,195.2,352.5,195.55Z"
                                style="fill: #2993FF; transform-origin: 353.775px 205.069px;" id="elnb3gy4pkaz"
                                class="animable"></path>
                            <g id="el8w3j0hj1q2a">
                                <path
                                    d="M352.5,195.55c3.91.38,9.85,11.49,9.85,11.49l-9.87,7.57s-8.17-7.17-7.2-11.2C346.29,199.22,348.75,195.2,352.5,195.55Z"
                                    style="opacity: 0.1; transform-origin: 353.775px 205.069px;" class="animable"
                                    id="el03v1djrot6pa"></path>
                            </g>
                            <path
                                d="M349.55,200.33a10.13,10.13,0,0,0-3.06-.34,16.91,16.91,0,0,0-1.21,3.42c-1,4,7.2,11.2,7.2,11.2l.73-.56Z"
                                style="fill: #2993FF; transform-origin: 349.203px 207.296px;" id="el9f52p8mub6r"
                                class="animable"></path>
                            <g id="elbc9972ljz1a">
                                <path
                                    d="M349.55,200.33a10.13,10.13,0,0,0-3.06-.34,16.91,16.91,0,0,0-1.21,3.42c-1,4,7.2,11.2,7.2,11.2l.73-.56Z"
                                    style="opacity: 0.3; transform-origin: 349.203px 207.296px;" class="animable"
                                    id="elbbjb7gzcyl"></path>
                            </g>
                            <path
                                d="M319.52,211c-2.85,7.21-5.85,14.54-8.24,21.77-.16.46-.29.9-.43,1.35l-.34,1.11a1.83,1.83,0,0,0,0,1,7.52,7.52,0,0,0,2.59,3.1,42.19,42.19,0,0,0,9.69,5.19l-.9,3.68a34.69,34.69,0,0,1-12.08-3.94,12.93,12.93,0,0,1-5.39-5.46,8.37,8.37,0,0,1-.69-4.76,5.58,5.58,0,0,1,.1-.59l.1-.42.17-.76c.12-.51.24-1,.37-1.5,1-4,2.28-7.8,3.63-11.57s2.76-7.49,4.35-11.2Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 313.215px 228.1px;"
                                id="eljl3xlit98" class="animable"></path>
                            <path
                                d="M313.45,200.88s-3.38,1.71,9.42,44.38l30.18-3.94c-2.12-12.22-3.12-19.79-.55-45.77a91,91,0,0,0-13,0,95.5,95.5,0,0,0-13.71,1.8C320,198.64,313.45,200.88,313.45,200.88Z"
                                style="fill: #2993FF; transform-origin: 333.048px 220.289px;" id="elahibbu85ypp"
                                class="animable"></path>
                            <g id="elkfhvk4qj1vr">
                                <path
                                    d="M313.45,200.88s-3.38,1.71,9.42,44.38l30.18-3.94c-2.12-12.22-3.12-19.79-.55-45.77a91,91,0,0,0-13,0,95.5,95.5,0,0,0-13.71,1.8C320,198.64,313.45,200.88,313.45,200.88Z"
                                    style="opacity: 0.1; transform-origin: 333.048px 220.289px;" class="animable"
                                    id="el5vzqkjrw4do"></path>
                            </g>
                            <path
                                d="M353.27,239.49,355,242c.13.2-.09.44-.43.49l-31.65,4.14c-.27,0-.52-.07-.56-.24l-.62-2.67c-.05-.18.17-.37.47-.41l30.56-4A.55.55,0,0,1,353.27,239.49Z"
                                style="fill: #2993FF; transform-origin: 338.385px 242.967px;" id="el8qw6gvra8se"
                                class="animable"></path>
                            <g id="eldsqqnvwua7p">
                                <path
                                    d="M353.27,239.49,355,242c.13.2-.09.44-.43.49l-31.65,4.14c-.27,0-.52-.07-.56-.24l-.62-2.67c-.05-.18.17-.37.47-.41l30.56-4A.55.55,0,0,1,353.27,239.49Z"
                                    style="opacity: 0.2; transform-origin: 338.385px 242.967px;" class="animable"
                                    id="elgqrevurxp2a"></path>
                            </g>
                            <path
                                d="M349.61,243.44l.82-.11c.16,0,.27-.12.25-.22l-.84-3.46a.29.29,0,0,0-.34-.14l-.82.1c-.17,0-.28.12-.25.23l.84,3.45C349.29,243.4,349.45,243.46,349.61,243.44Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 349.554px 241.471px;"
                                id="el6wrhictisuj" class="animable"></path>
                            <path
                                d="M329.77,246l.82-.11c.16,0,.28-.12.25-.22l-.84-3.46a.31.31,0,0,0-.34-.15l-.82.11c-.16,0-.28.12-.25.22l.84,3.46C329.45,246,329.61,246.06,329.77,246Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 329.715px 244.038px;"
                                id="elmqqt66rwzx" class="animable"></path>
                            <path d="M314.86,215.36c.83,3.86,2,8.75,3.71,14.94l.37-15.69Z"
                                style="fill: #2993FF; transform-origin: 316.9px 222.455px;" id="eln85fv8oe18"
                                class="animable"></path>
                            <g id="ellc7z8vasaog">
                                <path d="M314.86,215.36c.83,3.86,2,8.75,3.71,14.94l.37-15.69Z"
                                    style="opacity: 0.3; transform-origin: 316.9px 222.455px;" class="animable"
                                    id="el42j6ucnmh5f"></path>
                            </g>
                            <path
                                d="M313.45,200.88c-3.75,1.51-7,14.34-7,14.34l12.9,6.28s6.23-15.69,3.44-18.75S317.77,199.15,313.45,200.88Z"
                                style="fill: #2993FF; transform-origin: 314.979px 210.702px;" id="el59o329zq2sq"
                                class="animable"></path>
                            <g id="elup1tkcugks">
                                <path
                                    d="M313.45,200.88c-3.75,1.51-7,14.34-7,14.34l12.9,6.28s6.23-15.69,3.44-18.75S317.77,199.15,313.45,200.88Z"
                                    style="opacity: 0.1; transform-origin: 314.979px 210.702px;" class="animable"
                                    id="el0rtey3wc09wm"></path>
                            </g>
                            <polygon points="336.02 401.18 322.43 401.18 321.37 396.62 336.5 396.72 336.02 401.18"
                                style="fill: #2993FF; transform-origin: 328.935px 398.9px;" id="ellsrpsr71pkr"
                                class="animable"></polygon>
                            <g id="el0f9j5xjz6lp">
                                <polygon points="336.02 401.18 322.43 401.18 321.37 396.62 336.5 396.72 336.02 401.18"
                                    style="opacity: 0.2; transform-origin: 328.935px 398.9px;" class="animable"
                                    id="elmarlxkv2jsp"></polygon>
                            </g>
                            <path
                                d="M323,243.28l-1.09-.45a1.64,1.64,0,0,0-2.24,1.76l.79,5.21a1.78,1.78,0,0,0,2.36,1.42,4,4,0,0,0,1.1-.61,3,3,0,0,0,1.08-2.48l-.11-2.16A3,3,0,0,0,323,243.28Z"
                                style="fill: rgb(228, 137, 123); transform-origin: 322.329px 247.016px;"
                                id="el1krjhn4h0ks" class="animable"></path>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    @endif
    <!-- table section start -->

    {{ $books->links('pagination::tailwind') }}

</x-author-layout>
