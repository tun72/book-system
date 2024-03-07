<x-author-layout>



    @php
        $index = 0;
    @endphp





    <section class="">
        <div class="pt-4 rounded  dark:text-gray-100 dark:bg-gray-900">
            <div class="flex px-6 pb-4 border-b dark:border-gray-700 justify-between">
                <h2 class="text-xl font-bold dark:text-gray-400">Incomes</h2>
                <div>
                    <span
                        class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ auth()->user()->ggcoin }}
                        coins</span>
                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                        class="inline-flex  items-center p-2 text-xs font-medium text-center text-gray-900  rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 4 15">
                            <path
                                d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-4 overflow-x-auto  bg-white">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="text-xs text-left text-gray-500 dark:text-gray-400">
                            <th class="px-6 pb-3 font-medium">Income ID</th>
                            <th class="px-6 pb-3 font-medium ">Book</th>
                            <th class="px-6 pb-3 font-medium">User Name</th>
                            <th class="px-6 pb-3 font-medium">Coins</th>
                            <th class="px-6 pb-3 font-medium">Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($earns as $earn)
                            @if ($earn->book)
                                <tr
                                    class="text-sm {{ $index % 2 != 0 ? 'bg-gray-100' : '' }} dark:text-gray-400 dark:bg-transparent">
                                    <td class="px-6 py-5 font-medium">#{{ $earn->id }}</td>
                                    <td class="px-6 py-5 font-medium "><a href="#"
                                            class="text-blue-400">{{ $earn->book->title }}</a></td>
                                    <td class="px-6 py-5 font-medium ">{{ $earn->user->name }}</td>
                                    <td>
                                        <span
                                            class="inline-block px-2 py-1 text-center text-green-600 bg-green-100 rounded-full dark:text-green-700 dark:bg-green-200">+
                                            {{ $earn->ggcoin }} coins</span>
                                    </td>

                                    <td class="px-6 py-5 font-medium ">{{ $earn->created_at->diffForHumans() }}</td>


                                </tr>
                                @php
                                    $index++;
                                @endphp
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </section>

</x-author-layout>


<div id="dropdownDots"
    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
        <li>
            <a href="/author/incomes/sell"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell</a>
        </li>
    </ul>
    <div class="py-2">
        <a href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
            link</a>
    </div>
</div>
