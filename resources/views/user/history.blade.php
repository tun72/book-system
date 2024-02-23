<x-user-layout>

    <style>
        .main {
            padding: 10px 0 0 0;
        }
    </style>
    <section class="items-center   font-poppins dark:bg-gray-800">
        @if (count($histories))
            <div class="justify-center max-w-6xl mx-auto ">
                <div class="max-w-xl mx-auto">
                    <div class="text-center ">
                        <div class="relative flex flex-col items-center">
                            <h1 class="text-6xl font-bold leading-tight dark:text-gray-300"> History
                            </h1>
                            <div class="flex w-24 mt-1 mb-10 overflow-hidden rounded">
                                <div class="flex-1 h-2 bg-blue-200">
                                </div>
                                <div class="flex-1 h-2 bg-blue-400">
                                </div>
                                <div class="flex-1 h-2 bg-blue-600">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($histories as $history)
                    <div class="w-full mx-auto lg:max-w-3xl">
                        <div class="relative flex">
                            <div class="flex flex-col items-center w-10 mr-4 md:w-24">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-200 rounded-full dark:bg-gray-600">
                                        <div class="w-4 h-4 bg-blue-600 rounded-full dark:bg-blue-400"></div>
                                    </div>
                                </div>
                                <div class="w-px h-full bg-blue-300 dark:bg-gray-600"></div>
                            </div>
                            <div class="flex-auto">
                                <h2
                                    class="inline-block px-4 py-2 mb-4 text-xs font-medium text-gray-100 bg-gradient-to-r from-blue-500 to-blue-900 dark:from-blue-400 dark:to-blue-500 rounded-3xl dark:text-gray-100">
                                    {{ $history->created_at }}</h2>
                                <div
                                    class="relative flex-1 mb-10 bg-white border-b-4 border-blue-200 shadow dark:border-gray-700 rounded-3xl dark:bg-gray-900">
                                    <div class="relative z-20 p-6">
                                        <p class="mb-2 text-xl font-bold text-gray-600 dark:text-gray-400">
                                            {{ $history->title }}
                                        </p>
                                        <p class="text-gray-700 dark:text-gray-500">
                                            {{ $history->about }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No history found!</p>
        @endif
    </section>


</x-user-layout>
