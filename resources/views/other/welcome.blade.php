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
    <style>
        body {
            overflow-y: scroll
        }

        :root {
            --dark-green: #9cc675;
            --dark-yellow: #e89a3d;
            --extra-light-brown: #fdf0d7;
            --light-brown: #ecd5ab;
            --dark-brown: #915b40;
            --light-yellow: #f8e3a8;
            --light-red: #f3ac99;
            --light-teal: #a6c8cc;
            --light-gray: #ddd5d6;
            --theme-color2: #e89a3d;
        }


        .site-logo {
            width: 218.33px !important;
            margin-right: 50px;
        }

        .btn {
            border-radius: 5px;
            font-weight: normal;
            font-size: 15px;
            letter-spacing: 0.02em;
            line-height: 12px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            padding: 14px 30px;
            cursor: pointer;
        }

        .btn-theme {
            background: var(--theme-color1);
            color: #212121;
        }

        .c-container {
            margin: auto;
            width: 93%;
            position: relative;
            z-index: 1;
        }

        .btn-outline-white {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
            background-image: none;
            border-width: 2px;
            border-color: #fff;
            font-weight: 500;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .btn {
            border-radius: 5px;
            font-weight: normal;
            font-size: 15px;
            letter-spacing: 0.02em;
            line-height: 12px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            padding: 14px 30px;
            cursor: pointer;
        }

        .btn-outline-white:hover {
            background-color: #fff;
            color: var(--text-dark);
        }

        /* common css up */

        .testimonial p {
            font-size: 28px;
            letter-spacing: 0.02em;
            line-height: 35px;
        }

        .testimonial .name {
            font-weight: bold;
            font-size: 18px;
            letter-spacing: 0.04em;
            line-height: 35px;
            text-align: left;
        }

        .testimonial .designation {
            font-size: 14px;
            letter-spacing: 0.04em;
            text-align: left;
            color: #fff;
            opacity: 0.65;
        }

        .unt {
            margin-bottom: 20px;
            margin-top: 60px;
        }

        .hero-text {
            font-size: 30px;
            letter-spacing: 0.02em;
            color: #fff;
        }

        .gallery-thumbs {
            height: 100%;
        }

        .gallery-thumbs .swiper-wrapper {
            align-items: center;
        }

        .gallery-thumbs .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px !important;
            height: 350px;
            position: relative;
        }

        .gallery-thumbs .swiper-slide img {
            filter: contrast(0.5) blur(1px);
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .gallery-thumbs .swiper-slide-active img {
            filter: contrast(1) blur(0px) !important;
        }

        .flex-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .flex-row .flex-col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .gallery-thumbs .swiper-wrapper {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }


        .testimonial-section .quote {
            width: 75%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 100px;
            padding-right: 100px;
        }

        .swiper-container.testimonial {
            height: 100vh;
        }

        .testimonial-section .user-saying {
            width: 60%;
            color: #fff;
            height: 100%;
        }

        .testi-user-img {
            width: 40%;
        }

        .testimonial-section {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            height: 100%;
        }

        .testimonial-section .quote p {
            font-size: 20px;
            font-weight: 300;
            line-height: 1.8;
            font-style: italic;
            margin: 0;
        }

        .quote-icon {
            width: 38px;
            display: block;
            margin-bottom: 30px;
        }
    </style>

</head>


<body>

    <!-- Nab bar -->
    <div
        class="w-[100%] h-[15vh] bg-brand-600 gap-[30px] lg:px-[60px] flex md:justify-evenly justify-between items-center relative overflow-hidden">
        <div
            class="lg:text-[32px] md:pl-[0px] px-[20px] text-[24px] font-extrabold flex justify-center items-center gap-[10px]">
            <div class="w-[70px]">
                <img src="./img/book-and-person-summer-svgrepo-com.svg" alt="">
            </div>
            <span class="text-white">Online <span class="text-button-800">Book</span> Store System</span>
    
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

    <!-- welcome section -->
    <div class="lg:h-[550px] md:h-[500px] h-[420px] w-[100%] bg-brand-100 mb-[50px] relative">
        <!-- header and p tab -->
        <div
            class="w-[100%] flex flex-col justify-center items-center lg:pt-[100px] md:pt-[80px] pt-[50px] relative overflow-hidden">
            <h1
                class="text-brand-600 md:text-4xl text-3xl xl:w-[30%] lg:w-[55%] md:w-[60%] w-[80%] font-bold text-center">
                NEED SOMETHING TO FILL YOUR KID'S TIME & ENERGY?
            </h1>
            <p class="text-xl text-brand-600 lg:w-[40%] md:w-[70%] text-center lg:pt-[30px] md:pt-[20px] pt-[15px]">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
                consequuntur dicta aspernatur!
            </p>
            <div class="h-[150px] w-[200px] absolute md:block hidden left-0 top-0 translate-x-[-80px]">
                <img src="./img/cloud1.png" alt="" />
            </div>
            <div class="h-[100px] w-[150px] lg:block hidden absolute left-[20%] bottom-0 rotate-[20deg]">
                <img src="./img/book.png" alt="" />
            </div>
            <div class="h-[100px] w-[150px] absolute md:block hidden right-[23%] top-[20px] rotate-[10degs]">
                <img src="./img/book2.png" alt="" />
            </div>
        </div>
        <!-- button -->
        <div class="w-[100%] flex justify-center items-center md:mt-[20px] mt-[20px]">
            <button class="px-[40px] py-[10px] bg-brand-400 text-brand-100">
                Contact Us
            </button>
        </div>
        <div class="w-[100%]">
            <img src="./img/cloud.png" class="w-[100%] lg:h-[200px] md:h-[160px] h-[100px]" alt="" />
        </div>

        <div class="absolute right-[40px] w-[230px] h-[350px]">
            <img src="./img/shineArrow.png" alt="" class="w-full h-full">
        </div>
    </div>

    <!-- u tube section start -->

    <section class="relative">
        <h1
            class="text-gray-400 lg:text-4xl md:text-2xl text-xl font-semibold mt-[0px] pt-[50px] mb-[30px] translate-y-[-30px] text-center">
            You can get the first box free!
        </h1>
        <!-- phone -->
        <div
            class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[400px] w-[700px]">
            <div class="h-[32px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg">
            </div>
            <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg">
            </div>
            <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg">
            </div>
            <div class="h-[64px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg">
            </div>
            <div style="background-image: url('{{ asset('/img/teacher2.jpg') }}')"
                class="rounded-[2rem] overflow-hidden w-[100%] h-[100%] bg-white dark:bg-gray-800 bg-cover bg-center">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-1-dark.png"
                    class="hidden dark:block w-[272px] h-[572px]" alt="" />
            </div>
            <div class="h-[50px] w-[80px] absolute left-[50%] top-[50%] translate-x-[-50%]  translate-y-[-50%]">
                <img src="./img/play.png" alt="" />
            </div>
        </div>
        <!-- Book -->
        <div class="h-[200px] w-[250px] absolute top-0 ml-[50px] translate-y-[-30px] lg:block hidden">
            <img src="./img/book3.png" alt="" />
        </div>
        <!-- cloud -->
        <div class="h-[200px] w-[250px] absolute left-[300px] top-[72%] lg:block hidden">
            <img src="./img/cloud2.png" alt="" />
        </div>
        <!-- arrow -->
        <div class="absolute h-[300px] w-[300px] right-[15%] top-[0%] translate-y-[-250px] lg:block hidden">
            <img src="./img/shineArrow.png" alt="" />
        </div>
    </section>
    <!-- u tube section end -->

    <!-- how it work section start -->

    <section
        class="bg-brand-50 2xl:h-[120vh] xl:h-[150vh] xl:px-[120px] lg:px-[0px] lg:py-[20px] md:pb-[30px] pb-[20px] mt-[100px]">
        <div class="flex justify-center items-center lg:px-[40px] md:px-[20px] px-[20px]">
            <div class="xl:w-[80%] lg:w-[80%] md:w-[80%] w-[89%]">
                <p
                    class="xl:text-[120px] lg:text-[100px] md:text-[80px] text-[40px] xl:font-bold lg:font-bold md:font-bold font-semibold text-brand-100 p-[10px]">
                    How it Works
                </p>
            </div>
            <div class="xl:w-[20%] lg:w-[20%] md:w-[20%] w-[11%]">
                <img src="./img/shineBook1.png" alt="" class="w-full h-full" />
            </div>
        </div>

        <!-- flex section start -->
        <div
            class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 xl:gap-9 lg:gap-8 md:gap-4 gap-5 xl:px-[60px] lg:px-[20px] px-[30px] xl:pt-[70px] lg:pt-[40px] relative">
            <div class="flex flex-col xl:gap-3 lg:gap-3 md:gap-2">
                <h1 class="xl:text-3xl lg:text-3xl md:text-2xl font-semibold text-brand-800">
                    Sign Up
                </h1>
                <p class="xl:w-[85%] lg:w-[85%] md:w-[95%] xl:text-xl lg:text-xl md:text-lg text-brand-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
                    iure id consequatur molestias dolor eos. Accusantium est non
                    expedita odit.
                </p>
                <p class="xl:text-2xl lg:text-2xl md:text-xl font-semibold text-brand-900">
                    Learn more
                </p>
            </div>
            <div class="flex flex-col xl:gap-3 lg:gap-3 md:gap-2">
                <h1 class="xl:text-3xl lg:text-3xl md:text-2xl font-semibold text-brand-800">
                    Book & activities
                </h1>
                <p class="xl:w-[85%] lg:w-[85%] md:w-[95%] xl:text-xl lg:text-xl md:text-lg text-brand-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum optio
                    dolorem libero alias, quos vitae veritatis magnam. Temporibus, amet
                    quod!
                </p>
                <p class="xl:text-2xl lg:text-2xl md:text-xl font-semibold text-brand-900">
                    Learn more
                </p>
            </div>
            <div class="flex flex-col xl:gap-3 lg:gap-3 md:gap-2">
                <h1 class="xl:text-3xl lg:text-3xl md:text-2xl font-semibold text-brand-800">
                    Book we send
                </h1>
                <p class="xl:w-[85%] lg:w-[85%] md:w-[95%] xl:text-xl lg:text-xl md:text-lg text-brand-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                    adipisci porro recusandae saepe, velit cumque excepturi ea nobis
                    quam aliquam!
                </p>
                <p class="xl:text-2xl lg:text-2xl md:text-xl font-semibold text-brand-900">
                    Learn more
                </p>
            </div>
            <div class="flex flex-col xl:gap-3 lg:gap-3 md:gap-2">
                <h1 class="xl:text-3xl lg:text-3xl md:text-2xl font-semibold text-brand-800">
                    Book & activities
                </h1>
                <p class="xl:w-[85%] lg:w-[85%] md:w-[95%] xl:text-xl lg:text-xl md:text-lg text-brand-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum optio
                    dolorem libero alias, quos vitae veritatis magnam. Temporibus, amet
                    quod!
                </p>
                <p class="xl:text-2xl lg:text-2xl md:text-xl font-semibold text-brand-900">
                    Learn more
                </p>
            </div>

            <div class="w-[200px] absolute bottom-0 right-0 translate-x-[70px] xl:block hidden">
                <img src="./img/shineBook2.png" alt="" class="w-full" />
            </div>
        </div>

        <div class="mt-[40px] w-[200px] translate-x-[70px] translate-y-[60px] xl:block hidden">
            <img src="./img/shineArrow.png" alt="" class="w-full" />
        </div>

        <!-- flex section end -->
    </section>

    <!-- how it works section end -->

    <!-- slider section start -->

    <!-- slider section end -->

    <!-- info -->
    <div class="xl:h-[500px] lg:h-[600px] w-[100%] px-[30px] flex lg:flex-row flex-col mt-[30px] mb-[30px] relative">
        <!-- image part -->
        <div class="xl:w-[50%] lg:w-[40%] w-[100%] h-[100%] flex justify-center items-center">
            <img src="./img/teacher2.jpg" alt="this is teacher and student picture"
                class="xl:rotate-6 lg:rotate-5 rounded-xl overflow-hidden"
                style="
         box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16),
           0 3px 6px rgba(0, 0, 0, 0.23);
       " />
        </div>
        <div class="absolute w-[250px] right-0 "><img src="./img/shineBook3.png" alt=""></div>
        <!-- paragraph part -->
        <div class="lg:w-[50%] w-[100%] h-[100%] flex justify-center flex-col px-[30px] mt-[20px]">
            <h1 class="text-brand-600 font-bold md:text-4xl text-2xl xl:py-[20px] py-[15px]">
                From parent to parent
            </h1>
            <p
                class="xl:text-xl md:text-lg text-sm font-semibold xl:w-[75%] lg:w-[80%] w-[100%] xl:py-[10px] py-[5px]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio atque
                dolorem tempore excepturi qui autem deserunt, voluptatum quos beatae
                voluptate eius nesciunt et. Id, voluptates. Dicta exercitationem quas
                totam ipsam?
            </p>
            <p class="xl:text-xl md:text-lg text-sm font-semibold w-[80%] lg:w-[90%] w-[100%] xl:py-[10px] py-[5px]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                temporibus, a perspiciatis exercitationem, ratione aut expedita facere
                maxime unde cumque porro dolorem minima, ab corrupti et doloribus eos
                dolor distinctio ex ut officiis. Adipisci, temporibus?
            </p>
        </div>
    </div>

    <!-- so how much cost section start -->
    <section class="mt-[0px] mb-[0px] lg:h-[105vh] md:h-[500px] h-[400px] bg-brand-100">
        <div class="flex justify-center xl:px-[100px] xl:pt-[0px] lg:pt-[50px] md:pt-[25px] pt-[35px] lg:px-[80px]">
            <div class="w-[20%] xl:translate-x-[50px] lg:translate-x-[10px]">
                <img src="./img/down_book.png" alt="" />
            </div>
            <div class="lg:w-[50%] w-[100%] flex justify-center items-center xl:pb-0  md:pb-10 md:mb-[0px]">
                <p class="xl:text-5xl lg:text-[30px] md:text-4xl text-[24px] font-bold text-brand-500">
                    So how Much Does it Cost
                </p>
            </div>
            <div
                class="w-[20%] xl:translate-y-[-60px] lg:translate-y-[-60px] md:translate-y-[-60px] translate-y-[-40px] translate-x-[-20px]">
                <img src="./img/shineCloud.png" alt="" />
            </div>
        </div>

        <div class="flex xl:gap-[100px] lg:gap-[100px]">
            <div class="w-[20%] translate-x-[-40px] xl:block lg:block hidden">
                <img src="./imgs/shineCloud2.png" alt="" />
            </div>
            <div
                class="xl:mx-0 xl:mt-[150px] lg:mt-[50px] lg:mx-0 mx-auto xl:w-[50%] lg:w-[40%] md:w-[60%] w-[100%] flex justify-center items-center xl:translate-y-[-70px] lg:translate-y-[-70px] md:translate-y-[-70px] translate-y-[-20px] xl:pt-0 lg:pt-4 md:pt-6 md:px-[10px] px-[20px] md:pt-[40px] pt-[50px]">
                <p
                    class="text-center translate-y-[-100px] xl:text-xl lg:text-xl md:text-xl text-[16px] font-semibold text-brand-700 xl:pr-[30px]">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident
                    dolor nesciunt unde aspernatur. Aperiam, provident dolores
                    aspernatur esse totam accusamus hic numquam doloremque quae!
                </p>
            </div>
        </div>

        <div class="flex justify-center">
            <div
                class="w-[20%] xl:translate-y-[-80px] lg:translate-y-[100px] md:translate-y-[-20px] xl:mr-0 lg:mr-0 md:mr-[60px] rotate-3 relative translate-x-[70px]">
                <img src="./img/bg_book.jpg" alt="" class="opacity-50 xl:block lg:block md:block hidden" />

                <div
                    class="xl:w-[100px] lg:w-[100px] md:w-[80px] xl:h-[30px] lg:h-[30px] md:h-[20px] bg-brand-300 absolute top-0 rotate-[150deg] translate-x-[-15px]">
                </div>
                <div
                    class="xl:w-[100px] lg:w-[100px] md:w-[80px] xl:h-[30px] lg:h-[30px] md:h-[20px] bg-brand-300 absolute bottom-0 right-0 rotate-[150deg] xl:translate-x-[15px] lg:translate-x-[15px] md:translate-x-[25px] xl:translate-y-0 lg:translate-y-0 md:translate-y-[-15px]">
                </div>
            </div>
            <div
                class="w-[50%] flex justify-center xl:translate-y-0 lg:translate-y-0 md:translate-y-[-30px] md:pt-[0px] pt-[20px]">
                <ul
                    class="list-disc xl:text-xl lg:text-xl translate-y- md:text-xl text-md flex flex-col gap-4 font-semibold text-brand-700">
                    <li>
                        <span class="line-through">$79.90</span><span>$49.90<sub>per</sub>month</span>
                    </li>
                    <li>No hidden fee</li>
                    <li>Cancel anytime</li>
                </ul>
            </div>
            <div class="w-[20%] rotate-[355deg] relative xl:mr-0 lg:mr-0 md:mr-9">
                <div
                    class="xl:w-[100px] lg:w-[100px] md:w-[80px] xl:h-[30px] lg:h-[30px] md:h-[20px] bg-brand-300 absolute top-0 rotate-[150deg] z-10 translate-x-[-20px]">
                </div>
                <img src="./img/bg_coffee.jpg" alt="" class="opacity-60 xl:block lg:block md:block hidden" />
                <div
                    class="xl:w-[100px] lg:w-[100px] md:w-[80px] xl:h-[30px] lg:h-[30px] md:h-[20px] bg-brand-300 absolute bottom-0 right-0 rotate-[150deg] z-10 translate-x-[23px] translate-y-[-30px]">
                </div>
            </div>
        </div>
    </section>





    <section class="spacer relative">

        <h1 class="absolute left-[50%] translate-x-[-50%] top-10 text-5xl  text-brand-600 font-bold">BOOK REVIEWS</h1>
        <div class="testimonial-section">
            <div class="testi-user-img">
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="u3" src="https://md-aqil.github.io/images/2091127763_1_1_1.jpg"
                                alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="u1"
                                src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg"
                                alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="u2"
                                src="https://md-aqil.github.io/images/attractive-beautiful-beauty-1986684.jpg"
                                alt="">
                        </div>

                        <div class="swiper-slide">
                            <img class="u4"
                                src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg"
                                alt="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="user-saying bg-brand-300">
                <div class="swiper-container testimonial">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper ">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="quote">
                                <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png"
                                    alt="">
                                <p>
                                    “This is best and biggest unified platform
                                    for instant online admission. We can easily
                                    take admission for any course in any institute..“
                                </p>
                                <div class="name">-Ramkishor Verma-</div>
                                <div class="designation">University Student</div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quote">
                                <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png"
                                    alt="">

                                <p>
                                    “This is best and biggest unified platform
                                    for instant online admission. We can easily
                                    take admission for any course in any institute..“
                                </p>
                                <div class="name">-Ramkishor Verma-</div>
                                <div class="designation">University Student</div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quote">
                                <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png"
                                    alt="">

                                <p>
                                    “This is best and biggest unified platform
                                    for instant online admission. We can easily
                                    take admission for any course in any institute..“
                                </p>
                                <div class="name">-Ramkishor Verma-</div>
                                <div class="designation">University Student</div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quote">
                                <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png"
                                    alt="">

                                <p>
                                    “This is best and biggest unified platform
                                    for instant online admission. We can easily
                                    take admission for any course in any institute..“
                                </p>
                                <div class="name">-Ramkishor Verma-</div>
                                <div class="designation">University Student</div>

                            </div>
                        </div>

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination swiper-pagination-white"></div>

                </div>
            </div>
        </div>
    </section>


    <!-- so how much cost section end -->

    <!-- register 2. -->
    <div
        class="lg:h-[750px] md:h-[700px] h-[620px] w-[100%] flex justify-center items-center flex-col  relative mt-[0px] md:mb-[30px] translate-y-[-50px]">
        <h1 class="lg:text-5xl md:text-4xl text-3xl font-bold text-brand-600 py-[5px]">
            Ready to take a free trial?
        </h1>
        <p
            class="md:text-xl text-lg lg:w-[50%] md:w-[60%] w-[90%] text-center py-[30px] text-brand-600 lg:leading-relaxed">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sint
            repellat veritatis quasi placeat odio possimus aperiam minus.
        </p>
        <!-- form start -->
        <div
            class="lg:h-[400px] md:h-[400px] h-[450px] xl:w-[35%] lg:w-[45%] md:w-[60%] w-[100%] bg-brand-200 md:border md:border-brand-600 md:border-solid md:rounded-3xl flex items-center flex-col gap-5">
            <!-- form header -->
            <div class="py-[20px] px-[60px] w-[100%] flex">
                <h1 class="text-2xl font-semibold text-brand-600 md:ml-[0px] ml-[65px]">
                    Email Us Now
                </h1>
            </div>
            <!-- name -->
            <div class="flex justify-center md:gap-2 gap-[30px] md:flex-row flex-col md:mr-[0px] mr-[20px]">
                <input type="text"
                    class="h-[40px] md:w-[200px] w-[310px] px-[5px] outline-none border border-brand-400"
                    placeholder="First Name" />
                <input type="text"
                    class="h-[40px] md:w-[200px] w-[310px] px-[5px] outline-none border border-brand-400"
                    placeholder="Last Name" />
            </div>
            <!-- email -->
            <div>
                <input type="text"
                    class="h-[40px] md:w-[410px] w-[310px] px-[5px] outline-none border border-brand-400 md:mr-[0px] mr-[20px]"
                    placeholder="E-mail address" />
            </div>
            <!-- Phone Number -->
            <div>
                <input type="text"
                    class="h-[40px] md:w-[410px] w-[310px] px-[5px] outline-none border border-brand-400 md:mr-[0px] mr-[20px]"
                    placeholder="Phone Number" />
            </div>
            <!-- button -->
            <div
                class="w-[100%] flex md:justify-normal justify-center xl:px-[60px] lg:px-[30px] md:px-[30px] pt-[20px] md:mr-[0px] mr-[20px]">
                <button class="h-[40px] w-[100px] bg-brand-300 rounded-xl"
                    style="
           box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
             0 1px 2px rgba(0, 0, 0, 0.24);
         ">
                    Send Now
                </button>
            </div>
        </div>
        <div class="h-[300px] w-[300px] lg:block hidden absolute right-[2%] top-[8%] z-[-1]">
            <img src="./img/cloud2.png" alt="" />
        </div>
        <div class="h-[280px] w-[250px] absolute left-[10%] xl:block hidden">
            <img src="./img/book3.png" alt="" />
        </div>
        <div class="h-[300px] w-[300px] absolute left-0 bottom-0 translate-y-[70%] lg:block hidden">
            <img src="./img/cloud2.png" alt="" />
        </div>
        <div class="absolute right-0 top-[60%] w-[350px]">
            <img src="./img/shineBook3.png" alt="">
        </div>
    </div>




    <!-- footer section start -->
    <footer class="bg-brand-200 rounded-lg shadow dark:bg-gray-900 ">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="./img/book-and-person-summer-svgrepo-com.svg" class="h-12" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Literlary
                        Loom</span>
                </a>
                <ul
                    class="flex flex-wrap gap-5 items-center mb-6 text-lg font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
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

        </div>
    </footer>

    <!-- footer section end -->
</body>

<script src="https://md-aqil.github.io/images/swiper.min.js"></script>
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: '2',
        // coverflowEffect: {
        //   rotate: 50,
        //   stretch: 0,
        //   depth: 100,
        //   modifier: 1,
        //   slideShadows : true,
        // },

        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 50,
            modifier: 6,
            slideShadows: false,
        },

    });


    var galleryTop = new Swiper('.swiper-container.testimonial', {
        speed: 400,
        spaceBetween: 50,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        direction: 'vertical',
        pagination: {
            clickable: true,
            el: '.swiper-pagination',
            type: 'bullets',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });
</script>

</html>
