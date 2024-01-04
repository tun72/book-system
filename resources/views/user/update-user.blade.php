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

</x-user-layout>
