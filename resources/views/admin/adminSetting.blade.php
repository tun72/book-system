<x-admin-layout>
    <h1 class="text-4xl  font-bold mb-5">Update settings</h1>
    <form class="w-full flex flex-col gap-5 shadow-lg bg-white px-[2rem] py-[2rem]" action="/admin/{{auth()->user()->username}}/admin-setting"
        method="POST">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" value="{{ auth()->user()->name }}"
                class="shadow-sm  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
            <x-error :name="'name'" />
        </div>
        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="password" name="email" value="{{ auth()->user()->email }}"
                class="shadow-sm  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            <x-error :name="'email'" />
        </div>

        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                Name</label>
            <input type="text" id="repeat-password" name="username" value="{{ auth()->user()->username }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            <x-error :name="'username'" />
        </div>

        <div class="grid grid-cols-[14rem_1fr_1.2fr] items-center gap-2">
            <label for="repeat-password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="repeat-password" name="password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
            <x-error :name="'pasword'" />
        </div>




        <div class="flex items-center justify-end gap-5">
            <button type="reset"
                class=" text-stone-700 bg-gray-100  focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</button>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </div>
    </form>
</x-admin-layout>
