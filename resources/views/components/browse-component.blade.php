@vite('resources/js/browse.js')
<div id="browse-modal" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center h-full bg-slate-200/20 backdrop-blur-sm">
    <div class="p-4 w-full max-w-[40rem] h-[33rem]">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow dark:bg-gray-700 h-full overflow-x-hidden overflow-y-scroll">
            <form class="  font-poppins dark:bg-gray-800 px-4 py-4">
                <div class="mx-auto w-full">
                    <h2 class="text-2xl font-bold dark:text-gray-400">Browse Book</h2>
                    <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>

                    <div class="w-full ">
                        <div id="accordion-open" data-accordion="open">
                            <h2 id="accordion-open-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl   gap-3"
                                    data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                                    aria-controls="accordion-open-body-1">
                                    <span class="flex items-center">Genres</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-open-body-1" class="hidden px-4 py-4 border border-b-0 border-gray-200"
                                aria-labelledby="accordion-open-heading-1">

                                <ul class="flex flex-col gap-4">
                                    @foreach ($genres as $gen)
                                        <li>
                                            <label for="" class="flex items-center dark:text-gray-400 ">
                                                <input type="checkbox" class="w-4 h-4 mr-2" name="genres"
                                                    value="{{ $gen->slug }}">
                                                <span class="text-lg">{{ $gen->name }}</span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                            <h2 id="accordion-open-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200  gap-3"
                                    data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                                    aria-controls="accordion-open-body-2">
                                    <span class="flex items-center">Author</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-open-body-2" class="hidden px-4 py-4 border border-b-0 border-gray-200"
                                aria-labelledby="accordion-open-heading-2">
                                <ul class="flex flex-col gap-4">
                                    @foreach ($authors as $author)
                                        <li>
                                            <label for="" class="flex items-center dark:text-gray-400 ">
                                                <input type="checkbox" class="w-4 h-4 mr-2" name="author"
                                                    value="{{ $author->username }}">
                                                <span class="text-lg">{{ $author->name }}</span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <h2 id="accordion-open-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200  gap-3"
                                    data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                                    aria-controls="accordion-open-body-3">
                                    <span class="flex items-center">Price</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-open-body-3" class="hidden px-4 py-4 mb-10"
                                aria-labelledby="accordion-open-heading-3">

                                <div class="relative ">
                                    <label for="labels-range-input" class="sr-only">Labels range</label>
                                    <input id="labels-range-input ggcoin" type="range" value="0" min="100"
                                        name="ggcoin" max="15000" 
                                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span
                                        class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min
                                        ($1000)</span>
                                    <span
                                        class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$5000</span>
                                    <span
                                        class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$10000</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max
                                        ($15000)</span>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="flex mt-4 w-full items-center justify-end">
                    <button type="button" id="browse-form"
                        class=" focus:outline-none self-end text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Filter</button>
                </div>

            </form>
        </div>
    </div>
</div>
