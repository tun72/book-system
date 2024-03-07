<div id="coinModal-{{ $sell->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full bg-slate-200/20 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-xl h-full ">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                    <h3 class="font-semibold mb-4">
                        Transfer Detail
                    </h3>
                    <p class="text-base">
                        Account Name - {{ $sell->accname }}
                    </p>
                    <p class="text-base">
                        Amount - {{ $sell->ggcoin * $limit }} mmk
                    </p>
                    <p class="text-base">
                        Coins - {{ $sell->ggcoin }} coins
                    </p>
                    <p class="text-base">
                        sell Payment Method - {{ $sell->payment }}
                    </p>
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                <div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="coinModal-{{ $sell->id }}">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            </div>
            <div>
                <h3 class="mb-4 font-semibold leading-none text-gray-900 dark:text-white">Details</h3>
                <div class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400 ">
                    <img src="{{ $sell->qrcode }}" alt="" class="max-h-[20rem]">
                </div>
            </div>
            <div class="flex items-center justify-end gap-2">
                <form action="/admin/users/sell/{{ $sell->id }}/confirm" method="POST">
                    @csrf
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Confrim
                    </button>
                </form>

                <form action="/admin/users/sell/{{ $sell->id }}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="py-2.5 px-5 text-sm font-medium text-red-200 focus:outline-none bg-red-500 rounded-lg border border-red-200 hover:bg-red-400 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-red-200 dark:focus:ring-red-700 dark:bg-red-800 dark:text-red-400 dark:border-red-600 dark:hover:text-white dark:hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
