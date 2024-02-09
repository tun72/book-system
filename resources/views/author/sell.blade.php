<x-author-layout>
    <section class="container">
            <div class="max-w-6xl px-4 mx-auto">
                <form class="rounded-lg shadow bg-gray-50 dark:bg-gray-900 dark:border-gray-900"
                    action="/author/incomes/sell", method="POST">
                    @csrf
                    <div class="p-6">
                        <div class="pb-6 border-b border-gray-100 dark:border-gray-800 ">
                            <h2 class="text-xl font-bold text-gray-800 md:text-3xl dark:text-gray-300">
                                Selling Coins
                            </h2>
                        </div>
                        <input type="hidden" name="user_id" id="" value="{{ auth()->user()->id }}">
                        <div class="py-6 border-b border-gray-100 dark:border-gray-800">
                            <div class="w-full md:w-10/12">
                                <div class="flex flex-wrap -m-3">
                                    <div class="w-full p-3 md:w-1/3">
                                        <p class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                            Name
                                        </p>
                                    </div>
                                    <div class="w-full p-3 md:w-1/3">
                                        <input disabled
                                            class="w-full dark:bg-gray-800 dark:border-gray-800 px-4 dark:placeholder-gray-500 dark:text-gray-400 py-2.5 text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                            type="text" value="{{ auth()->user()->name }}">
                                    </div>
                                    <div class="w-full p-3 md:w-1/3">
                                        <input disabled
                                            class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                            type="text" placeholder="Smith" value="{{ auth()->user()->username }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-6 border-b border-gray-100 dark:border-gray-800">
                            <div class="w-full md:w-10/12">
                                <div class="flex flex-wrap mb-2 -m-3">
                                    <div class="w-full p-3 md:w-1/3">
                                        <p class="text-sm font-semibold text-gray-800 dark:text-gray-400">Card details
                                        </p>
                                    </div>
                                    <div class="w-full p-3 md:flex-1">
                                        <p class="mb-4 font-medium text-base text-gray-800 dark:text-gray-400">Choose
                                            Payment
                                        </p>
                                        <div class="flex items-center gap-5">
                                            <div class="flex items-center">
                                                <input id="default-radio-1" type="radio" value="KBZ" name="payment"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-1"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">KBZ
                                                    Pay</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input checked id="default-radio-2" type="radio" value="WAVE"
                                                    name="payment"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-2"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wave
                                                    Pay</label>
                                            </div>
                                            <x-error :name="'payment'" />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="w-full p-3 md:w-1/3"></div>
                                    <div class="w-full p-3 md:flex-1">
                                        <p class="mb-1.5 font-medium text-base text-gray-800 dark:text-gray-400">Phone
                                            Number</p>
                                        <input name="phoneNumber"
                                            class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                            type="text" placeholder="{{ auth()->user()->phNumber }}">
                                        <x-error :name="'phoneNumber'" />
                                    </div>

                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full p-3 md:w-1/3"></div>
                                    <div class="w-full p-3 md:flex-1">
                                        <p class="mb-1.5 font-medium text-base text-gray-800 dark:text-gray-400">Coin
                                            Amount
                                        </p>
                                        <input name="ggcoin"
                                            class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                            type="number" placeholder="{{ auth()->user()->ggcoin }}">
                                        <x-error :name="'ggcoin'" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="py-6 border-b border-gray-100 dark:border-gray-800 ">
                            <div class="w-full md:w-10/12">
                                <div class="flex flex-wrap -m-3">
                                    <div class="w-full p-3 md:w-1/3">
                                        <p class="text-sm font-semibold text-gray-800 dark:text-gray-400">Email address
                                        </p>
                                    </div>
                                    <div class="w-full p-3 md:flex-1">
                                        <input disabled
                                            class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                            type="email" placeholder="adam@gmail.com"
                                            value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-6 dark:border-gray-800">
                            <div class="w-full md:w-10/12">
                                <div class="flex flex-wrap -m-3">
                                    <div class="w-full p-3 md:w-1/3">
                                        <p class="text-sm font-semibold text-gray-800 dark:text-gray-400">
                                            Address</p>
                                    </div>
                                    <div class="w-full p-3 md:flex-1">
                                        <div class="flex flex-wrap -m-3">

                                            <div class="w-full p-3 md:w-1/2">
                                                <p
                                                    class="mb-1.5 font-medium text-base text-gray-800 dark:text-gray-400">
                                                    City</p>
                                                <input name="city"
                                                    class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                                    type="text" placeholder="City">
                                                <x-error :name="'city'" />
                                            </div>
                                            <div class="w-full p-3 md:w-1/2">
                                                <p
                                                    class="mb-1.5 font-medium text-base text-gray-800 dark:text-gray-400">
                                                    State / Province
                                                </p>
                                                <input name="state"
                                                    class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                                    type="text" placeholder=" State / Province">
                                                <x-error :name="'state'" />
                                            </div>
                                            <div class="w-full p-3 md:w-1/2">
                                                <p
                                                    class="mb-1.5 font-medium text-base text-gray-800 dark:text-gray-400">
                                                    ZIP / Postal code
                                                </p>
                                                <input name="zip"
                                                    class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                                    type="text" placeholder=" ZIP / Postal code">
                                                <x-error :name="'zip'" />
                                            </div>
                                            <div class="w-full p-3 md:w-1/2">
                                                <p
                                                    class="mb-1.5 font-medium text-base text-gray-800 dark:text-gray-400">
                                                    Permanent address</p>
                                                <input name="address"
                                                    class="w-full px-4 py-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-500 dark:text-gray-400  text-base text-gray-900 rounded-lg font-normal border border-gray-200"
                                                    type="text" placeholder="  Permanent address">
                                                <x-error :name="'address'" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-10/12">
                            <div class="flex flex-wrap justify-end -m-1.5">
                                <div class="w-full md:w-auto p-1.5">
                                    <button
                                        class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-blue-500 bg-white border border-blue-500 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 ">
                                        <p>Cancel</p>
                                    </button>
                                </div>
                                <div class="w-full md:w-auto p-1.5">
                                    <button
                                        class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600 ">
                                        <p>Save</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
     


    </section>
</x-author-layout>
