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
            <div class="mx-auto">
                <h3 class="text-3xl mb-5 text-button-800"><i class="fas fa-fire-alt me-2"></i>Books</h3>
                <!-- Book Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 mb-5">
                    <!-- Book Card 1 -->
                    @foreach ($user->books as $book)
                        <div class="flex gap-4" data-modal-target="default-modal-{{ $book->id }}"
                            data-modal-toggle="default-modal-{{ $book->id }}">
                            <div class="w-[142px] h-[221.88px] relative flex-grow-1 rounded-md overflow-hidden">
                                <img src="{{ $book->image }}" alt="" class="w-full h-full object-cover">
                                <div class="absolute top-0 left-0 text-white bg-brand-700 px-1">
                                    <h1>#{{ $book->id }}</h1>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 w-[50%] flex-auto">
                                <h1 class="text-base font-semibold "><a href="#">{{ $book->title }}</a></h1>
                                <h2 class="text-button-800"><a href="#">by {{ $book->user->name }}</a></h2>
                                <div class="flex gap-3 text-gray-400">
                                    <div class="flex gap-2">
                                        <span><i class="fa-regular fa-eye"></i></span>
                                        <h1>{{ count($book->readers) }}</h1>
                                    </div>
                                    <div class="flex gap-2">
                                        <span><i class="fa-solid fa-star text-star-400"></i></span>
                                        <h1>{{ $book->rating }}</h1>
                                    </div>
                                    <div class="flex gap-2">
                                        <span><i class="fa-solid fa-bars"></i></span>
                                        <h1>{{ count($book->chapters) }}</h1>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="line-clamp-2">{{ $book->body }}</p>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <span
                                        class="w-fit px-2 py-1 bg-green-400 text-sm font-semibold text-green-100 rounded-md">
                                        {{ $book->status }}
                                    </span>
                                    @foreach ($book->genres as $gens)
                                        <span
                                            class="w-fit px-2 py-1 bg-brand-100 text-sm font-semibold text-brand-800 rounded-md">
                                            {{ $gens->name }}
                                        </span>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        @endif



    </div>
</x-admin-layout>
