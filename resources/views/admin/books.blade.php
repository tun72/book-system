<x-admin-layout>
    <h1 class="text-4xl  font-bold mb-4">Books</h1>
    <div class="w-full">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-1/2">
                    <form class="flex items-center" action="/admin/books">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" name="id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search" required="">
                        </div>
                    </form>
                </div>
                <div
                    class="w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                    <div class="flex items-center space-x-3 w-full md:w-auto">

                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                            class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div id="filterDropdown"
                            class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                <li>
                                    <a href="/admin/books/?filter=all"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        all</a>
                                </li>
                                <li>
                                    <a href="/admin/books/?status=complete"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        complete</a>
                                </li>
                                <li>
                                    <a href="/admin/books/?status=ongoing"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        ongoing</a>
                                </li>
                                <li>
                                    <a href="/admin/books/?price=paid"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Paid</a>
                                </li>
                                <li>
                                    <a href="/admin/books/?price=free"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        free</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Image
                            </th>

                            <th scope="col" class="px-4 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Chapters
                            </th>
                            <th scope="col" class="px-4 py-3"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $book->id }}</td>
                                <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                    <img src="{{ $book->image }}" alt=""
                                        class="max-w-[70px] max-h-[80px]  rounded-lg">
                                </th>

                                <td class="px-4 py-3">{{ $book->title }}</td>
                                <td class="px-4 py-3">{{ $book->created_at }}</td>
                                <td class="px-4 py-3">{{ $book->status }}</td>
                                <td class="px-4 py-3">{{ $book->ggcoin }}</td>
                                <td class="px-4 py-3">{{ count($book->chapters) }}</td>
                                <td class="px-4 py-3">
                                    <button id="apple-imac-{{ $book->id }}-dropdown-button"
                                        data-dropdown-toggle="apple-imac-{{ $book->id }}-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="apple-imac-{{ $book->id }}-dropdown"
                                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="apple-imac-27-dropdown-button">
                                            <li
                                                class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">
                                                <a type="button" href="/book-details/{{ $book->slug }}"
                                                    class="py-2 px-4 w-full cursor-pointer">
                                                    Detail</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#" data-modal-target="delete-modal-{{ $book->id }}"
                                                data-modal-toggle="delete-modal-{{ $book->id }}"
                                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <div id="delete-modal-{{ $book->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-2xl text-center">Are U Sure?</h3>
                                            <form action="/admin/book/{{ $book->id }}/delete" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center mt-6 space-x-2 rtl:space-x-reverse justify-center">
                                                    <button type="submit"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Yes</button>
                                                    <button data-modal-hide="progress-modal-{{ $book->id }}"
                                                        type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Not</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="px-4 py-3">
                {{ $books->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</x-admin-layout>
