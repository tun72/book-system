<x-home-layout>


    @if (count($readlists) === 0)
        <p class="text-primary text-center mt-5 fs-3">No book found 😓</p>
    @else
        <section class="flex items-center  font-poppins dark:bg-gray-800 pt-2">
            <div class="justify-center flex-1 max-w-6xl  mx-auto text-left">
                <div class="text-start mb-3 flex items-center justify-between">
                    <h4 class="text-3xl font-bold capitalize dark:text-white">Read Lists</h4>
                    <a href="#" data-modal-target="readlist-modal" data-modal-toggle="readlist-modal"
                        class=" hover:bg-white transition-all  flex items-center justify-center rounded-lg hover:shadow-lg">New
                        Read List +</a>
                </div>
                @foreach ($readlists as $readlist)
                    <div class=" bg-white dark:bg-gray-900  mb-6 flex items-center gap-4">
                        <div>
                            <img src="{{ count($readlist->books) > 0 ? $readlist->books[0]->image : 'https://img.freepik.com/premium-vector/fake-vector-stamp-white_116137-1000.jpg' }}"
                                alt="" class="object-cover w-full rounded-md h-60 lg:h-[7rem]">
                        </div>
                        <div class="px-4 py-4 lg:px-0 flex-auto flex flex-col gap-2">
                            <a href="/readlist/{{ $readlist->id }}/show">
                                <h2 class=" text-xl font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400">
                                    {{ $readlist->title }}</h2>
                            </a>
                            <p class="text-sm  dark:text-gray-400 text-blue-500">
                                {{ count($readlist->books) }} Book
                            </p>

                            <span
                                class="text-xs font-medium text-gray-700 dark:text-gray-400">{{ $readlist->created_at }}</span>
                        </div>
                        <div class="mr-3"><button id="dropdownMenuIconHorizontalButton"
                                data-dropdown-toggle="dropdownDotsHorizontal-{{ $readlist->id }}"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownDotsHorizontal-{{ $readlist->id }}"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Private</a>
                                    </li>
                                </ul>
                                <form class="py-2" action="/readlist/{{ $readlist->id }}/delete" method="POST">
                                    @csrf
                                    <button
                                        class="px-4 py-2 text-sm text-red-700  dark:hover:bg-red-600 dark:text-red-200">Delete
                                        Lists</button>
                                </form>
                            </div>
                        </div>

                    </div>
                @endforeach
                {{ $readlists->links('pagination::tailwind') }}
            </div>

        </section>

    @endif
</x-home-layout>

<div id="readlist-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-[40rem] max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create a Reading List
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="readlist-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="/readlist/new" method="POST">

                    <div>
                        @csrf
                        <label for="readlist" class="block mb-5 text-sm font-medium text-gray-900 dark:text-white">Give
                            your Reading List a name. It helps to be specific.</label>
                        <input type="text" name="title" id="readlist"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="e.g.Best Horror Books" required>
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                        List</button>
                </form>
            </div>
        </div>

    </div>
</div>
