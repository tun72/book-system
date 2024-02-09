<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        body {
            overflow-y: scroll
        }
    </style>

</head>


<body>
    <!-- Nab bar -->
    <div
        class="w-[100%] h-[15vh] bg-brand-600 lg:px-[60px] flex md:justify-evenly justify-between items-center relative overflow-hidden">
        <div class="lg:text-[32px] md:pl-[0px] px-[20px] text-[24px] font-extrabold">
            <span class="text-[#df3887]">Big</span>
            <span class="text-[#a1cc35]">Little</span>
        </div>
        <div class="md:block hidden">
            <ul class="flex gap-5 text-brand-200">
                <li>Home</li>
                <li>Pricing</li>
                <li>About us</li>
                <li>Activities</li>
            </ul>
        </div>
        <div class="md:mr-[150px]">
            <p class="px-[10px] py-[5px] border border-[#de4891] border-solid text-[#db2e7f]">
                Contact Us
            </p>
        </div>

        <div class="hidden text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M2 8a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Zm1 3a1 1 0 1 0 0 2h12a1 1 0 1 0 0-2H3Z" />
            </svg>
        </div>
        <div class="absolute h-[200px] md:block hidden w-[200px] right-0 translate-y-[20px] translate-x-[30px]">
            <img src="./imgs/pngwing.com.png" alt="" />
        </div>

        <div class="md:hidden block text-white md:pr-[0px] pr-[10px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M2 8a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m1 3a1 1 0 1 0 0 2h12a1 1 0 1 0 0-2z" />
            </svg>
        </div>
    </div>

    <!-- welcome section -->
    <div class="lg:h-[550px] md:h-[500px] h-[420px] w-[100%] bg-brand-200 mb-[50px]">
        <!-- header and p tab -->
        <div class="w-[100%] flex flex-col justify-center items-center lg:pt-[100px] md:pt-[80px] pt-[50px]">
            <h1
                class="text-brand-600 md:text-4xl text-3xl xl:w-[30%] lg:w-[55%] md:w-[60%] w-[80%] font-bold text-center">
                NEED SOMETHING TO FILL YOUR KID'S TIME & ENERGY?
            </h1>
            <p class="text-xl text-brand-600 lg:w-[40%] md:w-[70%] text-center lg:pt-[30px] md:pt-[20px] pt-[15px]">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
                consequuntur dicta aspernatur!
            </p>
        </div>
        <!-- button -->
        <div class="w-[100%] flex justify-center items-center md:mt-[20px] mt-[20px]">
            <button class="px-[40px] py-[10px] bg-brand-400 text-brand-100">
                Contact Us
            </button>
        </div>
        <div class="w-[100%]">
            <img src="./imgs/cloud.png" class="w-[100%] lg:h-[200px] md:h-[160px] h-[100px]" alt="" />
        </div>
    </div>

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
                <img src="./imgs/shineBook1.png" alt="" class="w-full h-full" />
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
                <img src="./imgs/shineBook2.png" alt="" class="w-full" />
            </div>
        </div>

        <div class="mt-[40px] w-[200px] translate-x-[70px] xl:block hidden">
            <img src="./imgs/shineArrow.png" alt="" class="w-full" />
        </div>

        <!-- flex section end -->
    </section>

    <!-- how it works section end -->

    <!-- info -->
    <div class="xl:h-[500px] lg:h-[600px] w-[100%] px-[30px] flex lg:flex-row flex-col mt-[100px] mb-[80px]">
        <!-- image part -->
        <div class="xl:w-[50%] lg:w-[40%] w-[100%] h-[100%] flex justify-center items-center">
            <img src="imgs/teacher2.jpg" alt="this is teacher and student picture"
                class="xl:rotate-6 lg:rotate-5 rounded-xl overflow-hidden"
                style="
               box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16),
                 0 3px 6px rgba(0, 0, 0, 0.23);
             " />
        </div>
        <!-- paragraph part -->
        <div class="lg:w-[50%] w-[100%] h-[100%] flex justify-center flex-col px-[30px] mt-[20px]">
            <h1 class="text-brand-600 font-bold md:text-4xl text-2xl xl:py-[20px] py-[15px]">
                From parent to parent
            </h1>
            <p class="xl:text-xl md:text-lg text-sm font-semibold xl:w-[75%] lg:w-[80%] w-[100%] xl:py-[10px] py-[5px]">
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
        <div class="flex justify-center xl:px-[100px] xl:pt-[100px] lg:pt-[50px] md:pt-[25px] pt-[35px] lg:px-[80px]">
            <div class="w-[20%] xl:translate-x-[50px] lg:translate-x-[10px]">
                <img src="./img/down_book.png" alt="" />
            </div>
            <div class="lg:w-[50%]  w-[100%] flex justify-center items-center  xl:pb-0 lg:pb-8 md:pb-10 md:mb-[25px] ">
                <p class="xl:text-5xl lg:text-[30px] md:text-4xl text-[24px] font-bold text-brand-500">So how Much Does
                    it Cost</p>
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
                    class="text-center  xl:text-xl lg:text-xl md:text-xl text-[16px] font-semibold text-brand-700 xl:pr-[30px]">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident
                    dolor nesciunt unde aspernatur. Aperiam, provident dolores
                    aspernatur esse totam accusamus hic numquam doloremque quae!
                </p>
            </div>
        </div>

        <div class="flex justify-center">
            <div
                class="w-[20%] xl:translate-y-[100px] lg:translate-y-[100px] md:translate-y-[-20px] xl:mr-0 lg:mr-0 md:mr-[60px] rotate-3 relative translate-x-[70px]">
                <img src="./imgs/bg_book.jpg" alt="" class="opacity-50 xl:block lg:block md:block hidden" />

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
                    class="list-disc xl:text-xl lg:text-xl md:text-xl text-md flex flex-col gap-4 font-semibold text-brand-700">
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
                <img src="./imgs/bg_coffee.jpg" alt=""
                    class="opacity-60 xl:block lg:block md:block hidden" />
                <div
                    class="xl:w-[100px] lg:w-[100px] md:w-[80px] xl:h-[30px] lg:h-[30px] md:h-[20px] bg-brand-300 absolute bottom-0 right-0 rotate-[150deg] z-10 translate-x-[23px] translate-y-[-30px]">
                </div>
            </div>
        </div>
    </section>
    <!-- so how much cost section end -->

    <!-- register 2. -->
    <div
        class="lg:h-[750px] md:h-[700px] h-[620px] w-[100%] flex justify-center items-center flex-col bg-[red ] relative mt-[30px] md:mb-[30px]">
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
        <div class="h-[300px] w-[300px] lg:block hidden absolute right-[10%] top-[11%] z-[-1]">
            <img src="./imgs/cloud2.png" alt="" />
        </div>
        <div class="h-[300px] w-[300px] absolute left-[5%] xl:block hidden">
            <img src="./imgs/book3.png" alt="" />
        </div>
        <div class="h-[300px] w-[300px] absolute left-0 bottom-0 translate-y-[20%] lg:block hidden">
            <img src="./imgs/cloud2.png" alt="" />
        </div>
    </div>

    <!-- footer section start -->
    <section
        class="xl:px-[100px] lg:px-[60px] md:px-[10px] xl:py-[50px] lg:py-[50px] md:py-[50px] py-[10px] bg-brand-200">
        <div class="w-full flex justify-center items-center xl:gap-0 lg:gap-0 md:gap-0 gap-10">
            <div
                class="xl:w-[25%] lg:w-[25%] md:w-[15%] text-center xl:text-3xl lg:text-3xl md:text-xl font-bold tracking-widest text-brand-700">
                <h1>Book</h1>
            </div>
            <ul
                class="xl:w-[50%] lg:w-[50%] md:w-[70%] xl:flex lg:flex md:flex hidden justify-center items-center gap-[50px] xl:text-xl lg:text-xl md:text-lg font-bold text-brand-700">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Activities</a></li>
            </ul>
            <div class="xl:w-[20%] lg:w-[20%] md:w-[15%] flex justify-center items-center">
                <div
                    class="w-[120px] py-1 border-2 border-brand-300 rounded-2xl flex justify-center items-center text-lg font-semibold">
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
