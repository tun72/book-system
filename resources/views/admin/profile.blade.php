<x-admin-layout>

    <div class="max-w-full mx-auto bg-white p-6 rounded-lg shadow-md overflow-x-auto">
        <div class="flex  space-x-6 mb-6">
            <!-- User Avatar -->
            <div>
                <img src="{{ $user->imageUrl }}" alt="User Avatar" class="w-24 h-24 rounded-full">
            </div>

            <!-- User Information -->
            <div class="text-left flex flex-col justify-center">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $user->name }}</h2>
                <p class="text-sm text-gray-500">{{ $user->username }} <span
                        class="ml-1">{{ $user->role === 2 ? '(author)' : '(user)' }}</span></p>

            </div>
        </div>

        <!-- Contact Information -->
        <div class="mb-3">
            <h3 class="text-lg font-semibold text-gray-800 mb-5">Contact Information</h3>
            <ul class="flex flex-col  gap-3">
                <li class="flex items-center  gap-3">
                    <i class="fas fa-at"></i>
                    <span>Email: {{ $user->email }}</span>
                </li>
                <li class="flex items-center gap-3">
                    <i class="fas fa-phone"></i>
                    <span>Phone: {{ $user->phoneNumber }}</span>
                </li>
                <li class="flex items-center gap-3">
                    <i class="far fa-address-card "></i>
                    <span>Location: {{ $user->reader?->address }}</span>
                </li>
                <li class="flex items-center gap-3">
                    <i class="fab fa-gg-circle"></i>
                    <span>Coins: {{ $user->ggcoin }}</span>
                </li>
            </ul>
        </div>


        <!-- Favorite Genres -->


        <div class="mb-3">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">About</h3>
            <div class="flex space-x-2">
                @if ($user->role === 2)
                    {{ $user->author?->about }}
                @else
                    {{ $user->reader?->about }}
                @endif
            </div>
        </div>

        <div class="mb-3">
            <h3 class="text-lg font-semibold text-gray-800  mb-2">Favorite Genres</h3>
            <div class="flex space-x-2">
                @foreach ($genres as $gen)
                    <span class="inline-block bg-yellow-500 text-white p-2 rounded-full">{{ $gen->name }}</span>
                @endforeach
            </div>
        </div>



        @if ($user->role === 2)
            <div class="mb-3 flex gap-3">
                <h3 class="text-lg font-semibold text-gray-800  mb-2">Books</h3>
                <div class="flex space-x-2">
                    @foreach ($user->books as $book)
                        <span class="inline-block  text-white p-2 rounded-full">{{ $book->title }}</span>
                    @endforeach
                </div>
            </div>
        @endif



    </div>
</x-admin-layout>
