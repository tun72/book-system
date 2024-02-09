<x-user-layout>
  
    <div class="content">
        <form class="mt-4" action="/user/update-user/{{ auth()->user()->username }}" method="POST">
            @csrf
            @method('PATCH')
            <img src="{{ auth()->user()->imageUrl }}" alt="" width="100px" height="100px">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control"
                            value="{{ auth()->user()->imageUrl }}" name="imageUrl" />
                        <label class="form-label" for="form3Example1">Image Url</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" value="{{ old("name") ? old("name") : auth()->user()->name }}"
                            name="name" />
                        <label class="form-label" for="form3Example1">Name</label>
                    </div>
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control"
                            value="{{ old("username") ? old("username") : auth()->user()->username }}" name="username" />
                        <label class="form-label" for="form3Example1">Username</label>
                    </div>
                    @error('username')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" value="{{ old("email") ? old("email") : auth()->user()->email }}"
                    name="email" />
                <label class="form-label" for="form3Example3">Email</label>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example4" class="form-control" value="{{ old("phoneNumber") ? old("phoneNumber") : auth()->user()->phoneNumber }}"
                    name="phoneNumber" />
                <label class="form-label" for="form3Example4">Phone Number</label>
                @error('phoneNumber')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
        </form>
    </div>

    {{-- <div class="p-10">
        <div class="grid grid-cols-[auto_1fr] gap-10">
            <div class="w-[30rem]">
                <div class="mb-4">
                    <div class="flex flex-col gap-3 items-center">
                        <img src="{{ auth()->user()->imageUrl }}" alt="avatar" class="rounded-full"
                            style="width: 120px; height: 120px">
                        <h5 class="mt-3 mb-2">{{ auth()->user()->name }}</h5>
                    </div>
                    <div class="flex flex-col gap-4 shadow-lg p-5">
                        <div class="flex justify-between">
                            <div class="col-sm-3">
                                <p class="mb-0">Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-between">
                            <div class="col-sm-3">
                                <p class="mb-0">User Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ auth()->user()->username }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-between">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-between">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">+{{ auth()->user()->phoneNumber }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-between">
                            <div class="col-sm-3">
                                <p class="mb-0">Status</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    {{ auth()->user()->user_plan != 0 ? 'Premium' : 'Free' }}
                                    User</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                @if (auth()->user()->role === 0)
                    <div class="flex flex-col gap-3 shadow-lg py-5 px-10 mb-5">
                        <div class="flex gap-3  justify-between">
                            <div class="flex gap-3 items-center ">
                                <p class="mb-0"> {{ auth()->user()->ggcoin }}</p>
                                <p class="text-muted mb-0"><i class="fa-brands fa-gg-circle text-primary"></i></p>
                            </div>

                            <div class="col-sm-2">
                                <a type="button" class="btn btn-info" href="/pricing-section">Buy coins</a>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="flex flex-col gap-3 shadow-lg py-5 px-10 mb-10">
                    <div class="flex gap-3  justify-between">
                        <div class="flex gap-3 items-center ">
                            <p class="mb-0"><i class="fa-solid fa-gear"></i></p>
                            <p class="text-muted mb-0">Account setting</p>
                        </div>

                        <div class="col-sm-2">
                            <a class="text-muted mb-0" href="/user/update-user"><i
                                    class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-3  justify-between">
                        <div class="flex gap-3 items-center ">
                            <p class="mb-0"><i class="fas fa-key"></i></p>
                            <p class="text-muted mb-0">Change Password</p>
                        </div>
                        <div class="col-sm-2">
                            <a class="text-muted mb-0" href="/user/update-user"><i
                                    class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-3  justify-between">
                        <div class="flex gap-3 items-center ">
                            <p class="mb-0"><i class="fas fa-feather-alt"></i></p>
                            <p class="text-muted mb-0">Become Author</p>
                        </div>
                        <div class="col-sm-2">
                            <a class="text-muted mb-0" href="/author/register"><i
                                    class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-3  justify-between">
                        <div class="flex gap-3 items-center ">
                            <p class="mb-0"><i class="fas fa-question-circle"></i></p>
                            <p class="text-muted mb-0">Help</p>
                        </div>
                        <div class="col-sm-2">
                            <a class="text-muted mb-0" href="#"><i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-3  justify-between">
                        <div class="flex gap-3 items-center ">
                            <p class="mb-0"><i class="fas fa-phone-alt"></i></p>
                            <p class="text-muted mb-0">Contact Us</p>
                        </div>
                        <div class="col-sm-2">
                            <a class="text-muted mb-0" href="#"><i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-3  justify-between">
                        <div class="flex gap-3 items-center ">

                            <p class="mb-0"><i class="fas fa-info-circle"></i></p>

                            <p class="text-muted mb-0">About Us</p>

                        </div>
                        <div class="col-sm-2">
                            <a class="text-muted mb-0" href="#"><i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col gap-3 shadow-lg py-5 px-10 mb-10">
                    <div class="flex justify-between">
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">Delete account</p>
                        </div>
                        <i class="fas fa-user-times"></i>

                    </div>
                    <div class="flex justify-between">
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">Logout</p>
                        </div>
                        <div class="col-sm-1">
                            <p class="mb-0"><i class="fas fa-sign-out-alt"></i></p>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div> --}}

</x-user-layout>
