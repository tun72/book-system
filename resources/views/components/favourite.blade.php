<!-- Modal toggle -->


<!-- Main modal -->
<div id="model-fav" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-[60rem] max-h-[100vh]">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Favourited Books
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="model-fav">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="mx-auto">
                    <!-- Book Cards -->
                    @if (count($books) > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach ($books as $book)
                                <!-- Book Card 1 -->
                                <div class=" dark:bg-gray-700 p-6 rounded-md">
                                    <a href="/book-details/{{ $book->slug }}"><img src="{{ $book->image }}"
                                            alt="Book Cover 1" class="w-full h-30 object-cover mb-4 rounded-md">
                                        <h3 class="text-lg font-semibold mb-2">{{ $book->title }}</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Author: {{ $book->user->name }}</p>
                                    </a>
                                </div>
                            @endforeach


                            <!-- Add more book cards as needed -->

                        </div>
                    @else
                        <p>No book found</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
