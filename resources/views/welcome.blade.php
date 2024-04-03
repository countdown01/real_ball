<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Fire_ball</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="overflow-x-hidden bg-gray-100 dark:bg-gray-800" id="body">
<!--start header-->

<header
    dir="rtl"
    class="w-[840px] pl-10 pr-10 md:pr-0 sm:w-[830px] md:pl-20 md:w-[941px] lg:pl-10 lg:w-[1279px] xl:w-[1405px]"
>
    <div class="mt-10">
        <div class="flex items-center justify-between">
            <div class="grid grid-cols-2 mr-10">
                <div class="grid grid-cols-2 lg:-mr-10">
                    <div class="-mt-10 sm:mr-8 sm:text-2xl font-mono text-lg pr-3">
                        <div class="-mr-10 mt-2">
                            <button
                                id="sidebarOpen"
                                class="md:hidden focus:outline-none block"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-10 h-10 sm:w-8 sm:h-8 lg:w-6 lg:h-6 text-gray-600"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"
                                    />
                                </svg>
                            </button>
                        </div>
                        <p
                            class="mr-2 text-4xl lg:text-2xl -mt-8 md:-mt-1 md:-mr-20 lg:-mr-1 dark:text-white text-black"
                        >
                            توپ
                        </p>
                        <p
                            class="-mr-2 md:-mr-20 lg:-mr-1 text-4xl lg:text-2xl dark:text-white text-black"
                        >
                            آتشین
                        </p>
                    </div>

                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="orange"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="-mt-8 md:-mt-10 -mr-2 w-14 h-14 sm:w-12 sm:h-12 md:w-10 md:h-10 sm:mr-3 md:-mr-5 lg:-mr-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z"
                            />
                        </svg>
                    </div>
                </div>

                <div
                    class="mt-6 -mr-28 sm:mt-14 md:mt-0 sm:ml-32 sm:-mr-40 md:pt-2 md:-mr-0 lg:-mr-24 xl:-mr-20 grid grid-cols-2 mb-24 gap-x-9"
                >
                    <div
                        class="mr-14 sm:mr-1 md:mr-1 lg:mr-3 w-12 h-12 sm:w-10 sm:h-10 lg:w-9 lg:h-9 border border-gray-400 rounded-full flex items-center justify-center"
                        id="btn-light"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-9 h-9 sm:w-8 sm:h-8 lg:w-6 lg:h-6 dark:text-slate-100 text-slate-400"
                        >
                            <path
                                d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"
                            ></path>
                        </svg>
                    </div>

                    <div
                        class="-mr-12 sm:-mr-20 md:mr-3 lg:-mr-10 xl:-mr-8 w-12 h-12 sm:w-10 sm:h-10 lg:w-9 lg:h-9 border border-gray-400 rounded-full flex items-center justify-center"
                        id="btn-dark"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-9 h-9 sm:w-8 sm:h-8 lg:w-6 lg:h-6 text-gray-400 dark:text-slate-100"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <div
                    id=""
                    class="hidden sm:hidden md:flex md:-mt-[92px] md:mr-12 lg:-mr-10 lg:mb-6 xl:-mr-2 items-center justify-center"
                >
                    <p class="-ml-6 md:mb-1 z-50">|</p>
                    <input
                        type="text"
                        placeholder="اسم مطلب مورد نظر را تایپ کنید        "
                        class="w-80 h-12 font-bold text-center text-black ring-1 ring-gray-400 rounded-2xl"
                    />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 text-orange-500 -mr-10"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                        />
                    </svg>
                </div>
            </div>

            <div class="-ml-32 -mt-36 sm:-ml-36 md:mr-44 grid grid-cols-4">
                <button id="search" class="sm:mr-2 md:hidden">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="mr-20 lg:mr-14 mb-2 w-12 h-12 sm:w-10 sm:h-10 p-1 rounded-full bg-gray-800 text-white hover:text-gray-600 cursor-pointer"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                        />
                    </svg>
                </button>
                <a href="{{route('login')}}">
                    <button
                        class="mr-5 sm:mr-6 md:-mr-16 text-2xl sm:text-xl lg:text-base bg-gradient-to-br from-cyan-400 to-amber-300 dark:bg-white text-white dark:text-black w-28 h-14 sm:w-20 lg:w-24 lg:h-12 rounded-full rounded-tr-md"
                    >
                        ثبت نام
                    </button>
                </a>
                <a href="{{route('login')}}">
                    <button
                        class="mr-2 ml-10 md:-mr-7 pb-3 md:pb-0 lg:ml-2 text-3xl sm:text-xl lg:text-base bg-slate-800 text-white dark:text-black dark:bg-white rounded-full rounded-tl-md rounded-r-sm w-28 h-14 sm:w-24 lg:w-24 lg:h-12 border-4 border-stone-400 pl-2"
                    >
                        ورود
                    </button>
                </a>
            </div>
        </div>

        <div
            class="ml-6 -mt-[168px] mr-4 sm:mr-20 flex items-center justify-center"
        >
            <div id="searchBox" class="hidden items-center justify-center">
                <input
                    type="text"
                    placeholder="اسم مطلب مورد نظر را تایپ کنید        "
                    class="w-[260px] p-1 pr-7 font-bold text-center text-black ring-1 ring-gray-400 rounded-2xl"
                />
                <svg
                    id="hideSearchBox"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-7 h-7 -mt-12 pr-1"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </div>
        </div>

        <div
            id="sidebar"
            class="hidden md:hidden bg-gray-300 dark:bg-gray-900 space-y-1 w-44 -mt-6 h-80 pr-5 z-50 relative pt-14 text-white"
        >
            <div id="closeSidebar" class="mb-10 -mt-12 mr-28">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 text-black dark:text-white"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </div>
            <div class="flex md:grid md:grid-cols-2 pt-8">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5 text-black dark:text-white"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                    />
                </svg>
                <p
                    class="mr-1 hover:rotate-6 cursor-pointer text-black dark:text-white"
                >
                    <a href="{{route('/')}}">خانه</a>
                </p>
            </div>

            <div>
                <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">
                    <a href="{{route('advertising')}}">معرفی ودانلود بازی</a>
                </p>
            </div>

            <div>
                <a href="{{route('relationship')}}">
                    <p
                        class="hover:rotate-6 cursor-pointer text-black dark:text-white"
                    >
                        <a href="{{route('relationship')}}">تبلیغات</a>
                    </p>
                </a>
            </div>

            <div>
                <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">
                    <a href="{{route('conctus')}}">ارتباط با ما</a>
                </p>
            </div>

            <div>
                <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">
                    <a href="{{route('ipserver')}}">لیست سرور ها</a>
                </p>
            </div>
        </div>

        <div
            class="text-black dark:text-white hidden sm:hidden md:flex md:mt-24 md:items-center md:justify-center md:gap-x-7"
        >
            <div class="flex md:grid md:grid-cols-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                    />
                </svg>
                <p
                    class="mr-1 hover:rotate-6 cursor-pointer text-black dark:text-white"
                >
                    <a href="{{route('/')}}">خانه</a>
                </p>
            </div>

            <div>
                <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">
                    <a href="{{route('advertising')}}">معرفی ودانلود بازی</a>
                </p>
            </div>

            <div>
                <a href="{{route('relationship')}}">
                    <p
                        class="hover:rotate-6 cursor-pointer text-black dark:text-white"
                    >
                        <a href="{{route('relationship')}}">تبلیغات</a>
                    </p>
                </a>
            </div>

            <div>
                <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">
                    <a href="{{route('conctus')}}">ارتباط با ما</a>
                </p>
            </div>

            <div>
                <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">
                    <a href="{{route('ipserver')}}">لیست سرور ها</a>
                </p>
            </div>
        </div>
    </div>
</header>

<!--start main-->
<main class="mt-28 md:mt-0">
    <div
        class="flex w-[803px] sm:w-[767px] md:w-[940px] lg:w-[1279px] justify-between items-center"
    >
        <div
            class="w-96 h-96 bg-sky-400 overflow-hidden rounded-full relative mt-24 ml-12 sm:ml-8 md:ml-16"
        >
            <img
                src="{{asset('image/picture1.jpg')}}"
                alt="image"
                class="w-full h-full"
            />
            <div
                class="w-20 h-48 right-80 absolute top-16 border-4 rounded-lg"
            ></div>
            <div
                class="w-64 h-48 right-5 absolute border-4 top-60 rounded-lg mr-3"
            ></div>
            <div
                class="w-20 h-32 right-2 -top-2 absolute border-4 border-white rounded-lg mr-24"
            ></div>
        </div>
        <div>
            <h1
                class="mr-14 text-biscay-700 text-gray-700 dark:text-white text-6xl max-w-178"
                dir="rtl"
            >
                متنوع ترین و بروز ترین تجربه بازی در این سایت
            </h1>
            <h2
                class="pr-2 sm:pr-4 md:pr-0 mt-8 text-gray-600 dark:text-white font-bold lg:font-normal text-xl max-w-lg"
                dir="rtl"
            >
                ارائه و معرفی بروزترین و متنوع ترین سرورهای انلاین و بازی های روز در
                این سایت
            </h2>
        </div>
    </div>
    <div
        class="w-[750px] sm:w-[650px] md:w-[800px] relative flex justify-end items-center space-x-20 mr-28"
    >
        <span
            class="text-gray-900 dark:text-white text-2xl sm:text-xl lg:text-lg font-bold"
        >ضمانت بازگشت وجه
          <span>
            <div
                class="absolute top-1 right-44 text-blue-500 dark:text-red-950"
            >
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-9 h-9 sm:w-7 sm:h-7 lg:w-6 lg:h-6 -ml-20 sm:-ml-12 lg:-ml-0"
              >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3"
                />
              </svg>
            </div>
          </span>
        </span>
        <span
            class="text-gray-900 dark:text-white text-2xl sm:text-xl lg:text-lg font-bold"
        >پشتیبانی ۲۴ساعته
          <span>
            <div class="absolute top-1 -right-6">
              <svg
                  class="-rotate-90 w-9 h-9 sm:w-7 sm:h-7 lg:w-6 lg:h-6 text-blue-500 dark:text-red-950 text-blue-980 lg:mt-1 -mr-3 lg:-mr-0"
                  width="17"
                  height="17"
                  viewBox="0 0 17 17"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
              >
                <path
                    d="M8.83538 10.3C9.27844 10.6121 9.74293 10.8745 10.2217 11.0731C10.519 11.1809
            10.9855 10.8756 11.3285 10.6511L11.3286 10.6511C11.4143 10.595
            11.4923 10.544 11.558 10.5057L11.5796 10.4936C11.9027 10.3121 12.2615
            10.1106 12.7228 10.2078C13.1373 10.2929 14.5594 11.4136 14.9524 11.8108C15.2097
            12.0661 15.3526 12.3357 15.374 12.6123C15.4169 13.6408 14.0377 14.7969 13.709
            14.9955C13.0087 15.5062 12.0725 15.4991 10.9435 14.9884C9.73579 14.499 8.29228
            13.4705 6.8988 12.2222C6.39998 11.7753 5.44205 10.8344 5.16944 10.5202C3.76167
            8.99521 2.57543 7.35674 2.01803 6.03036C1.75363 5.47002 1.625 4.95224 1.625
            4.4912C1.625 4.03725 1.75363 3.63295 2.00374 3.2854C2.15381 3.02296 3.36149
            1.59018 4.42625 1.62565C4.69066 1.65402 4.96221 1.78878 5.22661 2.04413C5.62679
            2.43424 6.7773 3.84574 6.86306 4.26422C6.96089 4.71509 6.75803 5.07099 6.57526
            5.39163L6.57526 5.39163L6.56292 5.41328C6.52173 5.48445 6.46588 5.56888 6.40483
            5.66117L6.40482 5.66118C6.1799 6.0012 5.8843 6.44805 5.99052 6.73257C6.25564
            7.38512 6.63438 8.02348 7.09102 8.6122C7.59779 9.21811 8.39233 9.98789 8.83538 10.3Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                ></path>
              </svg>
            </div>
          </span>
        </span>
    </div>
    <!--start swiper-->
    <div
        class="flex justify-between items-center w-[803px] sm:w-[767px] md:w-[940px] lg:w-[1279px]"
    >
        <div
            class="overflow-hidden flex items-center justify-center bg-slate-200 w-56 h-52 mt-16 ml-28 rounded-xl"
        >
            <div class="swiper mySwiper5 w-full h-64 md:h-52">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex items-center justify-center  relative">
                        <img
                            class="w-full h-full absolute"
                            src="{{asset('image/footer.png.webp')}}"
                            alt=""
                        />
                        <p class="z-50 absolute text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                    <div class="swiper-slide flex items-center justify-center  relative">
                        <img
                            class="w-full h-full absolute"
                            src="{{asset('image/picture1.jpg')}}"
                            alt=""
                        />
                        <p class="z-50 absolute text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                    <div class="swiper-slide flex items-center justify-center  relative">
                        <img
                            class="w-full h-full absolute"
                            src="{{asset('image/picture5.webp')}}"
                            alt=""
                        />
                        <p class="z-50 absolute text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                    <div class="swiper-slide flex items-center justify-center  relative">
                        <img
                            class="w-full h-full absolute"
                            src="{{asset('image/picture4.webp')}}"
                            alt=""
                        />
                        <p class="z-50 absolute text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="dark:bg-white bg-gray-800 w-1/3 h-80 mt-32 mr-10 lg:mr-96 rounded-md overflow-hidden"
        >

            <div class="swiper mySwiper6 w-full h-full">
                <div class="swiper-wrapper w-full h-full">
                    <div class="swiper-slide relative flex items-center justify-center">
                        <img class="w-full h-full absolute" src="{{asset('image/picture5.webp')}}" alt="">
                        <p class="z-50 absolute text-white font-bold">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                    <div class="swiper-slide relative flex items-center justify-center">
                        <img class="w-full h-full absolute" src="{{asset('image/picture1.jpg')}}" alt="">
                        <p class="z-50 absolute text-white font-bold">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                    <div class="swiper-slide relative flex items-center justify-center ">
                        <img class="w-full h-full absolute" src="{{asset('image/picture3.webp')}}" alt="">
                        <p class="z-50 absolute text-white font-bold">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                    <div class="swiper-slide relative flex items-center justify-center">
                        <img class="w-full h-full absolute" src="{{asset('image/picture7.jpg')}}" alt="">
                        <p class="z-50 absolute text-white font-bold">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                    <div class="swiper-slide relative flex items-center justify-center">
                        <img class="w-full h-full absolute" src="{{asset('image/picture9.jpg')}}" alt="">
                        <p class="z-50 absolute text-white font-bold">جهت تبلیغ در این کادر کلیک کنید</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--start telegram-->
    <div class="w-[803px] md:w-[940px] lg:w-[1279px]">
        <div
            class="w-[730px] lg:w-1/2 h-32 bg-gradient-to-br from-cyan-400 to-amber-300 mt-32 ml-10 sm:ml-5 md:ml-28 lg:ml-96 rounded-3xl relative"
        >
            <p
                class="absolute top-4 right-20 lg:right-20 pt-7 text-white text-xl lg:text-lg font-bold"
            >
                کانال مارا در تلگرام دنبال کنید و از خبر های روز با خبر شوید
            </p>
            <p
                class="absolute top-4 left-8 lg:left-4 pt-2 p-4 text-slate-700 text-lg lg:text-sm font-bold ring-1 ring-white mt-6 rounded-lg"
            >
                <a href="https://t.me/Fire_ball00" target="_blank">مشاهده کانال</a>
            </p>
            <span class="absolute top-4 right-10 pt-5">
            <img
                srcset="
                https://img.icons8.com/?size=50&amp;id=TCnKnYZFoOzM&amp;format=png  1x,
                https://img.icons8.com/?size=100&amp;id=TCnKnYZFoOzM&amp;format=png 2x
              "
                width="50"
                height="50"
                alt="Telegram icon"
                data-v-ef2c1d0b=""
                class="w-8 h-8"
            />
          </span>
        </div>
    </div>

    <!--start section play-->
    <section class="w-[803px] sm:w-[767px] md:w-[940px] lg:w-[1279px]">
        <div class="dark:text-white text-gray-600 grid grid-cols-2 mt-24">
            <div>
                <button
                    title="دیدن همه"
                    class="text-center transition-all duration-500 ml-16 mt-9 grid grid-cols-2"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-7 h-7 rotate-180 hover:text-sky-700"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"
                        />
                    </svg>
                    <span
                        class="-ml-6 cursor-default text-gray-700 dark:text-white text-lg"
                    >مشاهده همه</span
                    >
                </button>
            </div>

            <div class="text-white flex items-end justify-end mr-2">
                <div class="flex">
                    <div
                        class="w-2 h-2 rounded-full bg-slate-500 dark:bg-slate-200 mr-1 mb-2"
                    ></div>
                    <div
                        class="w-2 h-2 rounded-full bg-slate-600 dark:bg-slate-300 mr-1"
                    ></div>
                    <div
                        class="w-2 h-2 rounded-full bg-slate-800 dark:bg-slate-400 mr-2"
                    ></div>
                </div>
                <div
                    class="mr-2 mb-1 text-gray-800 dark:text-white text-3xl font-bold"
                >
                    جدیدترین ها
                </div>
                <div
                    class="bg-slate-600 dark:bg-slate-400 rounded-full w-5 h-1.5 mb-3 mr-16"
                ></div>
            </div>
        </div>

        <div
            class="flex flex-col items-center justify-center space-y-24 lg:gap-y-0 lg:grid lg:grid-cols-4 mt-16 ml-14"
        >
            <div
                class="bg-white dark:bg-gray-900 w-186 text-2xl lg:w-72 lg:h-[420px] rounded-lg"
            >
                <img
                    class="p-2 rounded-2xl -mt-10 w-80 h-44"
                    src="{{asset('image/mta.png')}} "
                    alt=""
                />
                <div class="flex items-end justify-end space-x-2 mr-2">
                    <p class="text-red-600 font-semibold lg:text-sm">MTA</p>
                    <div class="w-2 h-2 rounded-full bg-red-600 mb-1"></div>
                </div>
                <p class="text-end font-semibold mr-2.5 text-black dark:text-white">
                    mta تجربه دنیای واقعی در
                </p>
                <p
                    class="lg:text-sm text-right mr-3 text-gray-700 dark:text-gray-300"
                >
                    تو سرور راکستار ام تی ای ماشین های ایرانی وجود داره میتونید بچه
                    مثبت باشیدو برید خدمت گواهینامه بگیرید و تو یه شغل اداری یا نظامی
                    مشغول کار بشید یا اینکه هیجانشو بیشتر کنید و با دوستانتون برید
                    دزدی یا با ماشین شوتی جنس جابجا کنید ولی باید منتظر عواقبشم باشید
                    مثل زندان جریمه نقدی و غیره
                </p>

                <div class="grid grid-cols-2">
                    <div
                        class="bg-red-200 w-10 lg:w-7 ml-72 lg:ml-60 mt-4 mb-1 pl-1 rounded-md hover:bg-red-300 cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 lg:w-5 lg:h-5 mt-1 text-red-600"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <hr class="mt-2"/>

                <div class="flex items-center justify-center -mr-28 mt-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-7 h-7 lg:w-5 lg:h-5 rotate-180 text-red-700 cursor-pointer hover:text-blue-300 mr-2 mt-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                        />
                    </svg>
                    <p class="text-red-700 pr-32">
                        <a href="{{route('advertising')}}">مشاهده اطلاعات</a>
                    </p>
                </div>
            </div>

            <div
                class="bg-white dark:bg-gray-900 w-186 text-2xl lg:w-72 lg:h-[430px] rounded-lg"
            >
                <img
                    class="p-2 rounded-2xl -mt-10"
                    src="{{asset('image/samp.jfif')}}"
                    alt=""
                />
                <div class="flex items-end justify-end space-x-2 mr-2">
                    <p class="text-red-600 font-semibold lg:text-sm">SAMP</p>
                    <div class="w-2 h-2 rounded-full bg-red-600 mb-1"></div>
                </div>
                <p class="text-end font-semibold mr-2.5 text-black dark:text-white">
                    sampتجربه دنیای واقعی در
                </p>
                <p
                    class="lg:text-sm text-right mr-3 text-gray-700 dark:text-gray-300"
                >
                    در این بازی شما به عنوان یک شخصیت در دنیای این بازی نقش افرینی می
                    کنید وقتی وارد بازی می شوید برای سوار شدن به ماشین نیاز به
                    کواهینامه دارید که می توانید ان را با پاسخ به جند سوال به دست
                    اورید شما میتوانید مشغول به کار شوید پول کسب کنید و زندگی کنید
                    امکان خرید خونه ماشین و دیگر امکانات نیز در این بازی وجود و ......
                </p>

                <div class="grid grid-cols-2">
                    <div
                        class="bg-red-200 w-10 lg:w-7 ml-72 lg:ml-60 mt-4 mb-1 pl-1 rounded-md hover:bg-red-300 cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 lg:w-5 lg:h-5 mt-1 text-red-600"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <hr class="mt-2"/>

                <div class="flex items-center justify-center -mr-28 mt-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-7 h-7 lg:w-5 lg:h-5 rotate-180 text-red-700 cursor-pointer hover:text-blue-300 mr-2 mt-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                        />
                    </svg>
                    <p class="text-red-700 pr-32">
                        <a href="{{route('advertising')}}">مشاهده اطلاعات</a>
                    </p>
                </div>
            </div>

            <div
                class="bg-white dark:bg-gray-900 w-186 text-2xl lg:w-72 lg:h-[400px] rounded-lg"
            >
                <img
                    class="p-2 rounded-2xl -mt-10 w-80 h-44"
                    src="{{asset('image/minecraft.png')}}"
                    alt=""
                />
                <div class="flex items-end justify-end space-x-2 mr-2">
                    <p class="text-red-600 font-semibold lg:text-sm">MINECRAFT</p>
                    <div class="w-2 h-2 rounded-full bg-red-600 mb-1"></div>
                </div>
                <p class="text-end font-semibold mr-2.5 text-black dark:text-white">
                    خلاقیت در دنیایی نوین
                </p>
                <p
                    class="lg:text-sm text-right mr-3 text-gray-700 dark:text-gray-300"
                >
                    ماینکرافت یک بازی ویدئویی است که در آن بازیکنان در یک جهان باز
                    آزاد قرار می‌گیرند و می‌توانند ساختمان‌ها، ابزارها و مکانیزم‌های
                    مختلف را بسازند و در معادن کاوش کنند. بازیکنان می‌توانند به‌صورت
                    تک‌نفره یا چندنفره آنلاین بازی کنند.
                </p>

                <div class="grid grid-cols-2">
                    <div
                        class="bg-red-200 w-10 lg:w-7 ml-72 lg:ml-60 mt-4 mb-1 pl-1 rounded-md hover:bg-red-300 cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 lg:w-5 lg:h-5 mt-1 text-red-600"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <hr class="mt-2"/>

                <div class="flex items-center justify-center -mr-28 mt-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-7 h-7 lg:w-5 lg:h-5 rotate-180 text-red-700 cursor-pointer hover:text-blue-300 mr-2 mt-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                        />
                    </svg>
                    <p class="text-red-700 pr-32">
                        <a href="{{route('advertising')}}">مشاهده اطلاعات</a>
                    </p>
                </div>
            </div>

            <div
                class="bg-white dark:bg-gray-900 w-186 text-2xl lg:w-72 lg:h-6/5 rounded-lg"
            >
                <img
                    class="p-2 rounded-2xl -mt-10 h-44 w-80"
                    src="{{asset('image/gta v.png')}}"
                    alt=""
                />
                <div class="flex items-end justify-end space-x-2 mr-2">
                    <p class="text-red-600 font-semibold lg:text-sm">GTA V</p>
                    <div class="w-2 h-2 rounded-full bg-red-600 mb-1"></div>
                </div>
                <p class="text-end font-semibold mr-2.5 text-black dark:text-white">
                    GTA داستان هیجان انگیز، تجربه‌ای فوق‌العاده
                </p>
                <p
                    class="lg:text-sm text-right mr-3 text-gray-700 dark:text-gray-300"
                >
                    یکی از محبوب‌ترین و موفق‌ترین سری‌ بازی‌ها در صنعت بازی‌های
                    ویدئویی است. این سری بازی‌ها توسط شرکت Rockstar Games توسعه داده
                    شده و تاکنون بیش از ۲۵ سال از تاریخ انتشار اولین نسخه‌ی آن گذشته
                    است. خرید بازی gta v مورد علاقه گیمرها بوده که در یک دنیای باز،
                    شهری بزرگ و با زندگی بسیار پویا و زنده ساخته شده است. این بازی‌ها
                    به شما اجازه می‌دهند تا به عنوان یک شخصیت جنایی، در شهرهای مختلف
                    حرکت کرده، ماموریت‌های مختلفی را انجام داده، از اتومبیل‌های مختلف
                    و اسلحه‌های رده بالا استفاده کرده و به تجربه‌ی یک جهان واقعی و پر
                    از اکشن و ماجراجویی بپردازید
                </p>

                <div class="grid grid-cols-2">
                    <div
                        class="bg-red-200 w-10 lg:w-7 ml-72 lg:ml-60 mt-4 mb-1 pl-1 rounded-md hover:bg-red-300 cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 lg:w-5 lg:h-5 mt-1 text-red-600"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <hr class="mt-2"/>

                <div class="flex items-center justify-center -mr-28 mt-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-7 h-7 lg:w-5 lg:h-5 rotate-180 text-red-700 cursor-pointer hover:text-blue-300 mr-2 mt-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                        />
                    </svg>
                    <p class="text-red-700 pr-32">
                        <a href="{{route('advertising')}}">مشاهده اطلاعات</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--start telegram-->
    <div class="w-[803px] md:w-[940px] lg:w-[1279px] -mt-14">
        <div
            class="w-[730px] lg:w-1/2 h-32 bg-gradient-to-br from-purple-400 to-orange-400 mt-32 ml-10 sm:ml-5 md:ml-28 lg:ml-96 rounded-3xl relative"
        >
            <p
                class="absolute top-4 right-24 lg:right-20 pt-7 text-white text-xl lg:text-lg font-bold"
            >
                کانال مارا در روبیکا دنبال کنید و از خبر های روز با خبر شوید
            </p>
            <p
                class="absolute top-4 left-5 lg:left-5 pt-2 p-4 text-slate-700 text-lg lg:text-sm font-bold ring-1 ring-white mt-6 rounded-lg"
            >
                <a href="https://rubika.ir/Fire__Ball" target="_blank">مشاهده کانال</a>
            </p>
            <span class="absolute top-4 right-10 pt-6">
            <img class="w-9 h-9" src="{{asset('image/rubika.png')}}" alt=""/>
          </span>
        </div>
    </div>
    <!--start coment-->
    <section
        class="w-[840px] sm:w-[830px] md:w-[940px] lg:w-[1373px] xl:w-[1426px] mt-4"
    >
        <div class="grid lg:grid-cols-2 bg-gray-200 pb-5">
            <div class="lg:hidden text-center mt-5">
                <p class="text-gray-900 font-bold text-3xl">
                    در مورد این سایت چه میشنویم؟
                </p>
                <p class="text-gray-700 text-2xl lg:text-base mt-4">
                    این ها، بخش خیلی کوچکی از نظراتی هستند که افراد
                </p>
                <p class="text-gray-700 text-2xl lg:text-base">
                    .مختلف در مورد این سایت دارند
                </p>
            </div>

            <div
                class="mt-5 w-186 lg:w-156 h-48 lg:h-44 swiper mySwiper3"
                dir="rtl"
            >
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide text-xl lg:text-base bg-white text-center pt-5 rounded-md"
                    >
                        <p class="text-gray-700">
                            این سایت شاید تنهاترین مجموعه در ایران باشد، که مود های
                            کاربردی،
                        </p>
                        <p class="text-gray-700">
                            بروز و متناسب با نیاز های مردمی ارائه میدهد! دمتون گرم
                        </p>

                        <div class="grid grid-cols-2 mt-10">
                            <div>
                                <img
                                    class="w-10 h-10 rounded-full mr-56 lg:mr-44"
                                    src="{{asset('image/IMG_۲۰۲۳۱۰۲۸_۲۲۱۵۲۱.jpg')}}"
                                    alt=""
                                />
                            </div>
                            <div class="ml-44 lg:ml-40">
                                <p class="font-sans text-2xl lg:text-base text-black">
                                    طاها نظری
                                </p>
                                <p class="text-gray-600 text-lg lg:text-sm">طراح سایت</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-slide text-xl lg:text-base bg-white text-center pt-5 rounded-md"
                    >
                        <p class="text-gray-700">
                            این سایت شاید تنهاترین مجموعه در ایران باشد، که مود های
                            کاربردی،
                        </p>
                        <p class="text-gray-700">
                            بروز و متناسب با نیاز های مردمی ارائه میدهد! دمتون گرم
                        </p>

                        <div class="grid grid-cols-2 mt-10">
                            <div>
                                <img
                                    class="w-10 h-10 rounded-full mr-56 lg:mr-44"
                                    src="{{asset('image/1.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="ml-44 lg:ml-40">
                                <p class="font-sans text-2xl lg:text-base text-black">
                                    حسین
                                </p>
                                <p class="text-gray-600 text-lg lg:text-sm">طراح سایت</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block text-end mt-10 mr-14">
                <p class="text-gray-900 font-bold text-3xl">
                    در مورد این سایت چه میشنویم؟
                </p>
                <p class="text-gray-700 mt-4">
                    این ها، بخش خیلی کوچکی از نظراتی هستند که افراد
                </p>
                <p class="text-gray-700">.مختلف در مورد این سایت دارند</p>
            </div>
        </div>
    </section>
</main>

<!--start footer-->
<div
    class="relative w-[840px] sm:w-[830px] md:w-[940px] lg:w-[1373px] xl:w-[1426px]"
    dir="rtl"
>
    <footer
        class="z-20 bg-gray-900/65 w-full h-[660px] md:h-[430px] text-white absolute"
    >
        <div class="pt-1">
            <div class="flex items-center justify-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="orange"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-8 h-8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"
                    />
                </svg>
            </div>

            <p class="text-sm flex items-center justify-center pt-2 md:font-bold">
                برای ثبت ایمیل روی دکمه پایین کلیک کنید
            </p>
            <div class="flex items-center justify-center mt-3">
                <a href="{{route('login')}}">
                    <button
                        class="text-sm md:text-base flex bg-red-600 rounded-md px-0.5 py-0.5"
                    >
                        <p>ثبت ایمیل</p>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-4 h-4 md:w-6 md:h-6 rotate-180 mt-1 mr-1"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                            />
                        </svg>
                    </button>
                </a>
            </div>

            <div class="flex items-center justify-center mt-2">
                <hr class="text-white w-full max-w-64 sm:max-w-96 md:max-w-2xl"/>
            </div>

            <div class="grid grid-cols-2 mt-2">
                <div class="font-bold text-lg sm:text-xl md:text-2xl mr-2">
                    توپ آتشین
                </div>

                <div class="flex items-end justify-end ml-4">
                    <div class="grid grid-cols-2 gap-x-4 md:gap-x-10">
                        <div class="flex gap-x-2">
                            <img
                                data-v-d7e8173f=""
                                class="app-preview__image-origin w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-white rounded-md"
                                srcset="
                      https://img.icons8.com/?size=256&amp;id=98970&amp;format=png 1x,
                      https://img.icons8.com/?size=512&amp;id=98970&amp;format=png 2x
                    "
                                width="256"
                                height="256"
                                alt="Telegram icon"
                            />
                            <a href="https://t.me/Fire_ball00">
                                <p class="text-sm hover:text-blue-300 font-semibold sm:text-base">تلگرام</p>
                            </a>
                        </div>

                        <div class="flex ml-8 gap-x-2">
                            <img
                                class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8"
                                src="{{asset('image/rubika.png')}}"
                                alt=""
                            />

                            <a href="https://rubika.ir/Fire__Ball">
                                <p class="text-sm font-semibold hover:text-blue-300 sm:text-base">روبیکا</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-4 md:grid md:grid-cols-3 md:justify-items-center md:mt-14"
            >
                <div
                    class="mt-8 mr-6 sm:text-lg md:mt-0 px-8 md:px-0 text-center font-semibold"
                >
                    <p>
                        با سلام و احترام ما همراه در تلاشیم که بهترین هارا برای شما به
                        ارمغان بیاوریم .هدف این سایت معرفی بهترین و بروز ترین پلتفرم های
                        بازی و ارائه سرور های انلاین می باشد. با تشکر از شما که مارا در
                        این راه همیاری می کنید
                    </p>
                </div>

                <div class="mr-4 mt-6 md:mr-0 md:mt-0">
                    <p class="font-bold text-lg">لینک های سریع :</p>
                    <div class="font-normal cursor-pointer">
                        <a href="{{route('/')}}">
                            <p class="hover:text-blue-300">صفحه اصلی</p>
                        </a>
                        <a href="{{route('advertising')}}">
                            <p class="hover:text-blue-300">معرفی و دانلود بازی</p>
                        </a>
                        <a href="{{route('ipserver')}}">
                            <p class="hover:text-blue-300">لیست سرور ها</p>
                        </a>
                        <a href="{{route('relationship')}}">
                            <p class="hover:text-blue-300">تبلیغات</p>
                        </a>
                    </div>
                </div>

                <div
                    class="mt-4 md:mt-0 space-y-2 flex flex-col ml-4 items-end justify-end"
                >
                    <div>
                        تلفن :
                        <a href="tel:+989389725209">
                            <span class="mr-1 font-bold hover:text-blue-300" dir="ltr">0938-972-5209</span>
                        </a>
                    </div>

                    <div>
                        ایمیل :
                        <span class="mr-1 font-semibold">FireBall@gamil.com</span>
                    </div>

                    <div>
                        آدرس : <span class="mr-1 font-semibold">شیراز، میانرود</span>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center mt-7">
                <hr class="text-white w-full max-w-72 sm:max-w-156 md:max-w-4xl"/>
            </div>

            <div class="grid grid-cols-2 mt-4">
                <div
                    class="text-sm sm:font-semibold md:text-base flex items-start justify-start mr-2"
                >
                    design with group diyarox
                </div>

                <div class="flex items-end justify-end ml-4">
                    <div class="mb-0.5 ml-1">
                        <svg
                            class="-rotate-90 dark:text-red-950 text-blue-980 mt-1"
                            width="17"
                            height="17"
                            viewBox="0 0 17 17"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M8.83538 10.3C9.27844 10.6121 9.74293 10.8745 10.2217 11.0731C10.519 11.1809
                10.9855 10.8756 11.3285 10.6511L11.3286 10.6511C11.4143 10.595
                11.4923 10.544 11.558 10.5057L11.5796 10.4936C11.9027 10.3121 12.2615
                10.1106 12.7228 10.2078C13.1373 10.2929 14.5594 11.4136 14.9524 11.8108C15.2097
                12.0661 15.3526 12.3357 15.374 12.6123C15.4169 13.6408 14.0377 14.7969 13.709
                14.9955C13.0087 15.5062 12.0725 15.4991 10.9435 14.9884C9.73579 14.499 8.29228
                13.4705 6.8988 12.2222C6.39998 11.7753 5.44205 10.8344 5.16944 10.5202C3.76167
                8.99521 2.57543 7.35674 2.01803 6.03036C1.75363 5.47002 1.625 4.95224 1.625
                4.4912C1.625 4.03725 1.75363 3.63295 2.00374 3.2854C2.15381 3.02296 3.36149
                1.59018 4.42625 1.62565C4.69066 1.65402 4.96221 1.78878 5.22661 2.04413C5.62679
                2.43424 6.7773 3.84574 6.86306 4.26422C6.96089 4.71509 6.75803 5.07099 6.57526
                5.39163L6.57526 5.39163L6.56292 5.41328C6.52173 5.48445 6.46588 5.56888 6.40483
                5.66117L6.40482 5.66118C6.1799 6.0012 5.8843 6.44805 5.99052 6.73257C6.25564
                7.38512 6.63438 8.02348 7.09102 8.6122C7.59779 9.21811 8.39233 9.98789 8.83538 10.3Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-sm sm:font-semibold sm:text-base">
                        شماره تلفن :
                        <a href="tel:+989391131209">
                            <span class="mr-1 hover:text-blue-300" dir="ltr">0939-113-1209</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <img
        class="h-[660px] md:h-[430px] w-full absolute z-10"
        src="{{asset('image/footer2.png')}}"
        alt=""
    />
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
