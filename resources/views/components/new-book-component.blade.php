{{-- <div class="recommend mb-4">
    <h3 class="text-lg font-bold"><i class="fas fa-bullhorn me-2"></i></i>New Book</h3>
    <div class="recommend-books">
        <ul class="recommend-list">
            @foreach ($books as $book)
                <x-book :book="$book" />
            @endforeach
        </ul>
    </div>
</div> --}}


<div class="w-full mb-6 mt-6 ">
    <h3 class="text-2xl font-bold text-brand-700 mb-6"><i class="fas fa-bullhorn me-2"></i></i>New Book</h3>
    <div class="w-full relative flex items-center justify-center">
        <button aria-label="slide backward"
            class="absolute z-30 left-[-1%]  bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="prev_new">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <ul class="mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="slider-new"
                class="h-full flex  lg:gap-10 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                @foreach ($books as $key => $book)
                    <div class="border border-gray-200 bg-white dark:border-none w-[30rem]">
                        <div class="bg-gray-200 w-[8rem] ">
                            <a href="/book-details/{{ $book->slug }}" class="relative">
                                <img src="{{ $book->image }}" alt=""
                                    class="hover:scale-110 transition-all object-cover w-full h-[12rem] mx-auto rounded-lg shadow-lg">
                                @if ($book->isFree == 0)
                                    <span
                                        class="book-status bg-green-900 text-green-300 border border-green-400 text-sm me-2 px-2.5 py-0.5 rounded-full">free</span>
                                    {{-- <span class="book-status bg-yellow-600">free</span> --}}
                                @else
                                    <span
                                        class="book-status bg-yellow-900 text-yellow-300 border border-yellow-300 text-sm rounded-full"><i
                                            class="fa-solid fa-crown"></i></span>
                                @endif
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>
        </ul>
        <button aria-label="slide forward"
            class="absolute z-30 right-[-2%] bg-white rounded-full w-[2rem] h-[2rem] flex items-center justify-center"
            id="next_new">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>



{{-- <div class="border border-gray-200 dark:border-none">
    <div class="bg-gray-200 ">
        <a href="#" class="">
            <img src="https://i.postimg.cc/PJfcCckY/pexels-alex-azabache-3907507.jpg" alt=""
                class="object-cover w-full h-[120px] mx-auto">
        </a>
    </div>
    <div class="p-4 dark:bg-gray-900">
        <h3 class="flex items-center justify-between mb-4 text-xl font-medium dark:text-gray-400">
            Product name
            <span class="">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="text-red-500 dark:text-gray-400 bi bi-heart"
                        viewBox="0 0 16 16">
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                </a>
            </span>
        </h3>
        <ul class="flex mb-4 justify-items-start ">
            <li>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor"
                        class="w-4 mr-1 text-yellow-700 dark:text-gray-400 bi bi-star "
                        viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg></a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="w-4 mr-1 text-yellow-700 dark:text-gray-400 bi bi-star"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="w-4 mr-1 text-yellow-700 dark:text-gray-400 bi bi-star"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="w-4 mr-1 text-yellow-700 dark:text-gray-400 bi bi-star"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="w-4 mr-1 text-yellow-700 dark:text-gray-400 bi bi-star"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="w-4 mr-1 text-yellow-700 dark:text-gray-400 bi bi-star"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                </a>
            </li>
        </ul>
        <p class="text-lg font-bold text-gray-600 dark:text-gray-400 ">
            <span>$99</span>
        </p>
    </div>
</div> --}}
