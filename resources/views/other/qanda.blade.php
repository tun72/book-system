<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
@vite('resources/css/other.css')
@vite('resources/js/other.js')
</head>

<body>
    <div
        class="w-[100%] h-[15vh] bg-brand-600 gap-[30px] lg:px-[60px] flex md:justify-evenly justify-between items-center relative overflow-hidden">
        <div
            class="lg:text-[32px] md:pl-[0px] px-[20px] text-[24px] font-extrabold flex justify-center items-center gap-[10px]">
            <div class="w-[70px]">
                <img src="./img/book-and-person-summer-svgrepo-com.svg" alt="">
            </div>
            <span class="text-[#2993FF]">Literlary</span>
            <span class="text-[#a1cc35]">Loom</span>
        </div>
        <div class="md:block hidden">
            <ul class="flex gap-9 text-brand-200 cursor-pointer text-lg">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/qnada">Q & A</a></li>
            </ul>
        </div>
        <div class="md:mr-[150px]">
            <a href="/contact"
                class="px-[20px] py-[5px] border border-[#2993FF] rounded-lg border-solid cursor-pointer text-white text-lg font-semibold">Contact
                Us</a>
        </div>

        <div class="hidden text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M2 8a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Zm1 3a1 1 0 1 0 0 2h12a1 1 0 1 0 0-2H3Z" />
            </svg>
        </div>
        <div class="absolute h-[200px] md:block hidden w-[200px] right-0 translate-y-[20px] translate-x-[30px]">
            <img src="./img/cloud1.png" alt="" />
        </div>

        <div class="md:hidden block text-white md:pr-[0px] pr-[10px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M2 8a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m1 3a1 1 0 1 0 0 2h12a1 1 0 1 0 0-2z" />
            </svg>
        </div>
    </div>
    <div class="flex justify-center items-center mt-[30px] gap-[20px] h-[100px]">
        <div class="h-[60px] w-[60px] rounded-full bg-[gray] flex justify-center items-center"></div>
        <p class="text-3xl font-bold italic text-gray-500 text-center">
            Literlary Loom
        </p>
    </div>
    <p class="text-xl text-gray-400 text-center mt-[20px] mb-[20px]">
        How can we help you?
    </p>
    <div class="flex justify-center items-center">
        <svg class="translate-x-[35px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14" />
        </svg>
        <input
            style="
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
          0 1px 2px rgba(0, 0, 0, 0.24);
      "
            class="outline-none rounded-lg text-lg py-[10px] px-[40px] w-[350px] border-none" type="search"
            name="" id="" placeholder="Describe Your Issue" />
    </div>
    <h1 class="text-2xl font-semibold text-gray-400 mt-[30px] mb-[40px] px-[100px]">
        Frequently Asked Questions
    </h1>

    <!-- Collapse -->
    <div class="px-[100px] mb-[50px]">
        <div id="accordion-collapse" data-accordion="collapse">
            <!-- 1st -->
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span>How to save your favourite books?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">
                        Go to the top right cornor of the screen and click the login
                        button. Fill and Form and Enjoy saving your favourite Books for
                        free!
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        Is this answer helpfful?
                        <a href="/docs/getting-started/introduction/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">ask question?
                        </a>
                    </p>
                </div>
            </div>
            <!-- 2nd -->
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span>How to unlock the Books?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">
                        To unlock some books, you need to purchase the coin from the store
                        and unlock it.
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        Was this
                        <a href="https://flowbite.com/figma/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Comment</a>
                        helpfful?
                    </p>
                </div>
            </div>
            <!-- 3rd -->
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span>How to publish books on Literlary Loom?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">
                        To publish Books, you need to register as an author and you can
                        start publishing books and earn coins which can be exchanged with
                        money form store.
                    </p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">
                        Note: You can sell books only after publishing 3 finished books.
                    </p>
                </div>
            </div>
            <!-- 4th -->
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span>What types of manuscripts are you currently accepting?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">
                        We are currently accepting manuscripts in a variety of genres,
                        including fiction, non-fiction, and poetry. Please check our
                        submissions page for a complete list of the genres we are
                        accepting at this time.
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        Is this answer helpfful?
                        <a href="/docs/getting-started/introduction/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">ask question?
                        </a>
                    </p>
                </div>
            </div>
            <!-- 5th -->
            <h2 id="accordion-collapse-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                    aria-controls="accordion-collapse-body-5">
                    <span>Do you offer any discounts on online reading subscriptions?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">
                        Yes, we offer discounts on online reading subscriptions for
                        students, military personnel, and seniors. Please visit our
                        subscriptions page for more information on the available
                        discounts.
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        Is this answer helpfful?
                        <a href="/docs/getting-started/introduction/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">ask question?
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-gray-200 shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Literlary
                        Loom</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023
                <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>.
                All Rights Reserved.</span>
        </div>
    </footer>

</body>

</html>
