<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    @vite('resources/css/conctus.css')
    @vite('resources/js/conctus.js')
</head>
<body id="body" class="overflow-x-hidden bg-white dark:bg-gray-950">
<header
    dir="rtl"
    class="w-[630px] pl-10 sm:w-[690px] md:w-[960px] lg:w-[1278px] xl:w-[1405px]"
>
    <div class="mt-10">
        <div class="flex items-center justify-between">
            <div class="grid grid-cols-2 mr-10">
                <div class="grid grid-cols-2">
                    <div class="-mt-10 sm:mr-8  sm:text-2xl font-mono text-lg pr-3">
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
                                    class="w-6 h-6 text-gray-600"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"
                                    />
                                </svg>
                            </button>
                        </div>
                        <p class="-mr-3 -mt-8 md:-mt-2 md:-mr-12  dark:text-white text-black">توپ</p>
                        <p class="-mr-4 md:-mr-14 dark:text-white text-black">آتشین</p>
                    </div>

                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="orange"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="-mt-10 -mr-2 w-10 h-10 sm:-mr-5 md:-mr-5 lg:-mr-5"
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
                    class="mt-6 -mr-28 sm:ml-32 sm:-mr-40 md:pt-2 md:-mr-20 lg:-mr-24 xl:-mr-20 grid grid-cols-2 mb-24 gap-x-9"
                >
                    <div
                        class="mr-14  sm:-mr-4 md:mr-1 lg:mr-3 w-8 h-8 border border-gray-400 rounded-full flex items-center justify-center"
                        id="btn-light"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-5 h-5 dark:text-slate-100 text-slate-400"
                        >
                            <path
                                d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"
                            ></path>
                        </svg>
                    </div>

                    <div
                        class="-mr-28  w-8 h-8 border border-gray-400 rounded-full flex items-center justify-center"
                        id="btn-dark"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-5 h-5 text-gray-400 dark:text-slate-100"
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
                    class="hidden sm:hidden md:flex md:-mt-[92px] md:mr-12 lg:mr-14 lg:mb-6 xl:-mr-2 items-center justify-center"
                >
                    <p class="-ml-14 md:mb-1 z-50">|</p>
                    <label>
                        <input
                            type="text"
                            placeholder="اسم مطلب مورد نظر را تایپ کنید        "
                            class="w-80 h-10 mr-8 font-bold text-center text-black ring-1 ring-gray-400 rounded-2xl"
                        />
                    </label>
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
                        class="mr-14 mb-2 w-8 h-8 p-1 rounded-full bg-gray-800 text-white hover:text-gray-600 cursor-pointer"
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
                        class="mr-2 sm:mr-4 md:-mr-16 bg-gradient-to-br from-cyan-400 to-amber-300 dark:bg-white text-white dark:text-black w-20 h-10 rounded-full rounded-tr-md"
                    >
                        ثبت نام
                    </button>
                </a>
                <a href="{{route('login')}}">
                    <button
                        class="mr-1 ml-1 md:-mr-7 bg-slate-800 text-white dark:text-black dark:bg-white w-20 h-10 rounded-full rounded-tl-md rounded-r-sm border-4 border-stone-400 pl-2"
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
                <label>
                    <input
                        type="text"
                        placeholder="اسم مطلب مورد نظر را تایپ کنید        "
                        class="w-[260px] p-1 pr-7 font-bold text-center text-black ring-1 ring-gray-400 rounded-2xl"
                    />
                </label>
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
            class="hidden md:hidden bg-gray-900 space-y-1 w-44 -mt-6 h-80 pr-5 z-50 relative pt-14 text-white"
        >
            <div id="closeSidebar" class="mb-10 -mt-12 mr-28">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </div>
            <div class="flex md:grid md:grid-cols-2 pt-8 ">
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
                <a href="{{route('/')}}">
                    <p class="mr-1 hover:rotate-6 cursor-pointer  dark:text-white">خانه</p>
                </a>
            </div>

            <div>
                <a href="{{route('advertising')}}">
                    <p class="hover:rotate-6 cursor-pointer  dark:text-white">معرفی و دانلود بازی</p>
                </a>
            </div>

            <div>
                <a href="{{route('relationship')}}">
                    <p class="hover:rotate-6 cursor-pointer  dark:text-white">تبلیغات</p>
                </a>
            </div>

            <div>
                <a href="{{route('conctus')}}">
                    <p class="hover:rotate-6 cursor-pointer  dark:text-white">ارتباط با ما</p>
                </a>
            </div>

            <div>
                <a href="{{route('ipserver')}}">
                    <p class="hover:rotate-6 cursor-pointer dark:text-white">لیست سرور ها</p>
                </a>
            </div>
        </div>

        <div
            class=" text-black dark:text-white hidden sm:hidden md:flex md:mt-24 md:items-center md:justify-center md:gap-x-7"
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
                <a href="{{route('/')}}">
                    <p class="mr-1 hover:rotate-6 cursor-pointer text-black dark:text-white">خانه</p>
                </a>
            </div>

            <div>
                <a href="{{route('advertising')}}">
                    <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">معرفی و دانلود بازی</p>
                </a>
            </div>

            <div>
                <a href="{{route('relationship')}}">
                    <p class="hover:rotate-6 cursor-pointer text-black dark:text-white ">تبلیغات</p>
                </a>
            </div>

            <div>
                <a href="{{route('conctus')}}">
                    <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">ارتباط با ما</p>
                </a>
            </div>

            <div>
                <a href="{{route('ipserver')}}">
                    <p class="hover:rotate-6 cursor-pointer text-black dark:text-white">لیست سرور ها</p>
                </a>
            </div>
        </div>
    </div>
</header>

<main class="mb-72  ">
    <section
        class="dark:bg-gray-100 bg-gray-800 text-white dark:text-black  w-[515px]  right-44 sm:w-[610px] sm:right-44 md:w-[840px] lg:w-[980px] md:right-36 lg:left-0 xl:left-0  xl:pr-10  xl:w-3/4 h-48 mt-24 ml-56 sm:ml-44 rounded-2xl relative  ">
        <div class="sm:-mr-9">
            <p class="flex flex-row justify-end items-end pr-4 sm:pr-10 lg:pr-16 xl:pr-14 pt-7  font-bold ">ارتباط با ما<span
                    class="pl-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
              </svg>

            </span></p>

        </div>
        <div>
            <div>
                <p class="pl-10 xl:pl-24 pt-16">0930-997-7430 </p>
                <p class="pl-10 xl:pl-24 pt-1">0000-000-0000 </p>
                <p class="left-40 absolute top-32 xl:left-56">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                    </svg>
                </p>
            </div>
            <p class="md:left-72 text-sm font-bold  absolute top-36 left-52 lg:left-64 xl:left-80 xl:pl-10 pl-4 ">شیراز
                باهنر </p>
            <p class="md:left-72  text-xs absolute top-28 left-52 lg:left-64 xl:left-[350px] pl-12">ادرس</p>
            <p class="md:left-[367px] absolute top-32 left-72 lg:left-[340px] xl:left-[430px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z"/>
                </svg>
            </p>
            <div>
                <div class="">
                    <p class=" text-xs absolute top-5 lg:top-28 right-60 md:right-80 xl:right-80 ">پست الکترونیکی </p>
                    <p class="text-sm font-bold  absolute top-16   lg:top-36 right-60 lg:right-[280px] md:right-80 xl:right-80">
                        Fire-Ball@gmail.com</p>
                    <p class="absolute top-10 lg:top-32 right-56 md:right-72 xl:right-[290px] ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25"/>
                        </svg>

                    </p>
                </div>
                <div class=" ">
                    <p class=" text-xs absolute top-28 right-10 xl:right-16  ">ساعت کاری </p>
                    <p class="text-sm font-bold  absolute top-36 right-10 xl:right-16"> روز هفته / ساعت 11 الی 22 </p>
                    <p class="absolute top-32 right-3 xl:right-10  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>


                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div
            class="w-[646px] sm:w-[669px] md:w-[952px] lg:w-[1314px] xl:w-[1522px] lg:pr-0  grid grid-cols-1 md:grid-cols-2 dark:bg-gray-100 bg-gray-800 pb-5 mt-16">

            <div class=" mt-10 text-center mr-5 md:hidden xl:mr-20">
                <p class="dark:text-gray-900 text-white  font-bold text-3xl">
                    در مورد این سایت چه میشنویم؟
                </p>
                <p class="dark:text-gray-700 text-white  mt-4">
                    این ها، بخش خیلی کوچکی از نظراتی هستند که افراد
                </p>
                <p class="dark:text-gray-700 text-white ">.مختلف در مورد این سایت دارند</p>
            </div>

            <div class="mt-5 w-72 md:w-96  lg:w-186 lg:h-44 swiper mySwiper4" dir="rtl">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-col bg-white text-center pt-5 rounded-md">
                        <div>
                            <p class="text-gray-700">
                                این سایت شاید تنهاترین مجموعه در ایران باشد، که مود های کاربردی،
                            </p>
                            <p class="text-gray-700">
                                بروز و متناسب با نیاز های مردمی ارائه میدهد! دمتون گرم
                            </p>
                        </div>

                        <div class="grid grid-cols-2 pb-4 xl:pb-0 mt-10">
                            <div>
                                <img
                                    class="w-10 h-10 rounded-full mr-28 xl:mr-44"
                                    src="{{asset('image/IMG_۲۰۲۳۱۰۲۸_۲۲۱۵۲۱.jpg')}}"
                                    alt=""
                                />
                            </div>
                            <div class="ml-20 xl:ml-40 ">
                                <p class="font-sans text-black">طاها نظری</p>
                                <p class="text-gray-600 text-sm">طراح سایت</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide flex flex-col bg-white text-center pt-5 rounded-md">
                        <div>
                            <p class="text-gray-700">
                                این سایت شاید تنهاترین مجموعه در ایران باشد، که مود های کاربردی،
                            </p>
                            <p class="text-gray-700">
                                بروز و متناسب با نیاز های مردمی ارائه میدهد! دمتون گرم
                            </p>
                        </div>

                        <div class="grid grid-cols-2 mt-10">
                            <div>
                                <img
                                    class="w-10 h-10 rounded-full mr-28 xl:mr-40"
                                    src="{{asset('image/2.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="ml-20 xl:ml-40">
                                <p class="font-sans text-black">حسین</p>
                                <p class="text-gray-600 text-sm">طراح سایت</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end hidden md:block mt-10 mr-5 xl:mr-28">
                <p class="dark:text-gray-900 text-white font-bold text-3xl">
                    در مورد این سایت چه میشنویم؟
                </p>
                <p class="dark:text-gray-700 text-slate-200 mt-4">
                    این ها، بخش خیلی کوچکی از نظراتی هستند که افراد
                </p>
                <p class="dark:text-gray-700  text-slate-200">.مختلف در مورد این سایت دارند</p>
            </div>
        </div>
    </section>
    </div>

    <div class=" ml-12 sm:ml-0 w-[600px]  sm:w-[700px] md:w-[900px] lg:w-[1343px] ">
        <div
            class="overflow-hidden grid grid-cols-2 xl:grid-cols-4 ml-10 md:ml-28 lg:ml-10 lg:mr-10  mr-10 xl:mr-0 xl:ml-32 gap-x-4 xl:gap-x-20 z-10 relative justify-items-start mt-16">

            <div class="w-48 h-48 md:w-5/6 md:h-56 xl:w-full xl:h-full bg-stone-200">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative">
                            <img class="w-full h-full absolute" src="{{asset('image/1.png')}}" alt="">
                            <p class="text-white z-50">جهت تبلیغ در این کادر کیلک کنید</p>
                        </div>
                        <div class="swiper-slide relative">
                            <img
                                class="w-full h-full absolute"
                                src="{{asset('image/3.png')}}"
                                alt=""
                            />
                            <p class="z-50 text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                        </div>
                        <div class="swiper-slide relative">
                            <img
                                class="w-full h-full absolute"
                                src="{{asset('image/4.png')}}"
                                alt=""
                            />
                            <p class="z-50 text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                        </div>
                        <div class="swiper-slide relative">
                            <img
                                class="w-full h-full absolute"
                                src="{{asset('image/6.png')}}"
                                alt=""
                            />
                            <p class="z-50 text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-48 h-48 md:w-5/6 md:h-56 xl:w-full xl:h-48 bg-stone-200">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative">
                            <img class="w-full h-full absolute" src="{{asset('image/1.png')}}" alt="">
                            <p class="text-white z-50">جهت تبلیغ در این کادر کیلک کنید</p>
                        </div>
                        <div class="swiper-slide relative">
                            <img
                                class="w-full h-full absolute"
                                src="{{asset('image/3.png')}}"
                                alt=""
                            />
                            <p class="z-50 text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                        </div>
                        <div class="swiper-slide relative">
                            <img
                                class="w-full h-full absolute"
                                src="{{asset('image/4.png')}}"
                                alt=""
                            />
                            <p class="z-50 text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                        </div>
                        <div class="swiper-slide relative">
                            <img
                                class="w-full h-full absolute"
                                src="{{asset('image/6.png')}}"
                                alt=""
                            />
                            <p class="z-50 text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="relative right-16 sm:right-24 -mt-44 sm:bottom-0 md:left-28 lg:left-52  ">
        <div
            class="absolute top-80 xl:top-28 sm:left-44 md:left-28  mt-44 xl:mt-0 left-28 xl:left-[450px] dark:bg-gray-100 bg-gray-800  dark:text-black text-white w-178 md:w-186 lg:w-[720px] xl:w-1/2 h-[895px] rounded-lg text-end">
            <div>
                <p class="font-bold pr-12 pt-8 text-orange-500 ">تماس با ما </p>
                <p class="absolute top-8 right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                    </svg>
                </p>
                <p class="absolute top-20 right-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"/>
                    </svg>

                </p>
                <p class="font-bold text-sm mt-7 mr-12">شما می توانید از طریق اپلیکیشن تلگرام یا روبیکا با پشتیبانی ما
                    در ارتباط و سوالات خود را حضوری بیان کنید</p>
                <p class="font-bold pt-12 pr-4">:ادمین تبلیغات</p>
                <span class="pr-10 pt-2 hover:text-sky-600">@my_samory</span>
                <p class="absolute top-[156px] pt-[44px] lg:top-[135px] xl:pt-[44px] right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z"/>
                    </svg>

                </p>
                <p class="font-bold pt-12 pr-4">:مدریت سایت</p>
                <span class="pr-10 pt-2 hover:text-sky-600">@countdown01</span>
                <p class="absolute top-60 pt-14 lg:pt-9 xl:pt-8 right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z"/>
                    </svg>
                </p>

                <p class="font-bold pt-12 pr-4">:مدریت سایت</p>
                <span class="pr-10 pt-2 hover:text-sky-600">@taha007</span>
                <p class="absolute top-[300px] pt-[90px] lg:pt-[71px] xl:pt-[70px] right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z"/>
                    </svg>
                </p>
                <hr class=" ml-32 mt-4 w-3/4">
                <div class="relative">
                    <p class="font-bold pr-12 pt-8 text-orange-400">:رسیدگی به انتقادات و پیشنهادات</p>
                    <span class="absolute top-7 right-6">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75"/>
              </svg>

             </span>
                    <p class="font-bold text-sm pr-10 pt-5 ">لطف هر گونه انتقاد و پیشنهادات را به ایدی با ما در میان
                        بگذارید </p>
                    <span class="pr-10 font-bold">my_samory@</span>

                    <p class="font-bold text-md pt-12 pr-8 text-orange-400">: برای دریافت اطلاعات بیشتر به کانال زیر
                        مراجعه کنید </p>
                    <span class="absolute top-52 xl:top-48 right-10 hover:text-sky-600">@Fire-Ball</span>
                    <p class="absolute  xl:top-44 pt-5 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z"/>
                        </svg>
                    </p>
                    <hr class=" ml-32 mt-20 w-3/4">
                    <div class="relative">
                        <p class="flex flex-row font-bold absolute top-4 right-6 "><span>0930-997-7430</span>:شماره
                            پیامک </p>
                        <p class="flex flex-row font-bold absolute top-12 right-6 "><span>0930-997-7430</span>:شماره
                            تماس</p>
                        <p class="flex flex-row font-bold absolute top-24 right-6"><span>www.Fire-Ball.ir</span>:ادرس
                            سایت</p>
                    </div>
                </div>

            </div>

    </section>
    <section class="relative right-36  sm:bottom-0 sm:right-24 md:left-20 lg:left-32 xl:left-20  ">
        <div
            class="dark:bg-gray-100 bg-gray-800 w-96  lg:w-210  xl:w-1/3 h-56 px-12 xl:px-0 xl:h-64  mt-60 xl:mt-96 left-56 xl:left-0 ml-5 xl:ml-12 relative rounded-lg">
            <p class=" text-white bg-orange-500 w-16 h-7 pl-1 font-bold absolute top-5 xl:top-8 right-7 xl:right-16 rounded-lg">
                درباره ما</p>
            <p class="font-bold pt-16 max-w-96 xl:pl-28 text-center dark:text-black text-white">با سلام و احترام ما
                همراه در تلاشیم که بهترین هارا برای شما به ارمغان بیاوریم .هدف این سایت معرفی بهترین و بروز ترین پلتفرم
                های بازی و ارائه سرور های انلاین می باشد. با تشکر از شما که مارا در این راه همیاری می کنید </p>
        </div>
    </section>
</main>


<div class=" relative hidden xl:mt-80 xl:block" dir="rtl">
    <footer
        class="z-20 bg-gray-900/65 w-full h-[660px] md:h-[430px] text-white absolute "
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
                                <p class="cursor-pointer hover:text-blue-400">دنبال کردن</p>
                            </a>
                        </div>

                        <div class="flex ml-8 gap-x-2">
                            <img
                                class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8"
                                src="{{asset('image/rubika.png')}}"
                                alt=""
                            />

                            <a href="https://rubika.ir/Fire__Ball">
                                <p class="cursor-pointer hover:text-blue-400">دنبال کردن</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-4 md:grid md:grid-cols-3 md:justify-items-center md:mt-14"
            >
                <div
                    class="mt-8 sm:text-lg md:mt-0 px-8 md:px-0 text-center font-semibold"
                >
                    <p>این سایت برای دانلود بازی های برتر استفاده میشود.</p>
                    <p>برای اطلاعات بیشتر به کانال تلگرام یا روبیکا</p>
                    <p>مراجعه کنید.</p>
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
                            <span class="mr-1 font-bold" dir="ltr">0938-972-5209</span>
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
                            <span class="mr-1" dir="ltr">0939-113-1209</span>
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




