<x-author-layout>
    <style>
        .main {
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px
        }
    </style>
    @if (count($books))

        <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 mb-5">
            <h3 class="text-3xl font-bold dark:text-white">All Books</h3>

            <div>
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


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

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
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1
                    class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">
                    404</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Something's
                    missing.</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page.
                    You'll find lots to explore on the home page. </p>
                <a href="#"
                    class="inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back
                    to Homepage</a>
            </div>
        </div>
    @endif
    <!-- table section start -->

    {{-- <section class="w-full ">
        <h3 class="text-3xl font-bold dark:text-white">All Books</h3>
        <div class="py-8">
            <div
                class="pl-6 text-lg font-semibold underline-offset-[9px] decoration-[3px] decoration-blue-500 text-blue-500 ">
                <h1 class="">Videos</h1>
            </div>
            <div class="w-full h-[1px] bg-gray-300 mt-1"></div>

            <div class="w-full flex items-center pl-6 mt-3 gap-4">
                <span class=" text-lg"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                <div
                    class="w-fit px-3 py-1 bg-gray-400 rounded-2xl flex justify-center items-center gap-2 text-gray-300">
                    <p>ShineSiLwin</p><span><i class="fa-solid fa-xmark"></i></span>
                </div>
                <div class="w-[80%]">
                    <input type="text" class="w-full outline-none  caret-blue-500 text-lg" placeholder="Filter">
                </div>



            </div>
            <div class="w-full h-[1px] bg-gray-300 mt-3"></div>




            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div
                    class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">


                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Videos
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Visibility
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Restrictions
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Data
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Views
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Comments
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Likes vs Dislike
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-[150px]" src="https://i.ytimg.com/vi/w0MMz0Of3qI/maxresdefault.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Neil Sims</div>
                                    <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">

                                    <span><i class="fa-solid fa-earth-americas"></i></span>
                                    <h1>Public</h1>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <h1>Make for kids</h1>
                            </td>
                            <td class="px-6 py-4">

                                <h1>4 january 2024,</h1>
                                <h1>Pulished</h1>

                            </td>
                            <td class="px-6 py-4 text-center">
                                <h1>4</h1>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <h1>0</h1>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <h1>-</h1>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>


        </div>


        </div>
    </section> --}}

</x-author-layout>
