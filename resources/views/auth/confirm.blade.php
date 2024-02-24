<x-layout>
    @vite('resources/js/countdown.js')
    <section class="font-poppins ">
        <div class="hidden py-[4rem] text-center bg-gradient-to-r from-yellow-200 to-lime-200 dark:bg-gray-700 lg:block">
            <div class="max-w-6xl mx-auto mb-[7rem]">
                {{-- <span class="inline-block text-lg font-medium text-yellow-600 dark:text-blue-300">Welcome Back 😍</span> --}}
                <h2 class="mb-6 font-semibold text-gray-800 text-6xl dark:text-gray-300">Confirm your Email!</h2>
            </div>
        </div>
        <div class="max-w-xl mx-auto ">
            <div class="w-full shadow-lg bg-gray-50 dark:bg-gray-800 mt-11 lg:-mt-36 lg:full p-7 rounded-3xl">
                <span class="flex items-center justify-end gap-5 mb-8">
                    @error('error')
                        <div class="bg-red-100 rounded-lg px-3 py-3 text-red-400" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </span>
                <div class="">
                    <form class="p-0 m-0" action="/checkOTP" method="POST">
                        @csrf
                        <div class="mb-7">
                            <input type="hidden" value="{{ auth()->user()->email }}" id="email">
                            <input type="text" name="otpcode" value="{{ old('otpcode') }}"
                                class="w-full px-4 py-4 bg-gray-200 rounded-lg dark:bg-gray-700 lg:py-5 dark:text-gray-300 "
                                placeholder="Enter your OTP Code.">
                            @error('code')
                                <p class="text-red-500 mb-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="otp-countdown hidden bg-gray-400 text-gray-200 w-fit px-3 py-1 rounded-xl"
                                id="timer-countdown"></div>

                            <button type="button" id="resend" class="bg-yellow-400 px-3 py-1 rounded-lg text-white">restart</button>
                        </div>
                        <button
                            class="w-full px-4 py-4 mt-6 font-medium text-gray-200 bg-blue-700 rounded-lg dark:bg-blue-500 hover:text-blue-200 "
                            type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
