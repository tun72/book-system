<x-user-layout>
    <form class="flex  justify-center items-start w-full" action="/confirm-payment"  enctype="multipart/form-data" method="POST">
        @csrf
        <div
            class="w-full   p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
            <ol class="flex items-center w-full mb-10">
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

            <input type="hidden" name="ggcoin" id="" value="{{ $coin }}">
            <input type="hidden" name="payment" id="" value="{{ $payment }}">
            <div class="container flex flex-col gap-10 mb-10">
                <div class="w-full">
                    <h3 class="text-lg mb-3 font-bold">Complete Purchase</h3>
                    <div class="p-8 rounded-xl bg-slate-600 border-2  border-blue-300  flex flex-col gap-5">
                        <p class="text-lg font-bold text-blue-50">{{ $coin }} coins</p>
                        <p class="text-lg font-bold text-blue-600">{{ $coin * 1000 }} mmk</p>
                    </div>
                </div>

                <div class="w-full">
                    <h3 class="text-lg mb-3 font-bold">Transfer Money</h3>

                    <div class="bg-blue-100 p-4 rounded-xl flex  gap-5 items-center">
                        <div>
                            <img src="{{ $payment === "KPAY" ? "https://www.kbzbank.com/wp-content/uploads/2019/08/Image-8_-KBZPay-Logo_Credit-to-KBZ.jpg" : "https://pbs.twimg.com/profile_images/1041604335543627776/REZJdo09_400x400.jpg" }} "

                            
                                alt="" class="w-20 h-20">
                        </div>
                        <div>
                            <p>09760251300</p>
                            <p>U Tun Tun Myint</p>
                            <p class="text-orange-500">Please add note "To Buy Book"</p>
                        </div>
                    </div>
                </div>


                <div class="w-full mx-auto">
                    <h3 class="text-lg mb-3 font-bold">Remittance Receipt</h3>
                    <div id="dropzone"
                        class="dropzone p-8 rounded-md cursor-pointer bg-gray-100 border-dashed border-2 border-gray-400">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                            </svg>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
                            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than
                                <b class="text-gray-600">2mb</b>
                            </p>
                            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b
                                    class="text-gray-600">JPG,
                                    PNG,
                                    or GIF</b> format.</p>
                            <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                        </div>
                        <input type="file" id="fileInput" class="hidden" name="image" />
                    </div>

                    <img src="" alt="Image Preview" id="imagePreview" class="image-preview hidden mt-4">
                </div>

                <div class="w-full">
                    <h3 class="text-lg mb-3 font-bold">{{ $payment }} UserName</h3>
                    <div class="relative ">

                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" name="accname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="{{ $payment}} username..." required>
                    </div>
                </div>

            </div>

            <div class="flex justify-end items-center w-full">
                <button type="submit"
                    class="payment-next text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
            </div>


        </div>

    </form>


</x-user-layout>
