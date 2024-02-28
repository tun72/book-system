<x-user-layout>

    <style>
        .main {
            padding: 24px
        }
    </style>

    @if (!auth()->user()->register_author)
        <form class="max-w-[60rem] mx-auto flex flex-col gap-5 bg-white p-4 shadow-lg" action="/author/register"
            method="POST">
            @csrf
            <h2q class="text-2xl">Author Register</h2q>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" id="floating_name"
                    class="block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required name="name" value="{{ auth()->user()->name }}" />
                <label for="floating_name"
                    class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                <x-error :name="'name'" />
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="text" id="floating_name"
                    class="block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required name="username" value="{{ auth()->user()->username }}" />
                <label for="floating_name"
                    class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                <x-error :name="'username'" />
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="email" id="floating_email" value="{{ auth()->user()->email }}"
                    class="block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " name="email" required />
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                    address</label>
                <x-error :name="'email'" />
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="text" id="floating_phone" value="{{ auth()->user()->phoneNumber }}"
                    class="block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " name="phone" required />
                <label for="floating_phone"
                    class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone Number</label>
                <x-error :name="'phone'" />
            </div>


            <div>
                <label for="message" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">About Your
                    Self</label>
                <textarea id="message" rows="4" name="about"
                    class="block p-2.5 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ old('about') }}</textarea>
                <x-error :name="'about'" />
            </div>

            <div>
                <label for="message" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Reason why
                    you
                    applied to become auhtor ?</label>
                <textarea id="message" rows="4" name="description"
                    class="block p-2.5 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ old('description') }}</textarea>
                <x-error :name="'description'" />
            </div>

            <div class="flex items-center">
                <input id="link-checkbox" type="checkbox" name="agree" value="true"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    {{ old('agree') ? 'checked' : '' }}>
                <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" }>I agree
                    with
                    the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and
                        conditions</a>.</label>
                <x-error :name="'agree'" />
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    @else
        <h2>You are already registered! Please wait admin will confirm you soon.</h2>
    @endif

</x-user-layout>
