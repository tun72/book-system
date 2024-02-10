<x-admin-layout>

    <div class="max-w-screen-md mx-auto bg-white p-6 rounded-lg shadow-md overflow-x-auto">

        <div class="flex  space-x-6 mb-6">
            <!-- User Avatar -->
            <div>
                <img src="{{ $user->imageUrl}}" alt="User Avatar" class="w-24 h-24 rounded-full">
            </div>

            <!-- User Information -->
            <div class="text-left">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $user->name }}</h2>
                <p class="text-sm text-gray-500">{{ $user->username }}</p>
                <p class="mt-2 text-gray-600">
                    {{ $user->reader->about }}
                </p>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Contact Information</h3>
            <ul class="flex flex-col  gap-5 ">
                <li class="flex items-center">
                    <svg class="w-4 h-4 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 6h.01M5 18h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2z">
                        </path>
                    </svg>
                    <span>Email: {{ $user->email }}</span>
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 10l3-3 3 3m6-3h0a6 6 0 0 1 0 12h-1a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h1"></path>
                    </svg>
                    <span>Phone: {{ $user->phoneNumber }}</span>
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 21v-2m0 0v-6m0 0V3"></path>
                    </svg>
                    <span>Location: {{ $user->reader->address }}</span>
                </li>
            </ul>
        </div>

        <!-- Social Links -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Social Links</h3>
            <ul class="flex space-x-4">
                <li>
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 2C8.268 2 4 6.268 4 12c0 5.302 3.918 9.675 9 10.488V14H7V9h6v5h1c.632 0 1.241-.048 1.834-.141.032-.33.166-.626.365-.891s.325-.469.586-.625c.261-.156.566-.234.887-.234 2.7 0 4.898 2.198 4.898 4.898s-2.198 4.898-4.898 4.898-4.898-2.198-4.898-4.898c0-1.151.392-2.213 1.042-3.06a.998.998 0 0 0-.175-1.11l-1.736-1.737a.994.994 0 0 0-1.414 0L5.854 9.146a.996.996 0 0 0 0 1.414l3.736 3.736a.998.998 0 0 0 1.414 0l3.736-3.736a.996.996 0 0 0 0-1.414.998.998 0 0 0-1.414 0L9 11.586V6h6v2h2V2z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-purple-500 hover:text-purple-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 2H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h9m4 0h5a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-5m0 0h-2V7h2m0 0zm0 0V7V7">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Favorite Genres -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Favorite Genres</h3>
            <div class="flex space-x-2">
                @foreach ($genres as $gen)
                    <span class="inline-block bg-yellow-500 text-white p-2 rounded-full">{{ $gen->name }}</span>
                @endforeach
            </div>
        </div>
    </div>
</x-admin-layout>
