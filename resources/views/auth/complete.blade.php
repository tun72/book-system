<x-layout>
    <style>
        body {
            overflow-y: scroll
        }
    </style>
    @if ($id == 1)
        <form class="flex flex-col w-[80%] py-10 mx-auto gap-10" action="/auth/user/first-complete" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="relative">
                <!-- sign up header -->
                <div class="w-[100%] text-center">
                    <h3 class="text-3xl font-bold">Complete your Profile</h3>
                </div>
                <!-- sign up body: 2-parts -->
                <div
                    class="md:h-[400px] h-[800px] w-[100%] md:w-[100%] md:flex md:flex-row sm:flex-col sm:justify-center sm:items-center gap-20">
                    <!-- 1st part -->
                    <div
                        class="md:w-1/2 w-full flex flex-col md:mt-[0px] md:justify-center md:items-end items-center justify-center mt-[30px]">
                        <!-- circle-->
                        <div
                            class="h-[200px] w-[200px] rounded-full bg-gray-300 flex justify-center items-center md:mr-[20px] cursor-pointer overflow-hidden">
                            <img src="{{ auth()->user()->imageUrl }}" alt="">
                        </div>
                        <!-- upload -->
                        <div class="mt-[20px] h-[50px] w-[250px] rounded-xl flex justify-center items-center">
                            <input type="file" name="photo" class="hidden" id="image">
                            <label class="flex items-center cursor-pointer" for="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 18q2.075 0 3.538-1.462Q17 15.075 17 13q0-2.075-1.462-3.538Q14.075 8 12 8Q9.925 8 8.463 9.462Q7 10.925 7 13q0 2.075 1.463 3.538Q9.925 18 12 18Zm0-2q-1.25 0-2.125-.875T9 13q0-1.25.875-2.125T12 10q1.25 0 2.125.875T15 13q0 1.25-.875 2.125T12 16Zm6-6q.425 0 .712-.288Q19 9.425 19 9t-.288-.713Q18.425 8 18 8t-.712.287Q17 8.575 17 9t.288.712Q17.575 10 18 10ZM4 21q-.825 0-1.412-.587Q2 19.825 2 19V7q0-.825.588-1.412Q3.175 5 4 5h3.15L8.7 3.325q.15-.15.337-.238Q9.225 3 9.425 3h5.15q.2 0 .388.087q.187.088.337.238L16.85 5H20q.825 0 1.413.588Q22 6.175 22 7v12q0 .825-.587 1.413Q20.825 21 20 21Z" />
                                </svg>
                                <p>Upload Profile Photo</p>
                            </label>
                        </div>
                    </div>

                    <!-- 2nd part: form start -->
                    <div class="md:w-1/2 w-full md:mr-[30px] md:block flex flex-col justify-center items-center">
                        <!-- name input -->
                        <div class="flex flex-col gap-1 mt-[20px]">
                            <label for="username" class="text-xl font-semibold">UserName</label>
                            <input type="text"
                                class="bg-gray-100 h-[50px] w-[350px] py-[10px] px-[5px] rounded-xl outline-white"
                                name="username" id="name" placeholder="UserName" />
                        </div>
                        <!-- text area -->
                        <div class="flex flex-col gap-1 mt-[10px]">
                            <label for="About" class="text-xl font-semibold">About</label>
                            <textarea class="overflow-scroll h-[100px] w-[350px] bg-gray-100 rounded-xl py-[15px] px-[10px] outline-white"
                                placeholder="Write about your passion and what drives you." name="about" id="" cols="20"
                                rows="5"></textarea>
                        </div>
                        <!-- web -->
                        <div class="flex flex-col gap-1 mt-[10px]">
                            <label for="web" class="text-xl font-semibold">Address</label>
                            <input type="text" placeholder="address" name="address"
                                class="h-[50px] w-[350px] rounded-xl px-[5px] py-[10px] outline-white bg-gray-100" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <div class="mx-4 p-4">
                    <div class="flex items-center">
                        <div class="flex items-center text-yellow-400 relative">
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 bg-yellow-200 rounded-full -start-4 ring-4 ring-yellow-50 dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-yellow-400 dark:text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-yellow-400"></div>
                        <div class="flex items-center text-yellow-400 relative">
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 bg-yellow-200 rounded-full -start-4 ring-4 ring-yellow-50 dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-yellow-400 dark:text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                        <div class="flex items-center text-gray-500 relative">
                            <div
                                class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">

                            </div>

                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <button type="submit" href="/complete-your-profile/2"
                        class="animate-bounce w-[3.2rem] h-[3.2rem] focus:ring-4 focus:ring-yellow-200 flex items-center justify-center rounded-full bg-yellow-400 mr-6 text-white">Next</button>
                </div>
            </div>
        </form>
    @else
        <form class="flex flex-col w-[80%] py-10 mx-auto gap-10" action="/auth/user/second-complete" method="POST">
            @csrf

            <div class="w-full">
                <!-- Choice Header -->
                <div class="w-[100%] md:block flex justify-center items-center">
                    <h2 class="lg:text-3xl md:text-2xl text-md md:w-[100%] w-[50%] text-center font-semibold">
                        {{ auth()->user()->name }},
                        what’s genres do you want to read?</h1>
                </div>
                <!-- Multiple Choice -->
                <div class="w-[100%] flex justify-center items-center md:pt-[50px] pt-[30px] lg:px-[0px] md:px-[100px]">
                    <div
                        class="h-[100%] md:grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1  flex justify-center items-center flex-col gap-[20px] md:mx-[0] mx-auto">
                        <!-- first card -->
                        <!-- first card -->
                        @foreach ($genres as $gen)
                            <div class="h-[250px] w-[250px]  border-none rounded-xl px-[10px] bg-white "
                                style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">

                                <!-- check box -->

                                <div class="flex pt-[5px] flex-row-reverse mt-[20px] mr-[10px]">
                                    <input type="checkbox" name="genres[]" id="" value="{{ $gen->id }}">
                                </div>
                                <div class="flex h-[70px] w-[100%]">
                                    <div
                                        class="h-[50px] w-[50px] rounded-full bg-[#fcf2de] flex justify-center items-center">
                                        <img src="{{ $gen->image }}" alt="" class="w-[30px] h-[30px]">
                                    </div>
                                </div>
                                <!-- header and p tab -->

                                <div class="h-[100px] w-[100%]">
                                    <h4 class="mb-[10px] font-bold text-lg">{{ $gen->name }}</h4>
                                    <p class="pr-[35px] line-clamp-3">{{ $gen->about }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Launch my page -->

            <div class="flex flex-col gap-10">
                <div class="mx-4 p-4">
                    <div class="flex items-center">
                        <div class="flex items-center text-yellow-400 relative">
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 bg-yellow-200 rounded-full -start-4 ring-4 ring-yellow-50 dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-yellow-400 dark:text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-yellow-400"></div>
                        <div class="flex items-center text-yellow-400 relative">
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 bg-yellow-200 rounded-full -start-4 ring-4 ring-yellow-50 dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-yellow-400 dark:text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-yellow-400"></div>
                        <div class="flex items-center text-yellow-400 relative">
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 bg-yellow-200 rounded-full -start-4 ring-4 ring-yellow-50 dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-yellow-400 dark:text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <button type="submit"
                        class="animate-bounce w-[3.2rem] h-[3.2rem] focus:ring-4 focus:ring-yellow-200 flex items-center justify-center rounded-full bg-yellow-400  text-white">Finish</button>
                </div>
            </div>
        </form>


    @endif


</x-layout>
