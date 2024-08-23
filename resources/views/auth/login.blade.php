<x-layout>
    <section class="font-poppins ">
        <div
            class="hidden py-[4rem] text-center bg-gradient-to-r from-cyan-500 to-blue-500 dark:bg-gray-700 lg:block bg-cover bg-fixed">
            <div class="max-w-6xl mx-auto mb-[7rem]">
                <span class="inline-block text-lg font-medium text-blue-800 dark:text-blue-300">Welcome Back 😍</span>
                <h2 class="mb-6 font-semibold text-blue-100 text-6xl dark:text-gray-300">Login Your account</h2>
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
                    <a href="/register"
                        class="px-4 py-3 text-sm font-medium text-gray-100 bg-button-800 hover:text-blue-200 rounded-lg self-end">
                        Register Account
                    </a>
                </span>
                <div class="">
                    <form class="p-0 m-0" action="/login" method="POST">
                        @csrf
                        <div class="mb-7">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-4 bg-gray-200 rounded-lg dark:bg-gray-700 lg:py-5 dark:text-gray-300 "
                                placeholder="Enter your email">
                            @error('email')
                                <p class="text-red-500 mb-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="relative flex items-center">
                                <input type="password" id="myInput"
                                    class="w-full px-4 py-4 bg-gray-200 rounded-lg lg:py-5 dark:text-gray-300 dark:bg-gray-700 "
                                    name="password" placeholder="Enter password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" onclick="myFunction()"
                                    class="absolute right-0 mr-3 dark:text-gray-300" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z">
                                    </path>
                                    <path
                                        d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z">
                                    </path>
                                    <path
                                        d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z">
                                    </path>
                                </svg>

                                @error('password')
                                    <p class="text-red-500 mb-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6 text-right">
                            <a href="#"
                                class="text-sm font-semibold text-blue-700 dark:text-blue-300 dark:hover:text-blue-500">
                                forgot password?</a>
                        </div>
                        <button
                            class="w-full px-4 py-4 mt-6 font-medium text-gray-200 bg-button-800 rounded-lg dark:bg-blue-500 hover:text-blue-200 "
                            type="submit">LOGIN</button>
                        <div class="py-5 text-base text-center text-gray-600 dark:text-gray-400">Or login with</div>
                    </form>
                    <div class="flex justify-center items-center">
                        <form action="{{ url('/login/google') }}">
                            @csrf
                            <button class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px"
                                    height="24px" class="mr-5">
                                    <path fill="#FFC107"
                                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                    <path fill="#FF3D00"
                                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                    <path fill="#4CAF50"
                                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                    <path fill="#1976D2"
                                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                </svg>
                            </button>
                        </form>

                        <a href="" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor"
                                class="mr-6 text-green-600 dark:text-green-400 bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                        </a>
                        <a href="" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor"
                                class="mr-6 text-blue-500 dark:text-blue-400 bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a href="" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor"
                                class="text-red-600 dark:text-red-400 bi bi-linkedin " viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</x-layout>
