<x-user-layout>
    @php
        $coin = 10000;
    @endphp
    <form class="flex  justify-center items-start w-full h-full" action="/buy-coin" >
        @csrf
        <div
            class="w-full max-w-lg payment-1 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
            <ol class="flex items-center w-full">
                <li
                    class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                        <svg class="w-3.5 h-3.5 text-blue-600 lg:w-4 lg:h-4 dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </li>
                <li
                    class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                        <svg class="w-4 h-4 text-gray-500 lg:w-5 lg:h-5 dark:text-gray-100" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                </li>
                <li class="flex items-center w-full">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                        <svg class="w-4 h-4 text-gray-500 lg:w-5 lg:h-5 dark:text-gray-100" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                        </svg>
                    </span>
                </li>
            </ol>

            {{-- <div class="flex justify-between">
                <h5>Select Coins</h5>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">1 coins = 1000 mmk</p>
            </div> --}}
            <ul class="my-4 space-y-3">
                <input type='hidden' name="coin" class=" payment-coin" />

                <li onclick="buycoin(event, {{ $coin }})">
                    <a href="#"
                        class="flex  [&.active]:bg-blue-400  items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        1000
                        <span class="flex-1 ms-3 whitespace-nowrap pointer-events-none">coins</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400 pointer-events-none">10000
                            mmk</span>
                    </a>
                </li>
                <li onclick="buycoin(event, {{ 20000 }})">
                    <a href="#"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        2000
                        <span class="flex-1 ms-3 whitespace-nowrap">coins</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">20000
                            mmk</span>
                    </a>
                </li>
                <li onclick="buycoin(event, {{ 40000 }})">
                    <a href="#"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        4000
                        <span class="flex-1 ms-3 whitespace-nowrap">coins</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">40000
                            mmk</span>
                    </a>
                </li>

                <li onclick="buycoin(event, {{ 40000 }})">
                    <a href="#"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        4000
                        <span class="flex-1 ms-3 whitespace-nowrap">coins</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">40000
                            mmk</span>
                    </a>
                </li>

            </ul>

           

            <div class="mb-3">
                <h4 class="text-base font-bold dark:text-white mb-3">Choose Payment Type</h4>

                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                    <input id="bordered-radio-1" type="radio" value="KPAY" name="payment"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="payment-1"
                        class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">KBZ Pay</label>
                </div>
                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                    <input checked id="payment-2" type="radio" value="WAVE" name="payment"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="payment-2"
                        class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wave Pay</label>
                </div>

            </div>


            <div class="flex justify-end items-center w-full">
                <button type="submit"
                    class="payment-next text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
            </div>


        </div>

    </form>



    {{-- <h5>Select Coins</h5>
    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">1 coins = 1000 mmk</p> --}}












</x-user-layout>
