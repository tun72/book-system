<x-layout>
    <div class="auth-section">
        <section class="col-8 shadow-lg  bg-white">
            <div class="row">
                <div class="col-sm-5 text-black">
                    <div class="d-flex flex-column gap-2 p-4">
                        <div class="text-center mb-3">
                            <h3 class="mb-0 fw-normal fs-4 text-primary" style="letter-spacing: 0.5px;">Welcome New User
                                🎉</h3>
                        </div>
                        <form class="mb-4" action="/register" method="POST">
                            @csrf

                            <div class="mb-3">
                                <div class="form-outline">
                                    <input type="text" id="form2Example18"
                                        class="form-control form-control-lg mb-0 {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        name="name" value="{{ old('name') }}" />
                                    <label class="form-label mt-0 mb-0" for="form2Example18">Name</label>
                                </div>
                                @error('name')
                                    <p class="text-danger mb-2  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-outline">
                                    <input type="text" id="form2Example18"
                                        class="form-control form-control-lg mb-0 {{ $errors->has('username') ? 'is-invalid' : '' }} "
                                        name="username" value="{{ old('username') }}" />
                                    <label class="form-label" for="form2Example18">Username</label>

                                </div>
                                @error('username')
                                    <p class="text-danger mb-2  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-outline">
                                    <input type="email" id="form2Example18"
                                        class="form-control form-control-lg mb-0 {{ $errors->has('email') ? 'is-invalid' : '' }} "
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
                                        class="form-control form-control-lg mb-0 {{ $errors->has('password') ? 'is-invalid' : '' }} "
                                        name="password" />
                                    <label class="form-label" for="form2Example28">Password</label>

                                </div>

                                @error('password')
                                    <p class="text-danger mb-2  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pt-1">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Sign Up</button>
                            </div>
                        </form>

                        <div class="text-center mb-4">
                            <p class="text-dark mb-1">or sign up with:</p>
                            <div class="d-flex justify-content-center align-items-center gap-4 text-white">
                                <button class="social-div bg-danger">
                                    <i class="fab fa-google"></i>
                                </button>
                                <button class="social-div bg-primary">
                                    <i class="fab fa-facebook"></i>
                                </button>
                                <button class="social-div bg-dark">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </div>

                        <div class="text-center">
                            <p class="mb-0 small">Already have account? <a href="/login" class="link-primary">Sign
                                    Up</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 image-div">

                </div>
            </div>
        </section>
    </div>
</x-layout>
