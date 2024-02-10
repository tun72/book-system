<x-layout>
    <div class="w-[100%] flex justify-between px-[30px] h-[10vh] py-[30px]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 5h-1V4a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a4 4 0 0 0 4 4h6c1.858 0 3.411-1.279 3.858-3H19a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3m1 6a1 1 0 0 1-1 1h-1V7h1a1 1 0 0 1 1 1zm-2 8H3c0 1.654 1.346 3 3 3h11c1.654 0 3-1.346 3-3z" />
            </svg>
        </div>

        <!-- log out button -->
        <div class="h-[30px] w-[80px] rounded-xl flex justify-center items-center"
            style="
        cursor: pointer;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
          0 1px 2px rgba(0, 0, 0, 0.24);
      ">
            <p class="text-mc font-semibold">Logout</p>
        </div>
    </div>



    @if ($id == 1)
        <div class="h-[89vh] flex flex-col justify-between w-full py-10">
            <!--nav bar -->

            <!-- sign up begin -->
            <div class="w-[100%] relative">
                <!-- sign up header -->
                <div class="w-[100%] text-center mb-[20px]">
                    <h3 class="text-3xl font-bold">Complete your page</h3>
                </div>
                <!-- sign up body: 2-parts -->
                <div
                    class="md:h-[400px] h-[800px] w-[100%] md:w-[100%] md:flex md:flex-row sm:flex-col sm:justify-center sm:items-center gap-20">
                    <!-- 1st part -->
                    <div
                        class="md:w-1/2 w-full flex flex-col md:mt-[0px] md:justify-center md:items-end items-center justify-center mt-[30px]">
                        <!-- circle-->
                        <div class="h-[200px] w-[200px] rounded-full bg-gray-300 flex justify-center items-center md:mr-[20px]"
                            style="cursor: pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12m-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20z" />
                            </svg>
                        </div>
                        <!-- upload -->
                        <div class="mt-[20px] h-[50px] w-[250px] rounded-xl flex justify-center items-center"
                            style="
                cursor: pointer;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
                  0 1px 2px rgba(0, 0, 0, 0.24);
              ">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 18q2.075 0 3.538-1.462Q17 15.075 17 13q0-2.075-1.462-3.538Q14.075 8 12 8Q9.925 8 8.463 9.462Q7 10.925 7 13q0 2.075 1.463 3.538Q9.925 18 12 18Zm0-2q-1.25 0-2.125-.875T9 13q0-1.25.875-2.125T12 10q1.25 0 2.125.875T15 13q0 1.25-.875 2.125T12 16Zm6-6q.425 0 .712-.288Q19 9.425 19 9t-.288-.713Q18.425 8 18 8t-.712.287Q17 8.575 17 9t.288.712Q17.575 10 18 10ZM4 21q-.825 0-1.412-.587Q2 19.825 2 19V7q0-.825.588-1.412Q3.175 5 4 5h3.15L8.7 3.325q.15-.15.337-.238Q9.225 3 9.425 3h5.15q.2 0 .388.087q.187.088.337.238L16.85 5H20q.825 0 1.413.588Q22 6.175 22 7v12q0 .825-.587 1.413Q20.825 21 20 21Z" />
                                </svg>
                                <p>Upload Profile Photo</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd part: form start -->
                    <div class="md:w-1/2 w-full md:mr-[30px] md:block flex flex-col justify-center items-center">
                        <!-- name input -->
                        <div class="flex flex-col gap-1 mt-[20px]">
                            <label for="name" class="text-xl font-semibold">Name</label>
                            <input type="text"
                                class="bg-gray-100 h-[50px] w-[350px] py-[10px] px-[5px] rounded-xl outline-white"
                                name="" id="name" placeholder="Name" />
                        </div>
                        <!-- text area -->
                        <div class="flex flex-col gap-1 mt-[10px]">
                            <label for="About" class="text-xl font-semibold">About</label>
                            <textarea class="overflow-scroll h-[100px] w-[350px] bg-gray-100 rounded-xl py-[15px] px-[10px] outline-white"
                                placeholder="Write about your passion and what drives you." name="About" id="" cols="20"
                                rows="5"></textarea>
                        </div>
                        <!-- web -->
                        <div class="flex flex-col gap-1 mt-[10px]">
                            <label for="web" class="text-xl font-semibold">Website or social link</label>
                            <input type="text" placeholder="http://"
                                class="h-[50px] w-[350px] rounded-xl px-[5px] py-[10px] outline-white bg-gray-100" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-[98%] mx-auto flex flex-col gap-5">

                <ol
                    class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                    <li
                        class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Personal <span class="hidden sm:inline-flex sm:ms-2">Info</span>
                        </span>
                    </li>
                    <li
                        class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                            <span class="me-2">2</span>
                            Account <span class="hidden sm:inline-flex sm:ms-2">Info</span>
                        </span>
                    </li>
                    <li class="flex items-center">
                        <span class="me-2">3</span>
                        Confirmation
                    </li>
                </ol>


                <div class="w-full flex justify-end">
                    <a type="button" href="/complete-your-profile/2"
                        class="text-gray-900 bg-gradient-to-r text-xl bg-yellow-300 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-full  px-12 py-4 text-center mb-2">Next</a>
                </div>
            </div>
        </div>
    @else
        <div class="h-[89vh] flex flex-col justify-between">
            <div>
                <!-- Choice Header -->
                <div class="w-[100%] md:block flex justify-center items-center">
                    <h2 class="lg:text-3xl md:text-2xl text-md md:w-[100%] w-[50%] text-center font-semibold">Lastly,
                        what’s
                        your
                        plan with Buy Me a Coffee?</h1>
                </div>


                <!-- Multiple Choice -->
                <div
                    class="w-[100%] lg:h-[600px] md:h-[1000px] h-[1500px] flex justify-center items-center md:pt-[50px] pt-[30px] lg:px-[0px] md:px-[100px]">
                    <div
                        class="xl:w-[60%] lg:w-[80%] w-[100%] h-[100%] px-[30px] md:grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-5 md:gap-[30px] flex justify-center items-center flex-col gap-[20px] md:mx-[0] mx-auto">
                        <!-- first card -->
                        <div class="h-[250px] w-[250px]  border-none rounded-xl px-[10px] "
                            style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">

                            <!-- check box -->

                            <div class="flex pt-[5px] flex-row-reverse mt-[20px] mr-[10px]">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="flex h-[70px] w-[100%]">
                                <div
                                    class="h-[50px] w-[50px] rounded-full bg-[#fcf2de] flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#644100]" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3m-4.4 15.55l-.1.1l-.1-.1C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5c0 2.89-3.14 5.74-7.9 10.05" />
                                    </svg>
                                </div>
                            </div>

                            <!-- header and p tab -->

                            <div class="h-[100px] w-[100%]">
                                <h4 class="mb-[10px] font-bold text-lg">Donations</h4>
                                <p class="pr-[35px]">Offers fans a way to support your work with one time-donations</p>
                            </div>
                        </div>

                        <!-- SECOND CARD -->

                        <div class="h-[250px] w-[250px]  border-none rounded-xl px-[10px]"
                            style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">

                            <!-- check box -->

                            <div class="flex pt-[5px] flex-row-reverse mt-[20px] mr-[10px]">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="flex h-[70px] w-[100%]">
                                <div
                                    class="h-[50px] w-[50px] rounded-full bg-[#e5e1fd] flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#211a54]" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 22V8h3V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h3v14zm2-2h12V10H6zm6-3q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6zM6 20V10z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- header and p tab -->

                            <div class="h-[100px] w-[100%]">
                                <h4 class="mb-[10px] font-bold text-lg">Membership</h4>
                                <p class="pr-[35px]">Earn a steady income by offering exclusive content and rewards to
                                    your
                                    fans.
                                </p>
                            </div>
                        </div>

                        <!-- THIRD CARD -->

                        <div class="h-[250px] w-[250px]  border-none rounded-xl px-[10px]"
                            style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">

                            <!-- check box -->

                            <div class="flex pt-[5px] flex-row-reverse mt-[20px] mr-[10px]">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="flex h-[70px] w-[100%]">
                                <div
                                    class="h-[50px] w-[50px] rounded-full bg-[#e2ebe0] flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#153f0c]" width="24"
                                        height="24" viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M216 40H40a16 16 0 0 0-16 16v144a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16m0 16v16H40V56Zm0 144H40V88h176zm-40-88a48 48 0 0 1-96 0a8 8 0 0 1 16 0a32 32 0 0 0 64 0a8 8 0 0 1 16 0" />
                                    </svg>
                                </div>
                            </div>

                            <!-- header and p tab -->

                            <div class="h-[100px] w-[100%]">
                                <h4 class="mb-[10px] font-bold text-lg">Shop</h4>
                                <p class="pr-[35px]">Sell your merchandise or digital products directly to your
                                    audience.</p>
                            </div>
                        </div>

                        <!-- Second row -->

                        <!-- first card -->

                        <div class="h-[250px] w-[250px] rounded-xl px-[10px] border-none "
                            style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">

                            <!-- check box -->

                            <div class="flex pt-[5px] flex-row-reverse mt-[20px] mr-[10px]">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="flex h-[70px] w-[100%]">
                                <div
                                    class="h-[50px] w-[50px] rounded-full bg-[#f8e1ec] flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#542038]" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M5 17h14v-2H5zm0-4h14v-2H5zm0-4h10V7H5zM4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm0-2h16V6H4zm0 0V6z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- header and p tab -->

                            <div class="h-[100px] w-[100%]">
                                <h4 class="mb-[10px] font-bold text-lg">Exclusive posts</h4>
                                <p class="pr-[35px]">Publish exclusive content for your supports and paying members.
                                </p>
                            </div>
                        </div>

                        <!-- SECOND CARD -->

                        <div class="h-[250px] w-[250px] border-none rounded-xl px-[10px]"
                            style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">

                            <!-- check box -->

                            <div class="flex pt-[5px] flex-row-reverse mt-[20px] mr-[10px]">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="flex h-[70px] w-[100%]">
                                <div
                                    class="h-[50px] w-[50px] rounded-full bg-[#dfeafd] flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#0d0e0f]" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M16 19v3H2V12h4V8q0-2.5 1.75-4.25T12 2h4q2.5 0 4.25 1.75T22 8v14h-2v-3zm0-2h4V8q0-1.65-1.175-2.825T16 4h-4q-1.65 0-2.825 1.175T8 8v4h8zm-7-.15L14 14H4zm0 1.75l-5-2.85V20h10v-4.25zM4 14v6zm6-4V8h8v2z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- header and p tab -->

                            <div class="h-[100px] w-[100%]">
                                <h4 class="mb-[10px] font-bold text-lg">Email list & marketing</h4>
                                <p class="pr-[35px]">Build an email list and share updates with your subscribers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Launch my page -->
            </div>
            <div class="w-[98%] mx-auto flex flex-col gap-5">

                <ol
                    class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                    <li
                        class="flex md:w-full items-center text-blue-600 dark:text-blue-500  after:w-full after:text-blue-400 after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2  dark:after:text-gray-500">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Personal <span class="hidden sm:inline-flex sm:ms-2">Info</span>
                        </span>
                    </li>
                    <li
                        class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Personal <span class="hidden sm:inline-flex sm:ms-2">Info</span>
                        </span>
                    </li>
                    <li class="flex items-center">
                        <span class="me-2">3</span>
                        Confirmation
                    </li>
                </ol>


                <div class="w-full flex justify-end">
                    <button type="button"
                        class="text-gray-900 bg-gradient-to-r text-xl bg-yellow-300 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-full  px-12 py-4 text-center mb-2">Next</button>
                </div>
            </div>
        </div>
    @endif


</x-layout>
