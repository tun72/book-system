<x-admin-layout>
    <h1 class="text-4xl  font-bold mb-5">Update settings</h1>
    <form class="w-full flex flex-col gap-5 shadow-lg bg-white px-[2rem] py-[2rem]" action="/admin/setting" method="POST">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coin Price</label>
            <input type="number" id="email" name="coin_price" value="{{ $setting->coin_price }}"
                class="shadow-sm  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
            <x-error :name="'coin_price'" />
        </div>
        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum
                author/book</label>
            <input type="number" id="password" name="limit_author" value="{{ $setting->limit_author }}"
                class="shadow-sm  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            <x-error :name="'limit_author'" />
        </div>
        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum
                rating/book</label>
            <input type="number" id="repeat-password" name="limit_rating" value="{{ $setting->limit_rating }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            <x-error :name="'limit_rating'" />
        </div>

        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum
                coin/sell</label>
            <input type="number" id="repeat-password" name="limit_coin" value="{{ $setting->limit_coin }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            <x-error :name="'limit_coin'" />
        </div>


        <div class="flex items-center justify-end gap-5">
            <button type="reset"
                class=" text-stone-700 bg-gray-100  focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</button>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                Settings</button>
        </div>
    </form>

</x-admin-layout>
