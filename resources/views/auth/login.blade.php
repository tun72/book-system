<x-layout>
    <div class="auth-section">
        <section class="col-8 shadow-lg  bg-white">
            <div class="row">
                <div class="col-sm-5 text-black">
                    <div class="d-flex flex-column gap-2 p-4">


                        @error('error')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (!$errors->has('error'))
                            <div class="text-center mb-3">
                                <h3 class="mb-0 fw-normal fs-4 text-primary" style="letter-spacing: 0.5px;">Welcome Back
                                    😍
                                </h3>
                            </div>
                        @endif




                        <form class="mb-5" action="/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-outline">
                                    <input type="email" id="form2Example18"
                                        class="form-control form-control-lg mb-0 {{ $errors->has('email') || $errors->has('error') ? 'is-invalid' : '' }} "
                                        name="email" value="{{ old('email') }}" />
                                    <label class="form-label" for="form2Example18">Email</label>

                                </div>
                                @error('email')
                                    <p class="text-danger mb-2  small">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <div class="form-outline">
                                    <input type="password" id="form2Example28"
                                        class="form-control form-control-lg mb-0 {{ $errors->has('password')  || $errors->has('error') ? 'is-invalid' : '' }} "
                                        name="password" />
                                    <label class="form-label" for="form2Example28">Password</label>

                                </div>

                                @error('password')
                                    <p class="text-danger mb-2  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pt-1">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </div>
                        </form>

                        <div class="text-center mb-4">
                            <p class="text-dark">or sign up with:</p>
                            <div class="d-flex justify-content-center align-items-center gap-4 text-white">
                                <button class="btn btn-danger btn-floating">
                                    <i class="fab fa-google"></i>
                                </button>
                                <button class="btn btn-primary btn-floating">
                                    <i class="fab fa-facebook"></i>
                                </button>
                                <button class="btn btn-dark btn-floating">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </div>

                        <div class="text-center">
                            <p class="mb-0 small">New User? <a href="/register" class="link-primary">Sign Up</a></p>
                            <p class="mb-0 small">Forgot Password? <a href="#!" class="link-primary">Reset
                                    password</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 image-div">

                </div>
            </div>
        </section>
    </div>
</x-layout>
