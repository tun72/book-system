@props(['type', 'genres', 'book' => null])

@vite('resources/js/image.js')
@vite('resources/js/select.js')
<section class="w-full">
    <form class="w-full" action="{{ $type == 'create' ? '/book/new-book' : '/book/' . $book->id . '/book-update' }}"
        method="POST" enctype="multipart/form-data">
        @csrf

        @if ($type == 'update')
            @method('PATCH')
        @endif
        <div>
            <div class="flex lg:flex-row md:flex-row flex-col justify-between">
                <h1 class="font-semibold text-lg text-gray-500">Add New Book</h1>
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
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>

                                </div>

                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>


        <div class="lg:flex-row flex flex-col lg:gap-0 gap-4 justify-between items-start">
            <div class="lg:w-[60%] w-full">
                <div class="w-full ">

                    <input type="text" placeholder="Title" name="title" value="{{ old('title', $book?->title) }}"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 px-4 py-3 pr-10 intro-y !box" />

                    <x-error name="title" />

                    <div class="mt-5 overflow-hidden intro-y box bg-white shadow-lg rounded-lg">
                        <ul
                            class="border-b w-full flex flex-col border-transparent dark:border-transparent sm:flex-row bg-slate-200 dark:bg-darkmode-800">
                            <li class="focus-visible:outline-none -mb-px">
                                <button
                                    class="cursor-pointer appearance-none border rounded-t-md dark:border-transparent bg-white font-medium dark:border-b-darkmode-600 flex items-center justify-center w-full px-0 py-0 sm:w-40 text-primary border-transparent dark:bg-darkmode-600 dark:border-x-transparent dark:border-t-transparent dark:text-white">
                                    <span class="cursor-pointer flex items-center justify-center w-full py-4 gap-3"><i
                                            class="fas fa-file-alt"></i>Content</span></button>
                            </li>
                        </ul>

                        <div class="p-5">
                            <div class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400 mb-10">
                                <div class="flex gap-2"><span><i
                                            class="fa-solid fa-angle-down text-gray-500"></i></span>
                                    <h1 class="font-semibold text-gray-500">Text Content</h1>
                                </div>
                                <div class="border-b border-slate-200/60 dark:border-darkmode-400 mb-5">
                                </div>
                                <div>
                                    <div
                                        class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                        <div
                                            class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                                            <div
                                                class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse dark:divide-gray-600">
                                                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 12 20">
                                                            <path stroke="currentColor" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                        </svg>
                                                        <span class="sr-only">Attach file</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 16 20">
                                                            <path
                                                                d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                        </svg>
                                                        <span class="sr-only">Embed map</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 16 20">
                                                            <path
                                                                d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z" />
                                                            <path
                                                                d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                                                        </svg>
                                                        <span class="sr-only">Upload image</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 16 20">
                                                            <path
                                                                d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                                            <path
                                                                d="M14.067 0H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.933-2ZM6.709 13.809a1 1 0 1 1-1.418 1.409l-2-2.013a1 1 0 0 1 0-1.412l2-2a1 1 0 0 1 1.414 1.414L5.412 12.5l1.297 1.309Zm6-.6-2 2.013a1 1 0 1 1-1.418-1.409l1.3-1.307-1.295-1.295a1 1 0 0 1 1.414-1.414l2 2a1 1 0 0 1-.001 1.408v.004Z" />
                                                        </svg>
                                                        <span class="sr-only">Format code</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM13.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm-7 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm3.5 9.5A5.5 5.5 0 0 1 4.6 11h10.81A5.5 5.5 0 0 1 10 15.5Z" />
                                                        </svg>
                                                        <span class="sr-only">Add emoji</span>
                                                    </button>
                                                </div>
                                                <div
                                                    class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 21 18">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9.5 3h9.563M9.5 9h9.563M9.5 15h9.563M1.5 13a2 2 0 1 1 3.321 1.5L1.5 17h5m-5-15 2-1v6m-2 0h4" />
                                                        </svg>
                                                        <span class="sr-only">Add list</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z" />
                                                        </svg>
                                                        <span class="sr-only">Settings</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
                                                            <path
                                                                d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
                                                        </svg>
                                                        <span class="sr-only">Timeline</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                            <path
                                                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                        </svg>
                                                        <span class="sr-only">Download</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" data-tooltip-target="tooltip-fullscreen"
                                                class="p-2 text-gray-500 rounded cursor-pointer sm:ms-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 19 19">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M13 1h5m0 0v5m0-5-5 5M1.979 6V1H7m0 16.042H1.979V12M18 12v5.042h-5M13 12l5 5M2 1l5 5m0 6-5 5" />
                                                </svg>
                                                <span class="sr-only">Full screen</span>
                                            </button>
                                            <div id="tooltip-fullscreen" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                Show full screen
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>
                                        <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                            <label for="editor" class="sr-only">Publish post</label>
                                            <textarea id="editor" rows="8" name="body"
                                                class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                placeholder="Write an article..." required> {{ old('body', $book?->body) }}</textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400">
                                <div class="flex gap-2"><span><i
                                            class="fa-solid fa-angle-down text-gray-500"></i></span>
                                    <h1 class="font-semibold text-gray-500">Caption & Images</h1>
                                </div>
                                <div class="border-b border-slate-200/60 dark:border-darkmode-400 mb-5">
                                </div>
                                <div class="mt-5">
                                    <label class="inline-block mb-2">Caption</label>
                                    <input type="text" placeholder="Title" name="caption"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80">
                                    <x-error name="caption" />
                                </div>

                                <div class="mt-3">
                                    <label class="inline-block mb-2">Upload Image</label>
                                    <div class="pt-4 border-2 border-dashed rounded-md dark:border-darkmode-400">
                                        <div class="flex flex-wrap px-4">
                                            <div class="relative w-24 h-24 mb-5 mr-5 cursor-pointer image-fit zoom-in">

                                                <div class="rounded-md h-full bg-cover border border-slate-300/0.8  "
                                                    alt="Midone Tailwind HTML Admin Template" id="imagePreview">
                                                </div>
                                                <div
                                                    class="cursor-pointer absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full bg-red-400">
                                                    <i class="fas fa-times-circle "></i>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="relative flex items-center px-4 pb-4 cursor-pointer">
                                            <span class="mr-1 text-primary"> Upload a file </span>
                                            " or drag and drop "
                                            <input name="image" id="uploadFile"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 absolute top-0 left-0 w-full h-full opacity-0"
                                                type="file">
                                            <x-error name="image" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>


            <div class="lg:w-[38%] w-full bg-white rounded-lg">
                <div class=" border-gray-400 px-5 py-2 flex flex-col gap-3 shadow-sm">
                    <div>
                        <label class="inline-block mb-2">Written By</label>
                        <input type="text" placeholder="Title" value="{{ auth()->user()->name }}" disabled
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80">
                    </div>

                    <div>
                        <label class="inline-block mb-2">Book date</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" name="publish"
                                value="{{ old('publish', $book?->publish) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                            <x-error name="publish" />
                        </div>

                    </div>

                    <div class="flex items-center gap-3">
                        <div>
                            <label class="inline-block mb-2">Slug</label>
                            <input type="text" placeholder="slug" name="slug"
                                value="{{ old('slug', $book?->slug) }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            <x-error name="slug" />
                        </div>

                        <div>
                            <label class="inline-block mb-2">Coins</label>
                            <input type="number" placeholder="coins" name="ggcoin"
                                value="{{ old('ggcoin', $book?->ggcoin) }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            <x-error name="ggcoin" />
                        </div>
                    </div>
                    <div class="relative mt-3 mb-4" id="drop-down-section">
                        <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                            class="inline-flex justify-between items-center  flex-wrap gap-3 w-full px-4 py-2 text-sm font-medium text-center text-gray-700 bg-gray-50 rounded-lg border border-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                            type="button">Choose Genres<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>

                        <div id="dropdownSearch"
                            class="z-10 hidden  bg-white rounded-lg shadow  dark:bg-gray-700 mt-5">
                            <ul id="checkboxList"
                                class="max-h-[10rem] w-[30rem] px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownSearchButton">
                                @foreach ($genres as $gen)
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="checkbox-item-{{ $gen->id }}" type="checkbox"
                                                value="{{ $gen->id }}" name="genres[]"
                                                data-title="{{ $gen->name }}"
                                                {{ old('genres[]', $book?->genres)?->contains($gen->id) ? 'checked' : 'false' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-item-{{ $gen->id }}"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $gen->name }}
                                            </label>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <x-error name="genres[]" />
                        </div>
                    </div>

                    <div class="relative mt-3 mb-4">

                    </div>

                    @if ($type !== 'create')
                        <div class="mt-3">
                            <h1 class="font-semibold text-gray-500">Published</h1>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" name="">
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>

                            </label>
                        </div>
                    @endif




                </div>

            </div>



        </div>
    </form>
</section>



{{-- <div class="max-w-[62rem] mx-auto  p-[20px] mt-2">


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





        <div class="max-w-lg mx-auto">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload
                file</label>
            <input name="image"
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
 --}}


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
