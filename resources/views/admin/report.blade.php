<x-admin-layout>


    <div class="flex justify-between items-center mb-3">
        <h3 class="text-2xl">Reports</h3>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        UserName
                    </th>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        About
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Book Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                {{-- @dd($reports) --}}
                @foreach ($reports as $report)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $report->user->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $report->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $report->about }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $report->book->title }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
