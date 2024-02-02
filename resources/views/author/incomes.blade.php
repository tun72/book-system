<x-author-layout>

    {{-- @dd($earns) --}}
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 mb-5">
        <h3 class="text-3xl font-bold dark:text-white">Your Incomes</h3>

    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tbody>

                @foreach ($earns as $earn)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{ $earn->user->name }} buy a book
                        </th>

                        <td class="px-6 py-4">
                            <span
                                class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">+{{ $earn->ggcoin }}</span>
                            coins
                        </td>

                        <td class="px-6 py-4">
                            {{ $earn->created_at }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-author-layout>
