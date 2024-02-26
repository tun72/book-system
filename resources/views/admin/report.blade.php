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
                        Book Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        About
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
                            <span class="me-1">#{{ $report->book->id }}</span>{{ $report->book->title }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $report->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $report->about }}
                        </td>

                        <td class="px-6 py-4">
                            <a href="#" data-modal-target="report-{{ $report->id }}"
                                data-modal-toggle="report-{{ $report->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">detail</a>
                        </td>
                    </tr>

                    {{-- <div id="report-{{ $report->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full ">
                        <div class="relative p-4 w-full max-w-xl h-full ">
                            <!-- Modal content -->
                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                <!-- Modal header -->
                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                    
                                    <div>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="report-{{ $report->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div> --}}

                    <div id="report-{{ $report->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full bg-slate-200/20 backdrop-blur-sm">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Reports Detail
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="report-{{ $report->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <div class="text-lg text-gray-900 md:text-xl dark:text-white p-4">
                                    
                                    <p class="text-base">
                                        User Name - {{ $report->user->name }}
                                    </p>
                                    <p class="text-base">
                                        Book Id - {{ $report->book->id }}
                                    </p>
                                    <p class="text-base">
                                        Title - {{ $report->title }}
                                    </p>
                                    <p class="text-base">
                                        About - {{ $report->about }}
                                    </p>
                                </div>
                                <div
                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="report-{{ $report->id }}" type="button"
                                        class="py-2.5 px-5 text-sm font-medium text-blue-100 focus:outline-none bg-button-800 rounded-lg border border-gray-200 hover:bg-blue-500 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
