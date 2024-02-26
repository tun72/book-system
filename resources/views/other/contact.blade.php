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
    @vite('resources/css/other.css')
    @vite('resources/js/other.js')
</head>

<body>
    <!-- Header -->
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
                <li><a href="/qanda">Q & A</a></li>
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
    <div class="flex justify-center items-center gap-[10px] mt-[30px] mb-[30px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256">
            <path fill="currentColor"
                d="M224 52H32a4 4 0 0 0-4 4v136a12 12 0 0 0 12 12h176a12 12 0 0 0 12-12V56a4 4 0 0 0-4-4m-10.28 8L128 138.57L42.28 60ZM216 196H40a4 4 0 0 1-4-4V65.09L125.3 147a4 4 0 0 0 5.4 0L220 65.09V192a4 4 0 0 1-4 4" />
        </svg>
        <h1 class="text-4xl font-semibold">Contact Us</h1>
    </div>

    <!-- p tab -->
    <div class="flex justify-center items-center mb-[30px]">
        <p class="w-[50%] text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
            reprehenderit sed a iste itaque. Incidunt possimus quam ratione harum
            eveniet.
        </p>
    </div>
    <!-- Body -->
    <div class="w-[100%] flex px-[100px] mb-4">
        <!-- Map -->
        <div class="w-[50%] pt-[40px]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25703.07319168187!2d95.63254306398882!3d16.73759156924631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1708096767797!5m2!1sen!2smm"
                class="h-[500px] w-[100%]" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="flex justify-center items-center gap-2 mt-[30px]" style="cursor: pointer">
                <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M424 80H88a56.06 56.06 0 0 0-56 56v240a56.06 56.06 0 0 0 56 56h336a56.06 56.06 0 0 0 56-56V136a56.06 56.06 0 0 0-56-56m-14.18 92.63l-144 112a16 16 0 0 1-19.64 0l-144-112a16 16 0 1 1 19.64-25.26L256 251.73l134.18-104.36a16 16 0 0 1 19.64 25.26" />
                </svg>
                <span>admin@gmail.com</span>
            </div>
        </div>

        <!-- form -->
        <div class="w-[50%] mx-[50px] flex flex-col justify-center items-center mt-[10px] border-l-[1px]">
            <div class="flex flex-col gap-[5px] mb-[20px]">
                <label for="name" class="text-lg font-semibold">Name</label>
                <input class="bg-gray-200 py-[10px] px-[10px] h-[50px] w-[400px] outline-none rounded" type="text"
                    placeholder="Enter Your Name" />
            </div>
            <div class="flex flex-col gap-[5px] mb-[20px]">
                <label for="email" class="text-lg font-semibold">E-mail</label>
                <input class="bg-gray-200 py-[10px] px-[10px] h-[50px] w-[400px] outline-none rounded" type="email"
                    placeholder="Enter Your E-mail" />
            </div>
            <div class="flex flex-col gap-[5px] mb-[20px]">
                <label for="message" class="text-lg font-semibold">Your Message</label>
                <textarea class="h-[300px] w-[400px] bg-gray-200 rounded px-[10px] py-[10px]" name="" id="message"
                    cols="30" rows="10" placeholder="Enter Your Message"></textarea>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 w-[200px] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">
                Send message
            </button>
        </div>
    </div>
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
