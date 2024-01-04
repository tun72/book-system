@props(['type', 'genres', 'book' => null])

<div class="max-w-[62rem] mx-auto  p-[20px] mt-2">


    <h4 class="text-2xl font-bold">{{ $type == 'create' ? 'Create new' : 'Update' }} Book </h4>


    <form action="{{ $type == 'create' ? '/book/new-book' : '/book/' . $book->id . '/book-update' }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        @if ($type == 'update')
            @method('PATCH')
        @endif


        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
            <input type="text" id="base-input" name="title" value="{{ old('title', $book?->title) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <x-error name="title" />
        </div>

        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
                <input type="text" id="base-input" name="slug" value="{{ old('slug', $book?->slug) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <x-error name="slug" />
            </div>
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Coins</label>
                <input type="number" id="base-input" name="ggcoin" value="{{ old('ggcoin', $book?->ggcoin) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <x-error name="ggcoin" />
            </div>
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Publish Year</label>
                <input type="number" id="base-input" name="publish" value="{{ old('publish', $book?->publish) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <x-error name="publish" />
            </div>
        </div>



        <div class="mb-5">
            <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                class="inline-flex justify-between items-center w-full px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Choose Genres<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg></button>

            <!-- Dropdown menu -->
            <div id="dropdownSearch" class="z-10 hidden  bg-white rounded-lg shadow w-[60rem] dark:bg-gray-700">

                <ul class="h-[18rem] px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownSearchButton">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-11" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-11"
                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Bonnie
                                Green</label>
                        </div>
                    </li>

                    @foreach ($genres as $gen)
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-11" type="checkbox" value="{{ $gen->id }}" name="genres[]"
                                    {{ old('genres[]', $book?->genres)?->contains($gen->id) ? 'checked' : 'false' }}
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-11"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $gen->name }}
                                    Green</label>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

        </div>



        <div class="max-w-lg mx-auto">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload
                file</label>
            <input 
                name="image"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file">

        </div>


        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                message</label>
            <textarea id="message" rows="4" name="body"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment...">{{ old('body', $book?->body) }}</textarea>
        </div>




        {{-- <div class="mb-4">
            <img src="{{ old('image', $book?->image) }}" alt="" width="150" height="200">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label text-primary mb-1">cImage</label>
                <input class="form-control" type="file" id="formFileMultiple" name="image" />
            </div>
            <x-error name="image" />
        </div> --}}

        {{-- <div class="mb-3 row">
            <div class="col-6">
                <div class="dropdown">
                    <button class="btn shadow-0 border border-secondary dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false" style="width: 100%">
                        Choose Genres
                    </button>
                    <ul class="dropdown-menu overflow-scroll genres-list" aria-labelledby="dropdownMenuButton"
                        style="width: 100%; height: 300px">
                        @foreach ($genres as $gen)
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value={{ $gen->id }}
                                            id="Checkme1" name="genres[]"
                                            {{ old('genres[]', $book?->genres)?->contains($gen->id) ? 'checked' : 'false' }} />
                                        <label class="form-check-label" for="Checkme1">{{ $gen->name }}</label>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <x-error name="genres" />
            </div>

            <div class="col-3">
                <div class="form-outline">
                    <input type="number" id="form6Example4" class="form-control" name="ggcoin"
                        value="{{ old('ggcoin', $book?->ggcoin) }}" />
                    <label class="form-label" for="form6Example4">GGcoin</label>
                </div>
                <x-error name="ggcoin" />
            </div>

            <div class="col-3">
                <div class="form-outline">
                    <input type="number" id="form6Example4" class="form-control" name="publish"
                        value="{{ old('publish', $book?->publish) }}" />
                    <label class="form-label" for="form6Example4">Publish Year</label>
                </div>
                <x-error name="publish" />
            </div>
        </div> --}}
        <div>

        </div>
        <!-- Message input -->
        {{-- <div class="mb-4">
            <div class="form-outline">
                <textarea class="form-control" id="form6Example7" rows="4" name="body">{{ old('body', $book?->body) }}</textarea>
                <label class="form-label" for="form6Example7">Body</label>
            </div>
            <x-error name="publish" />
        </div> --}}



        <!-- Submit button -->
        {{-- <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button> --}}

        <button type="submit"
            class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
    </form>

</div>
