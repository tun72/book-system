<div id="dropdownNotification"
    class="z-[100] hidden left-2 w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
    aria-labelledby="dropdownNotificationButton">
    <div
        class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
        Notifications
    </div>
    @if (count($notifications))
        <div class="divide-y divide-gray-100 dark:divide-gray-700">


            @foreach ($notifications as $notification)
                @php
                    $url = '#';
                    if ($notification->book_id) {
                        $url = '/book-details/' . $notification->book->slug;
                    } elseif ($notification->chapter_id) {
                        $url = '/book/chapter/' . $notification->chapter->slug . '/read';
                    }
                @endphp
                <a href="{{ $url }}" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex-shrink-0">
                        <div class="rounded-full w-11 h-11 overflow-hidden">
                            <img src="{{ $notification->user->imageUrl }}" alt="" class="rounded-full">
                        </div>
                        <div
                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                            <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                <path
                                    d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">{{ $notification->user->name }}
                            <span class="font-semibold text-gray-900 dark:text-white">{{ $notification->about }}</span>:
                        </div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">
                            {{ $notification->created_at->diffForHumans() }}</div>
                    </div>
                </a>
            @endforeach

        </div>
        <a href="#"
            class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
            <div class="inline-flex items-center ">
                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path
                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                </svg>
                View all
            </div>
        </a>
    @else
    <h4 class="py-2 text-center">No notifications</h4>
    @endif


</div>
