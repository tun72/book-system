@props(['type', 'genres', 'book' => null])


{{-- <section class="w-full">


    <div class="w-full">
        <div>
            <div class="flex lg:flex-row md:flex-row flex-col justify-between">
                <h1 class="font-semibold text-lg text-gray-500">Add New Post</h1>
                <div>
                    <div class="flex gap-2">
                        <div class="flex gap-4 lg:justify-center md:justify-center justify-between w-full">
                            <div>
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                    class="text-brand-600 bg-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">English<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>


                                <div id="dropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <button type="button"
                                        class="py-2.5 px-5 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Preview</button>
                                </div>
                                <div>
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>

                                </div>

                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>


        <div class="lg:flex-row flex flex-col lg:gap-0 gap-4 justify-between">
            <div class="lg:w-[60%] w-full">
                <div class="w-full">

                    <input type="text" placeholder="Title"
                        class="py-2 px-2 w-full bg-white pl-5 rounded-xl shadow-sm border-[1px] border-solid border-gray-400 text-lg outline-none">
                    <div class="border-[1px] rounded-lg  mt-[20px] border-solid border-gray-400 px-3 py-4 bg-white">
                        <div
                            class="border-[1px] lg:mt-[20px] md:mt-[20px] mt-[5px]  rounded-lg border-solid px-3 border-gray-400 lg:py-2 md:py-2 py-1">
                            <div class="flex gap-2"><span><i class="fa-solid fa-angle-down text-gray-500"></i></span>
                                <h1 class="font-semibold text-gray-500">Text Content</h1>
                            </div>
                            <div class="w-[99%] mx-auto bg-gray-200 h-[2px] mt-[6px] mb-5"></div>
                            <div>
                                <textarea id="message" rows="4"
                                    class="lg:h-[300px] md:h-[300px] bg-white outline-none w-full block p-2.5 text-sm text-gray-900  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your thoughts here..."></textarea>

                            </div>
                        </div>

                        <div class="border-[1px] rounded-lg border-solid border-gray-400 py-2 px-3 mt-3">
                            <div class="flex gap-2"><span><i class="fa-solid fa-angle-down text-gray-500"></i></span>
                                <h1 class="font-semibold text-gray-500">Caption & Images</h1>
                            </div>
                            <div class="w-[99%] mx-auto bg-gray-600 h-[1px] mt-[10px] mb-[10px]"></div>
                            <div>
                                <h1 class=" font-semibold text-gray-500">Caption</h1>
                            </div>
                            <input type="text" placeholder="Title"
                                class="py-2 px-2 w-full pl-5 rounded-lg mt-4 border-[1px] border-solid border-gray-400 text-lg outline-none bg-brand-100">
                            <div>
                                <h1 class=" font-semibold text-gray-500 mt-[10px]">Upload Images</h1>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <div class="lg:w-[38%] w-full">
                <div class="border-[1px] rounded-lg border-solid border-gray-400 px-5 py-2 flex flex-col gap-3">
                    <div>
                        <h1 class="font-semibold text-gray-500">Written by</h1>
                    </div>
                    <div>
                        <input type="text" placeholder="Your name"
                            class="py-1 px-2 w-full pl-5 rounded-lg  border-[1px] border-solid border-gray-400 text-lg outline-none bg-brand-100">
                    </div>
                    <div>
                        <h1 class="font-semibold text-gray-500">Post Date</h1>
                    </div>
                    <div>
                        <input type="date" name="" id=""
                            class="py-1 px-2 w-full pl-5 rounded-lg  border-[1px] border-solid border-gray-400 text-lg outline-none bg-brand-100">
                    </div>
                    <div>
                        <h1 class="font-semibold text-gray-500">Published</h1>
                    </div>
                    <div>

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>

                        </label>

                    </div>
                    <div>
                        <h1 class="font-semibold text-gray-500">Show Author Name</h1>
                    </div>
                    <div>

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>

                        </label>

                    </div>

                </div>

            </div>



        </div>
    </div>
</section> --}}



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




        <div>

        </div>
        

        <button type="submit"
            class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
    </form>

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
