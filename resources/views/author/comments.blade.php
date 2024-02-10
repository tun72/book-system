<x-author-layout>
    <div class="relative overflow-x-auto  sm:rounded-lg">
        <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 mb-5">
            <h3 class="text-3xl font-bold dark:text-white">Comments & Ratings</h3>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Comment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rating
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Book
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Replied
                    </th>

                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                alt="Jese image">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $review->user->name }}</div>
                                <div class="font-normal text-gray-500">{{ $review->user->email }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $review->body }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->rating }}⭐
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->book->title }}
                        </td>
                        <td class="px-6 py-4">
                            <i class='fas fa-{{ $review->isCommented(auth()->user()) ? 'check-circle' : 'clock' }} ml-2 text-lg'></i>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <a href="/books/{{ $review->book->slug}}/review" type="button"
                                data-modal-target="editUserModal" data-modal-show="editUserModal"
                                class="font-medium text-blue-600 dark:text-blue-500">Detail</a>
                            <a href="#" data-modal-target="progress-modal-{{ $review->id }}"
                                data-modal-toggle="progress-modal-{{ $review->id }}">full</a>
                        </td>
                    </tr>


                    <div id="progress-modal-{{ $review->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="progress-modal-{{ $review->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5">
                                    <img src="{{ $review->user->imageUrl }}" alt=""
                                        class="w-10 h-10 rounded-full mb-4">
                                    <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">
                                        {{ $review->user->name }}</h3>
                                    <p class="text-gray-500 dark:text-gray-400 mb-6">{{ $review->body }}</p>

                                    @if ($review->isCommented(auth()->user()))
                                    <div class="flex items-center mt-6 space-x-2 rtl:space-x-reverse mb-4">
                                        <p class="text-green-500">{{    "Successfully Replied" }}</p>
                                    </div>
                                    @else
                                    <form action="/reviews/{{ $review->id }}/comment" method="POST">
                                        @csrf
                                        <label for="chat" class="sr-only">Your message</label>
                                        <div class="flex items-center  rounded-lg bg-gray-50 dark:bg-gray-700">
                                            <textarea id="chat" rows="1" name="body"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Your Reply..."></textarea>
                                            <button type="submit"
                                                class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                                                <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 18 20">
                                                    <path
                                                        d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                                                </svg>
                                                <span class="sr-only">Send message</span>
                                            </button>
                                        </div>
                                    </form>
                                    @endif
                                   
                             <!-- Modal footer -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </tbody>
        </table>
        <!-- Edit user modal -->
    </div>
</x-author-layout>
