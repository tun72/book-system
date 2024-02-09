<x-author-layout>
    <style>
        .main {
            padding: 30px
        }
    </style>

    <section class="flex flex-col gap-5">
        <div>
            <h1 class="text-3xl">Dashboard</h1>
        </div>
        <section class="">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
                <div class="flex items-center p-4 rounded-md shadow dark:bg-gray-900 bg-gray-50">
                    <div class="mr-4">
                        <span
                            class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path
                                    d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-gray-700 dark:text-gray-400">Earnings Coins</p>
                        <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                            {{ auth()->user()->ggcoin }}</h2>
                    </div>
                </div>
                <div class="flex items-center p-4 rounded-md shadow dark:bg-gray-900 bg-gray-50">
                    <div class="mr-4">
                        <span
                            class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path
                                    d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-gray-700 dark:text-gray-400">Readers</p>
                        <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                            {{ count($earns) }}</h2>
                    </div>
                </div>

                <div class="flex items-center p-4 rounded-md shadow dark:bg-gray-900 bg-gray-50">
                    <div class="mr-4">
                        <span
                            class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                </path>
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-gray-700 dark:text-gray-400">Books</p>
                        <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                            {{ count(auth()->user()->books) }}</h2>
                    </div>
                </div>
                <div class="flex items-center p-4 rounded-md shadow dark:bg-gray-900 bg-gray-50">
                    <div class="mr-4">
                        <span
                            class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-chat-text" viewBox="0 0 16 16">
                                <path
                                    d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                </path>
                                <path
                                    d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-gray-700 dark:text-gray-400">Subscribers</p>
                        <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                            {{ count(auth()->user()->author->subscribers) }}</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="grid lg:grid-cols-[60%,1fr]  grid-cols-1 gap-6 ">
                <div class="pt-4 bg-white rounded shadow dark:text-gray-100 dark:bg-gray-900">
                    <div class="flex px-6 pb-4 border-b dark:border-gray-700">
                        <h2 class="text-xl font-bold dark:text-gray-400">Today Purchased</h2>
                    </div>

                    <div class="relative overflow-x-auto p-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        User Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Coins
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($earns as $earn)
                                    <tr class="bg-gray-100 dark:text-gray-400 dark:bg-transparent">

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            #{{ $earn->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $earn->created_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $earn->user->email }}
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span class="bg-green-300 px-4 py-2 rounded-full shadow-sm text-green-500">
                                                {{ $earn->ggcoin }} coins</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                    <div class="flex justify-between mb-3">
                        <div class="flex justify-center items-center">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Book Summary
                            </h5>
                        </div>
                        <div>
                            <button type="button" data-tooltip-target="data-tooltip" data-tooltip-placement="bottom"
                                class="hidden sm:inline-flex items-center justify-center text-gray-500 w-8 h-8 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"><svg
                                    class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 16 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />
                                </svg><span class="sr-only">Download data</span>
                            </button>
                            <div id="data-tooltip" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Download CSV
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>



                    <!-- Donut Chart -->
                    <div class="py-6" id="donut-chart"></div>


                </div>

                <script>
                    // ApexCharts options and config
                    window.addEventListener("load", function() {
                        const getChartOptions = () => {
                            return {
                                series: [35.1, 23.5, 2.4, 5.4],
                                colors: ["#1C64F2", "#16BDCA", "#FDBA8C", "#E74694"],
                                chart: {
                                    height: 320,
                                    width: "100%",
                                    type: "donut",
                                },
                                stroke: {
                                    colors: ["transparent"],
                                    lineCap: "",
                                },
                                plotOptions: {
                                    pie: {
                                        donut: {
                                            labels: {
                                                show: true,
                                                name: {
                                                    show: true,
                                                    fontFamily: "Inter, sans-serif",
                                                    offsetY: 20,
                                                },
                                                total: {
                                                    showAlways: true,
                                                    show: true,
                                                    label: "Unique visitors",
                                                    fontFamily: "Inter, sans-serif",
                                                    formatter: function(w) {
                                                        const sum = w.globals.seriesTotals.reduce((a, b) => {
                                                            return a + b
                                                        }, 0)
                                                        return `${sum}k`
                                                    },
                                                },
                                                value: {
                                                    show: true,
                                                    fontFamily: "Inter, sans-serif",
                                                    offsetY: -20,
                                                    formatter: function(value) {
                                                        return value + "k"
                                                    },
                                                },
                                            },
                                            size: "80%",
                                        },
                                    },
                                },
                                grid: {
                                    padding: {
                                        top: -2,
                                    },
                                },
                                labels: ["Direct", "Sponsor", "Affiliate", "Email marketing"],
                                dataLabels: {
                                    enabled: false,
                                },
                                legend: {
                                    position: "bottom",
                                    fontFamily: "Inter, sans-serif",
                                },
                                yaxis: {
                                    labels: {
                                        formatter: function(value) {
                                            return value + "k"
                                        },
                                    },
                                },
                                xaxis: {
                                    labels: {
                                        formatter: function(value) {
                                            return value + "k"
                                        },
                                    },
                                    axisTicks: {
                                        show: false,
                                    },
                                    axisBorder: {
                                        show: false,
                                    },
                                },
                            }
                        }

                        if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
                            const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
                            chart.render();

                            // Get all the checkboxes by their class name
                            const checkboxes = document.querySelectorAll('#devices input[type="checkbox"]');

                            // Function to handle the checkbox change event
                            function handleCheckboxChange(event, chart) {
                                const checkbox = event.target;
                                if (checkbox.checked) {
                                    switch (checkbox.value) {
                                        case 'desktop':
                                            chart.updateSeries([15.1, 22.5, 4.4, 8.4]);
                                            break;
                                        case 'tablet':
                                            chart.updateSeries([25.1, 26.5, 1.4, 3.4]);
                                            break;
                                        case 'mobile':
                                            chart.updateSeries([45.1, 27.5, 8.4, 2.4]);
                                            break;
                                        default:
                                            chart.updateSeries([55.1, 28.5, 1.4, 5.4]);
                                    }

                                } else {
                                    chart.updateSeries([35.1, 23.5, 2.4, 5.4]);
                                }
                            }

                            // Attach the event listener to each checkbox
                            checkboxes.forEach((checkbox) => {
                                checkbox.addEventListener('change', (event) => handleCheckboxChange(event, chart));
                            });
                        }
                    });
                </script>


            </div>
        </section>

        <div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between mb-5">
                <div>
                    <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">$12,423</h5>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Sales this week</p>
                </div>
                <div
                    class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                    23%
                    <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13V1m0 0L1 5m4-4 4 4" />
                    </svg>
                </div>
            </div>
            <div id="grid-chart"></div>
            <div
                class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5">
                <div class="flex justify-between items-center pt-5">
                    <!-- Button -->
                    <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                        data-dropdown-placement="bottom"
                        class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                        type="button">
                        Last 7 days
                        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="lastDaysdropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                    7 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                    30 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                    90 days</a>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                        Sales Report
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <script>
            // ApexCharts options and config
            window.addEventListener("load", function() {
                let options = {
                    // set grid lines to improve the readabilit of the chart, learn more here: https://apexcharts.com/docs/grid/
                    grid: {
                        show: true,
                        strokeDashArray: 4,
                        padding: {
                            left: 2,
                            right: 2,
                            top: -26
                        },
                    },
                    series: [{
                            name: "Developer Edition",
                            data: [1500, 1418, 1456, 1526, 1356, 1256],
                            color: "#1A56DB",
                        },
                        {
                            name: "Designer Edition",
                            data: [643, 413, 765, 412, 1423, 1731],
                            color: "#7E3BF2",
                        },
                    ],
                    chart: {
                        height: "100%",
                        maxWidth: "100%",
                        type: "area",
                        fontFamily: "Inter, sans-serif",
                        dropShadow: {
                            enabled: false,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    tooltip: {
                        enabled: true,
                        x: {
                            show: false,
                        },
                    },
                    legend: {
                        show: true
                    },
                    fill: {
                        type: "gradient",
                        gradient: {
                            opacityFrom: 0.55,
                            opacityTo: 0,
                            shade: "#1C64F2",
                            gradientToColors: ["#1C64F2"],
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        width: 6,
                    },
                    xaxis: {
                        categories: ['01 February', '02 February', '03 February', '04 February', '05 February',
                            '06 February', '07 February'
                        ],
                        labels: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                    },
                    yaxis: {
                        show: false,
                        labels: {
                            formatter: function(value) {
                                return '$' + value;
                            }
                        }
                    },
                }

                if (document.getElementById("grid-chart") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("grid-chart"), options);
                    chart.render();
                }
            });
        </script>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</x-author-layout>
