<x-layout>

    <section class="auth-section bg-brand-50">

        <div>
            @error('error')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            @if (!$errors->has('error'))
                <div class="text-center mb-3">
                    <h3 class="mb-3  text-xl text-brand-500 font-bold" style="letter-spacing: 0.5px;">Welcome Back
                        😍
                    </h3>
                </div>
            @endif

            <div class="flex flex-col gap-2 p-6 shadow-xl border-brand-100 border w-full md:w-[30rem]">
                <form class="mb-5" action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <h6
                            class="block  text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 mb-3">
                            Your Email
                        </h6>
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="name@gmail.com" type="email" name="email"
                                value="{{ old('email') }}"
                                class="h-full w-full rounded-md border  bg-transparent px-3 py-3 font-sans text-sm font-normal  outline outline-0 transition-all border-brand-500 {{ $errors->has('email') || $errors->has('error') ? 'border-red-500' : '' }} " />
                        </div>

                        @error('email')
                            <p class="text-red-500 mb-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <h6
                            class="block  text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 mb-3">
                            Your Password
                        </h6>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="********" name="password" type="password" {{ old('email') }}"
                                class="h-full w-full rounded-md border  bg-transparent px-3 py-3 font-sans text-sm font-normal outline outline-0 transition-all 
                                        border-brand-500 {{ $errors->has('password') || $errors->has('error') ? 'border-red-500' : '' }}" />
                        </div>

                        @error('password')
                            <p class="text-red-500 mb-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-1">
                        <button data-ripple-light="true" type="submit"
                            class="mt-4 block w-full select-none rounded-lg bg-brand-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                            login
                        </button>
                    </div>
                </form>

                <div class="text-center mb-4">
                    <p class="text-brand-500 mb-2">or sign up with:</p>
                    <div class="d-flex justify-content-center align-items-center gap-4 text-white">
                        <button data-ripple-light="true"
                            class="text-brand-50 bg-red-700 hover:bg-red-800  focus:outline-none  font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <i class="fab fa-google"></i>
                        </button>
                        <button data-ripple-light="true"
                            class="text-brand-50 bg-blue-700 hover:bg-blue-800  focus:outline-none  font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button data-ripple-light="true"
                            class="text-brand-50 bg-gray-700 hover:bg-gray-800  focus:outline-none  font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>

                <div class="text-center">
                    <p class="mb-0 link text-sm">New User?  <a href="#"
                        class="font-medium text-blue-600 dark:text-blue-500">Sign up</a></p>
                    <p class="mb-0  link text-sm">Forgot Password? <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500">reset password</a></p>
                </div>
            </div>

        </div>
    </section>
</x-layout>
