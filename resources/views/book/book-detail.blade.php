@php
    $reviews = $book->latest()->paginate(4);
    $index = 0;
    $random = ['warning', 'danger', 'info', 'success', 'secondary'];
@endphp

<x-home-layout>

    <x-price-model :book="$book" />

    <section class="w-full overflow-y-hidden">
        <div class="w-full grid grid-cols-12 gap-[2rem]">
            <div class="col-span-3">
                <div class="fixed top-[85px] z-10 flex flex-col items-center gap-5">
                    <div class="w-[230px] h-[290px]  rounded-lg overflow-hidden">
                        <img src="{{ $book->image }}" alt="" class="w-full h-full object-cover">
                    </div>
                    @auth
                        @if (!auth()->user()?->isBought($book))
                            {{-- <div class="">
                                <form action="/books/{{ $book->slug }}/favourite" method="POST">
                                    @csrf
                                    @if (auth()->user()?->isFavourited($book))
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-[3.7rem] py-2 text-center me-2  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Unfavourited</button>
                                    @else
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-[5.7rem] py-2 text-center me-2  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Want
                                            to Read</button>
                                    @endif
                                </form>
                            </div> --}}
                            <div class="">
                                <button type="button" data-modal-target="popup-modal-{{ $book->id }}"
                                    data-modal-toggle="popup-modal-{{ $book->id }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-[5.7rem] py-2 text-center me-2  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buy
                                    Now</button>
                            </div>
                        @else
                            <form action="/book/chapter/{{ $book->chapters[0]->slug }}/read" method="GET">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">
                                    read
                                </button>
                            </form>
                        @endif

                        <div class=" text-2xl text-gray-500 flex flex-col">
                            <a class="flex gap-3 items-center" href="#" data-modal-target="report-modal"
                                data-modal-toggle="report-modal">
                                <i class="far fa-flag"></i>
                                <div class="text-center text-xl text-gray-600 ">
                                    <span class="text-sm">Report Now</span>
                                </div>
                            </a>
                        </div>
                    @endauth



                </div>
            </div>

            <div class="flex flex-col gap-4 flex-auto col-span-9">
                <div>
                    <h1 class="text-3xl text-gray-700 font-semibold">{{ $book->title }}</h1>
                </div>

                <div class="flex text-xl font-light ">
                    <h1 class=""> <a
                            href="/author/{{ $book->user->username }}/profile">{{ $book->user->name }}</a></h1>
                </div>

                <div class="flex items-center gap-5">
                    <p class="star">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $book->rating)
                                <i class="fas fa-star text-star-400"></i>
                            @else
                                <i class="far fa-star text-star-400"></i>
                            @endif
                        @endfor

                    </p>
                    <div class="text-3xl flex justify-center items-center font-bold">
                        <h2>{{ number_format($book->rating, 2, '.', ',') }} </h2>
                    </div>


                </div>

                <p>
                    {{ $book->caption }}
                </p>
                <div class="flex gap-4 font-semibold underline-offset-8 decoration-green-400">
                    <a href="#" class="">Genere</a>
                    @foreach ($book->genres as $gen)
                        <a href="#" class="">{{ $gen->name }}</a>
                    @endforeach
                </div>

                <div class="text-gray-500">
                    <p>{{ count($book->chapters) }} chapters, Kindle Edition</p>
                </div>

                <div class="text-gray-500">
                    <p>First published {{ $book->created_at->diffForHumans() }}</p>
                </div>

                <div class="flex items-center font-semibold gap-2 text-lg arrow cursor-pointer">
                    <p class="">Book Details and Editions</p>
                </div>

                <div class="flex flex-col gap-4 detail">
                    <div class="text-lg w-[80%]">
                        <p>{{ $book->body }}
                        </p>
                    </div>

                </div>

                <div class="text-lg font-semibold mt-4">
                    <h1>Related Books</h1>
                </div>

                <div class="flex gap-6">
                    @if (count($randomBooks) > 0)
                        @foreach ($randomBooks as $randbook)
                            <!-- Book Card 1 -->
                            <div class="w-[180px]">
                                <a href="/book-details/{{ $randbook->slug }}"> <img src="{{ $randbook->image }}"
                                        alt="">

                                    <div class="text-lg text-gray-500 mt-2">
                                        <h1>{{ $randbook->title }}</h1>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="h-[2px] w-[100%] bg-gray-300"></div>
                <!-- peoples -->
                <div class=" w-[100%] flex justify-between items-center mt-3">
                    <div class="flex  w-[50%] items-center gap-3">
                        <div class="flex">
                            @php
                                $index = 0;
                            @endphp

                            @foreach ($book->purchasers as $reader)
                                <img src="{{ $reader->imageUrl }}" alt=""
                                    class="w-[3rem] h-[3rem] rounded-full border-[3px] border-gray-300 {{ $index++ > 0 ? 'ml-[-15px]' : '' }} ">
                            @endforeach
                        </div>
                        <p class="">{{ count($book->purchasers) }} people are currently reading</p>
                    </div>
                </div>
                <!-- border line bottom -->
                <div class="h-[2px] w-[100%] bg-[#e8e7e6]"></div>

                <div class="w-[100%] mb-5">
                    <h1 class="text-2xl font-semibold mb-4">
                        About the author
                    </h1>
                    <!-- the row -->
                    <div
                        class="flex justify-between items-center gap-5   mb-4                                                                                                                                                                                               ">
                        <!-- the profile and desc -->
                        <div class="flex justify-center items-center gap-[20px]">
                            <!-- profile circle -->
                            <div
                                class="h-[70px] w-[70px] rounded-full overflow-hidden flex justify-center items-center">
                                <img class="" src="{{ $book->user->imageUrl }}" alt="" />
                            </div>
                            <!-- Profile name & followers -->
                            <div>
                                <p class="text-xl font-semibold">{{ $book->user->name }}</p>
                                <span class="font-light text-sm">{{ count($book->user->books) }} books</span>
                                <span class="font-light text-sm"> . </span>
                                <span class="font-light text-sm">{{ count($book->user->author->subscribers) }}
                                    followers</span>
                            </div>
                        </div>

                        @auth
                            <form action="/user/{{ $book->user->id }}/subscribe" method="POST">
                                @csrf
                                @if (auth()->user()->isSubscribed($book->user->author))
                                    <button type="submit"
                                        class="py-3 px-5 bg-gray-700 text-white text-sm font-semibold text-center rounded-3xl ml-[-5px]">Subscribed</button>
                                @else
                                    <button
                                        class="py-3 px-5 bg-white text-black text-sm font-semibold text-center rounded-3xl ml-[-5px]">Subscribe</button>
                                @endif

                            </form>
                        @endauth


                    </div>
                    <p class="">
                        {{ $book->user->author->about }}
                    </p>
                </div>

                <div class="h-[2px] w-[100%] bg-[#e8e7e6]"></div>

                <div class="w-[100%] mt-4 mb-6">
                    <h1 class="text-2xl font-semibold mb-5">
                        Chapters
                    </h1>

                    @foreach ($book->chapters as $chapter)
                        <label>
                            <input class="peer/showLabel absolute scale-0" type="checkbox" />
                            <span
                                class="block max-h-14 w-full overflow-hidden  bg-emerald-100 px-4 py-0 text-cyan-800 shadow-lg transition-all duration-300 peer-checked/showLabel:max-h-52">
                                <div class="flex items-center  w-full gap-4">
                                    <h3 class="flex h-14 cursor-pointer items-center font-bold">
                                        Chapter-{{ $chapter->chapter }} </h3>
                                    @if (!$chapter->isfree)
                                        <span class="text-sm text-gray-800"><i class="fas fa-lock"></i></span>
                                    @else
                                        <span class="text-sm text-gray-800"><i class="fas fa-lock-open"></i></span>
                                    @endif
                                    <a class="text-sm italic"
                                        href="{{ $chapter->isfree
                                            ? '/book/chapter/' . $chapter->slug . '/read'
                                            : '#' }} ">{{ $chapter->title }}</a>

                                </div>
                                <p class="mb-2">{{ $chapter->intro }}</p>
                            </span>
                        </label>
                    @endforeach

                </div>
                <div class="h-[2px] w-[100%] bg-gray-300 "></div>



                <div class="mb-4 w-full">
                    <div class="flex items-center  mb-3">
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
                        <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
                        <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
                    </div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">1,745 global ratings</p>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">5
                            star</a>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 70%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">70%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">4
                            star</a>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 17%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">17%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">3
                            star</a>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 8%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">2
                            star</a>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 4%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">4%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">1
                            star</a>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 1%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">1%</span>
                    </div>
                </div>


                <div class="h-[2px] w-[100%] bg-gray-300 "></div>



                <!-- Rating and Review    Start -->
                <div class="w-[100%] mb-5">
                    <!-- Head -->
                    <div class="">
                        <h1 class="text-4xl font-semibold">Rating & Reviews</h1>
                    </div>
                    <!-- body -->
                    <div class="flex justify-center items-center flex-col gap-[30px] mt-[30px]">
                        <!-- circle -->
                        <div
                            class="h-[60px] w-[60px] rounded-full flex justify-center items-center overflow-hidden bg-[#cfccc9]">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24">
                                #cfccc9
                                <path fill="currentColor"
                                    d="M14 9.9V8.2q.825-.35 1.688-.525T17.5 7.5q.65 0 1.275.1T20 7.85v1.6q-.6-.225-1.213-.337T17.5 9q-.95 0-1.825.238T14 9.9m0 5.5v-1.7q.825-.35 1.688-.525T17.5 13q.65 0 1.275.1t1.225.25v1.6q-.6-.225-1.213-.338T17.5 14.5q-.95 0-1.825.225T14 15.4m0-2.75v-1.7q.825-.35 1.688-.525t1.812-.175q.65 0 1.275.1T20 10.6v1.6q-.6-.225-1.213-.338T17.5 11.75q-.95 0-1.825.238T14 12.65M6.5 16q1.175 0 2.288.263T11 17.05V7.2q-1.025-.6-2.175-.9T6.5 6q-.9 0-1.788.175T3 6.7v9.9q.875-.3 1.738-.45T6.5 16m6.5 1.05q1.1-.525 2.213-.787T17.5 16q.9 0 1.763.15T21 16.6V6.7q-.825-.35-1.713-.525T17.5 6q-1.175 0-2.325.3T13 7.2zM12 20q-1.2-.95-2.6-1.475T6.5 18q-1.05 0-2.062.275T2.5 19.05q-.525.275-1.012-.025T1 18.15V6.1q0-.275.138-.525T1.55 5.2q1.15-.6 2.4-.9T6.5 4q1.45 0 2.838.375T12 5.5q1.275-.75 2.663-1.125T17.5 4q1.3 0 2.55.3t2.4.9q.275.125.413.375T23 6.1v12.05q0 .575-.487.875t-1.013.025q-.925-.5-1.937-.775T17.5 18q-1.5 0-2.9.525T12 20m-5-8.35" />
                            </svg>
                        </div>
                        <h1 class="text-4xl font-bold">What do you think?</h1>
                        <!-- Stars and button -->
                        <div class="flex w-[40%] justify-evenly items-center">
                            <!-- star -->
                            <div class="flex justify-center flex-col">
                                <div class="flex py-[10px]" style="cursor: pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m22 9.24l-7.19-.62L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27L18.18 21l-1.63-7.03zM12 15.4l-3.76 2.27l1-4.28l-3.32-2.88l4.38-.38L12 6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m22 9.24l-7.19-.62L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27L18.18 21l-1.63-7.03zM12 15.4l-3.76 2.27l1-4.28l-3.32-2.88l4.38-.38L12 6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m22 9.24l-7.19-.62L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27L18.18 21l-1.63-7.03zM12 15.4l-3.76 2.27l1-4.28l-3.32-2.88l4.38-.38L12 6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m22 9.24l-7.19-.62L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27L18.18 21l-1.63-7.03zM12 15.4l-3.76 2.27l1-4.28l-3.32-2.88l4.38-.38L12 6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m22 9.24l-7.19-.62L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21L12 17.27L18.18 21l-1.63-7.03zM12 15.4l-3.76 2.27l1-4.28l-3.32-2.88l4.38-.38L12 6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z" />
                                    </svg>
                                </div>
                                <span class="pl-[30px]">Rate this Book</span>
                            </div>
                            <!-- button -->
                            <div class="h-[50px] w-[150px] bg-[#1e1915] flex justify-center items-center rounded-3xl">
                                <button class="text-white text-center" data-modal-target="comment-modal"
                                    data-modal-toggle="comment-modal">Write a review</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-[2px] w-[100%] bg-gray-300 "></div>



                <!-- Rating and Review    End -->

                <!-- Reviews              Start-->

                <div class="w-[100%] ">
                    <!-- Head -->
                    <div class="mb-3">
                        <span>Displaying top 1-10 reviews</span>
                    </div>
                    <!-- body -->
                    @foreach ($book->reviews as $review)
                        <div class="w-[100%] grid grid-cols-8">
                            <!-- First part -->
                            <div class="flex flex-col col-span-2">
                                <!-- circle -->
                                <div class="h-[60px] w-[60px] rounded-full overflow-hidden">
                                    <img src="{{ $review->user->imageUrl }}" alt="">
                                </div>
                                <h1 class="font-bold py-[5px] text-xl">{{ $review->user->name }}</h1>
                                <span>48 reviews</span>

                            </div>

                            <!-- Second part -->
                            <div class="col-span-6 flex flex-col gap-4 mt-5">
                                <!-- Stars -->
                                <div class="flex" style="cursor: pointer">
                                    <span>Rating.{{ $review->rating }}⭐</span>
                                </div>
                                <p class="">
                                    {{ $review->body }}
                                </p>

                                <span
                                    class="text-sm  text-gray-600 font-bold cursor-pointer">{{ count($review->likes) }}
                                    likes</span>

                                <!-- like comment and see more -->
                                <div class="flex  justify-start  gap-5" style="cursor: pointer">
                                    <!-- like -->
                                    @auth
                                        @if (!$review->isLiked(auth()->user()))
                                            <form action="/reviews/{{ $review->id }}/like" method="POST">
                                                @csrf
                                                <button class="border-none outline-none" class="flex text-base">
                                                    <i class="far fa-thumbs-up"></i>
                                                    <span>like</span>
                                                </button>
                                            </form>
                                        @else
                                            <form action="/reviews/{{ $review->id }}/unlike" method="POST">
                                                @csrf
                                                <button class="border-none outline-none" class="flex text-base">
                                                    <i class="fas fa-thumbs-up" style="color: #1975d7;"></i>
                                                    <span>unlike</span>
                                                </button>
                                            </form>
                                        @endif
                                    @else
                                        <form action="#" method="POST">
                                            @csrf
                                            <button class="border-none outline-none" class="flex text-base">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>like</span>
                                            </button>
                                        </form>
                                    @endauth

                                    <div class="flex items-center gap-1"
                                        aria-controls="dropdown-comment-{{ $review->id }}"
                                        data-collapse-toggle="dropdown-comment-{{ $review->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.89 1 4.127L3 21l4.873-1c1.236.639 2.64 1 4.127 1" />
                                        </svg>
                                        <span>comment</span>
                                    </div>


                                    <!-- see more -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g fill="none">
                                            <path
                                                d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                            <path fill="currentColor"
                                                d="M5 10a2 2 0 1 1 0 4a2 2 0 0 1 0-4m7 0a2 2 0 1 1 0 4a2 2 0 0 1 0-4m7 0a2 2 0 1 1 0 4a2 2 0 0 1 0-4" />
                                        </g>
                                    </svg>
                                </div>

                                <div id="dropdown-comment-{{ $review->id }}" class="hidden">
                                    <form action="/reviews/{{ $review->id }}/comment" method="POST">
                                        @csrf
                                        <label for="chat" class="sr-only">Your message</label>
                                        <div class="flex items-center  rounded-lg">
                                            <textarea id="chat" rows="1" name="body"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Your message..."></textarea>
                                            <button type="submit"
                                                class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                                                <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 18 20">
                                                    <path
                                                        d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                                                </svg>
                                                <span class="sr-only">Send message</span>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="mt-4 flex flex-col gap-4">
                                        @foreach ($review->comments as $comment)
                                            <div class=" mb-3 flex items-start gap-4">
                                                <div class="w-[3rem] h-[3rem] rounded-full overflow-hidden">
                                                    <img src="{{ $comment->user->imageUrl }}" alt="">
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <div class="flex gap-4 items-center">
                                                        <h1 class="font-bold text-base">{{ $comment->user->name }}
                                                        </h1>
                                                        <span
                                                            class="text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                                                    </div>
                                                    {{-- <span>{{ $comment->user->id === $book->user->id ? 'Owner' : '' }}</span>
                                                    <span>{{ $comment->user->id === auth()->user()->id ? 'You' : '' }}</span> --}}
                                                    <p>{{ $comment->body }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="h-[2px] w-[100%] bg-gray-300 mt-3 mb-3"></div>
                    @endforeach
                </div>

                <!-- Reviews              End -->

            </div>

        </div>
    </section>

    <!-- Main modal -->
    <div id="comment-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Write a review
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="comment-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="/books/{{ $book->slug }}/review" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">

                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating ⭐</label>
                            <div class="relative flex items-center max-w-[8rem] mb-5">
                                <button type="button" id="decrement-button"
                                    data-input-counter-decrement="quantity-input"
                                    class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="text" id="quantity-input" data-input-counter
                                    aria-describedby="helper-text-explanation" name="rating"
                                    class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="999" required>
                                <button type="button" id="increment-button"
                                    data-input-counter-increment="quantity-input"
                                    class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                            <textarea id="description" rows="4" name="body"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new product
                    </button>
                </form>
            </div>
        </div>
    </div>

    @auth
        <div id="report-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Report
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="report-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="px-4 md:px-5 pb-6">
                        <form class="space-y-4" action="/book/{{ $book->slug }}/report" method="POST">
                            @csrf
                            <div>
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input type="text" name="title" id="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="name@company.com" required>
                            </div>
                            <div>

                                <input type="hidden" name="user_id" id="" value="{{ auth()->user()->id }}">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">About</label>
                                <textarea id="message" rows="4" name="about"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your thoughts here..."></textarea>

                            </div>

                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
    {{-- <script>
        let arrowBtn = document.querySelector('.arrow');
        let detail = document.querySelector('.detail');
        let arrowDiv = document.querySelector('.arrowDiv');

        function none() {
            arrowBtn.style.display = 'none';
        }

        function flex() {
            detail.style.display = 'flex';
        }

        arrowBtn.addEventListener('click', function() {
            none();
            flex();
        })
    </script> --}}
</x-home-layout>
