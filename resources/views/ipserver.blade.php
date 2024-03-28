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
    @vite('resources/js/app.js')
    @vite('resources/css/ipserver.css')
</head>
<body class="overflow-x-hidden">
<header
    dir="rtl"
    class="w-[1090px] sm:w-[1156px] md:w-[1262px] lg:w-[1450px] sm:pl-10 xl:w-[1430px]"
>
    <div class="mt-10">
        <div class="flex items-center justify-between">
            <div class="grid grid-cols-2 mr-10">
                <div class="grid grid-cols-2">
                    <div class="-mt-10 mr-8 sm:text-2xl font-mono text-lg pr-1">
                        <div class="-mr-16 mt-2">
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
                                    class="w-14 h-14 -mr-24 sm:mr-0 sm:w-8 sm:h-8 text-gray-600"
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
                            class="-mr-24 -mt-12 text-6xl sm:text-4xl sm:-mr-7 sm:-mt-8 md:-mt-2 md:-mr-12"
                        >
                            توپ
                        </p>
                        <p class="-mr-20 mt-2 md:mt-0 sm:-mr-7 text-6xl sm:text-4xl md:-mr-14">
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
                            class="-mt-10 w-20 h-20 sm:w-14 sm:h-14 -mr-14 sm:-mr-10 xl:w-10 xl:h-10 md:-mr-5 lg:-mr-5"
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
                    class="mt-36 -mr-72 sm:ml-14 sm:-mr-48 sm:mt-16 md:mt-14 md:pt-2 md:-mr-32 lg:-mr-28 grid grid-cols-2 mb-24 sm:gap-x-0 gap-x-10"
                >
                    <div
                        class="md:mr-1 lg:mr-0 w-20 h-20 sm:w-12 sm:h-12 xl:w-10 xl:h-10 border border-gray-400 rounded-full flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class=" w-16 h-16 sm:w-9 sm:h-9 xl:w-7 xl:h-7 dark:text-slate-100 text-slate-400"
                        >
                            <path
                                d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"
                            ></path>
                        </svg>
                    </div>

                    <div
                        class="-mr-52 sm:-mr-32 md:-mr-44 w-20 h-20 sm:w-12 sm:h-12 xl:w-10 xl:h-10 border border-gray-400 rounded-full flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-16 h-16 sm:w-9 sm:h-9 xl:w-7 xl:h-7 text-gray-400 dark:text-slate-100"
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
                    class="hidden sm:hidden md:flex md:-mt-[92px] md:mr-12 lg:mr-14 lg:mb-6 xl:mr-4 items-center justify-center"
                >
                    <div class="md:mb-1 relative -right-20 lg:-right-28 z-10">|</div>

                    <input
                        type="text"
                        placeholder="اسم مطلب مورد نظر را تایپ کنید        "
                        class="w-96 h-14 -mr-32 lg:-mr-40 font-bold text-center text-black ring-1 ring-gray-400 rounded-2xl"
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

            <div
                class="-ml-28 -mt-44 sm:-mt-36 sm:-ml-36 md:mr-44 grid grid-cols-4"
            >
                <button id="search" class="ml-4 sm:ml-0 sm:mr-2 md:hidden">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="mr-14 mb-2 w-16 h-16 sm:w-12 sm:h-12 md:w-8 md:h-8 p-1 rounded-full bg-gray-800 text-white hover:text-gray-600 cursor-pointer"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                        />
                    </svg>
                </button>
                <div
                    class="grid grid-cols-2 -ml-40 sm:-ml-32 md:grid md:grid-cols-2 md:-ml-[105px] lg:-ml-[104px] xl:-ml-14"
                >
                    <a href="{{route('login')}}">
                        <button
                            class="mr-2 text-4xl md:text-base sm:mr-4 md:-mr-16 bg-gradient-to-br from-cyan-400 to-amber-300 dark:bg-white text-white dark:text-black w-36 h-24 sm:w-28 sm:h-16 md:w-28 md:h-14 xl:w-20 xl:h-10 rounded-full rounded-tr-md"
                        >
                            ثبت نام
                        </button>
                    </a>
                    <a href="{{route('login')}}">
                        <button
                            class="mr-1 ml-1 text-4xl md:text-base pb-3 md:pb-0 md:-mr-7 bg-slate-800 text-white dark:text-black dark:bg-white  md:w-28 md:h-14 xl:w-20 xl:h-10 rounded-full rounded-tl-md rounded-r-sm border-4 border-stone-400 pl-2"
                        >
                            ورود
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="ml-28 -mt-[195px] mr-0 sm:mr-20 flex items-center justify-center"
        >
            <div id="searchBox" class="hidden items-center justify-center">
                <input
                    type="text"
                    placeholder="اسم مطلب مورد نظر را تایپ کنید        "
                    class="w-[380px] text-2xl sm:w-[320px] h-16 sm:h-14 p-1 pr-10 font-bold text-center text-black ring-1 ring-gray-400 rounded-2xl"
                />
                <svg
                    id="hideSearchBox"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-7 h-7 -mt-14 sm:-mt-20 pr-1"
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
            <div class="flex md:grid md:grid-cols-2 pt-8">
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
                    <p class="mr-1 hover:rotate-6 cursor-pointer">خانه</p>
                </a>
            </div>

            <div>
                <a href="{{route('advertising')}}">
                    <p class="hover:rotate-6 cursor-pointer">معرفی و دانلود بازی</p>
                </a>
            </div>

            <div>
                <a href="{{route('relationship')}}">
                    <p class="hover:rotate-6 cursor-pointer">تبلیغات</p>
                </a>
            </div>

            <div>
                <a href="{{route('conctus')}}">
                    <p class="hover:rotate-6 cursor-pointer">ارتباط با ما</p>
                </a>
            </div>

            <div>
                <a href="{{route('ipserver')}}">
                    <p class="hover:rotate-6 cursor-pointer">لیست سرور ها</p>
                </a>
            </div>
        </div>

        <div
            class="hidden sm:hidden md:text-xl md:flex md:mt-24 md:items-center md:justify-center md:gap-x-7"
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
                    <p class="mr-1 hover:rotate-6 cursor-pointer">خانه</p>
                </a>
            </div>

            <div>
                <a href="{{route('advertising')}}">
                    <p class="hover:rotate-6 cursor-pointer">معرفی و دانلود بازی</p>
                </a>
            </div>

            <div>
                <a href="{{route('relationship')}}">
                    <p class="hover:rotate-6 cursor-pointer">تبلیغات</p>
                </a>
            </div>

            <div>
                <a href="{{route('conctus')}}">
                    <p class="hover:rotate-6 cursor-pointer">ارتباط با ما</p>
                </a>
            </div>

            <div>
                <a href="{{route('ipserver')}}">
                    <p class="hover:rotate-6 cursor-pointer">لیست سرور ها</p>
                </a>
            </div>
        </div>
    </div>
</header>

<div
    class="w-[926px] ml-28 sm:w-[1006px] sm:ml-24 md:w-[1181px] md:right-8 lg:w-[1326px] lg:right-8 relative grid md:grid-cols-3 justify-items-center mt-24"
    dir="rtl"
>
    <div class="text-center space-y-4 mt-20 xl:mr-28">
        <div
            class="flex text-3xl sm:text-base overflow-hidden relative   items-center justify-center bg-slate-200 w-210 h-20 sm:w-96 sm:h-14 md:w-64 md:h-14 rounded-xl"
        >
            <p class="text-white z-50">جهت تبلیغ در این کادر کلیک کنید</p>
            <img class="w-full absolute h-full" src="{{asset('image/6.png')}}" alt="">
        </div>
        <div
            class="flex text-3xl sm:text-base overflow-hidden relative   items-center justify-center bg-slate-200 w-210 h-20 sm:w-96 sm:h-14 md:w-64 md:h-14 rounded-xl"
        >
            <p class="text-white z-50">جهت تبلیغ در این کادر کلیک کنید</p>
            <img class="w-full absolute h-full" src="{{asset('image/4.png')}}" alt="">
        </div>
        <div
            class="flex text-3xl sm:text-base overflow-hidden relative   items-center justify-center bg-slate-200 w-210 h-20 sm:w-96 sm:h-14 md:w-64 md:h-14 rounded-xl"
        >
            <p class="text-white z-50">جهت تبلیغ در این کادر کلیک کنید</p>
            <img class="w-full absolute h-full" src="{{asset('image/2.png')}}" alt="">
        </div>
    </div>

    <div
        class="overflow-hidden flex items-center justify-center mt-4 xl:mt-0 bg-slate-200 h-96 md:w-156 md:h-80 rounded-sm"
    >
        <div class="swiper mySwiper6 w-full h-full md:h-80" dir="rtl">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative">
                    <img class="w-full h-full absolute" src="{{asset('image/6.png')}}" alt=""/>
                    <p class="z-50 text-white text-2xl">جهت تبلیغ در این کادر کیلک کنید</p>
                </div>
                <div class="swiper-slide relative">
                    <img class="w-full h-full absolute" src="{{asset('image/4.png')}}" alt=""/>
                    <p class="z-50 text-white text-2xl">جهت تبلیغ در این کادر کیلک کنید</p>
                </div>
                <div class="swiper-slide relative">
                    <img class="w-full h-full absolute" src="{{asset('image/3.png')}}" alt=""/>
                    <p class="z-50 text-white text-2xl">جهت تبلیغ در این کادر کیلک کنید</p>
                </div>
                <div class="swiper-slide relative">
                    <img class="w-full h-full absolute" src="{{asset('image/2.png')}}" alt=""/>
                    <p class="z-50 text-white text-2xl">جهت تبلیغ در این کادر کیلک کنید</p>
                </div>
                <div class="swiper-slide relative">
                    <img class="w-full h-full absolute" src="{{asset('image/1.png')}}" alt=""/>
                    <p class="z-50 text-white text-2xl">جهت تبلیغ در این کادر کیلک کنید</p>
                </div>
                <div class="swiper-slide relative">
                    <img class="w-full h-full absolute" src="{{asset('image/2.png')}}" alt=""/>
                    <p class="z-50 text-white text-2xl">جهت تبلیغ در این کادر کیلک کنید</p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="overflow-hidden flex items-center justify-center bg-slate-200 w-210 h-64 md:w-56 md:h-52 mt-7 md:mt-20 ml-4 sm:ml-5 xl:mt-16 xl:ml-28 rounded-xl"
    >
        <div class="swiper mySwiper5 w-full h-64 md:h-52">
            <div class="swiper-wrapper">
                <div class="swiper-slide  relative">
                    <img
                        class="w-full h-full absolute"
                        src="{{asset('image/1.png')}}"
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
                        src="{{asset('image/2.png')}}"
                        alt=""
                    />
                    <p class="z-50 text-white">جهت تبلیغ در این کادر کلیک کنید</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div
    class="w-[926px] ml-32 sm:w-[1006px] sm:ml-24 md:w-[1166px] lg:w-[1326px] flex items-center justify-center"
    dir="rtl"
>
    <div
        class="bg-slate-200 flex flex-col items-center justify-center mt-14 w-80 h-48 sm:w-56 sm:h-36 md:w-48 md:h-28 rounded-full"
    >
        <p class="text-3xl font-semibold md:text-base">آدرس سرور های موجود</p>

        <div class="mt-6 md:mt-4 text-white animate-bounce">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-12 h-12 sm:w-9 sm:h-8 bg-gray-950 rounded-full"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3"
                />
            </svg>
        </div>
    </div>
</div>

<div
    class="w-[926px] ml-36 sm:w-[1006px] sm:ml-24 md:w-[1166px] lg:w-[1326px] flex flex-col items-center justify-center mt-10"
    dir="rtl"
>
    <div
        class="bg-slate-200 grid grid-cols-4 justify-items-center rounded-lg pt-12 sm:pt-7 w-[1050px]  sm:w-210  h-72 md:w-1/2 sm:h-48"
    >
        <div class="flex flex-col">
            <img
                src="{{asset('image/gta v.png')}}"
                alt="minecraftsvg"
                class="w-36 h-36 sm:w-20 sm:h-20 rounded-full"
            />
            <p class="font-bold text-2xl sm:text-base pt-4 pr-4">GTA V</p>
            <p class="font-bold text-2xl sm:text-base">جی تی ای وی</p>
        </div>

        <div class="flex flex-col">
            <img
                src="{{asset('image/mta.png')}}"
                alt="minecraftsvg"
                class="w-36 h-36 sm:w-20 sm:h-20 rounded-full"
            />
            <p class="font-bold pt-4 text-2xl sm:text-base pr-6">Mta</p>
            <p class="font-bold pr-3 text-2xl sm:text-base">ام تی ای</p>
        </div>

        <div class="flex flex-col">
            <img
                src="{{asset('image/samp.jfif')}}"
                alt="minecraftsvg"
                class="w-36 h-36 sm:w-20 sm:h-20 rounded-full"
            />
            <p class="font-bold pt-4 text-2xl sm:text-base pr-4">Samp</p>
            <p class="font-bold pr-4 text-2xl sm:text-base">سمپ</p>
        </div>

        <div class="flex flex-col">
            <img
                src="{{asset('image/minecraft.png')}}"
                alt="minecraftsvg"
                class="w-36 h-36 sm:w-20 sm:h-20 rounded-full"
            />
            <p class="font-bold pt-4 text-2xl sm:text-base">Minecraft</p>
            <p class="font-bold pr-2 text-2xl sm:text-base">مایکرافت</p>
        </div>
    </div>

    <div class="mt-6">
        <a
            href="{{route('relationship')}}"
            target="_parent"
            class="text-orange-500 font-bold text-3xl md:text-lg hover:text-blue-500"
        >جهت ثبت ادرس سرور خود کلیک کنید</a
        >
    </div>

    <div class="flex gap-x-10 md:gap-x-80 mt-8">
        <div
            class="flex items-center justify-center gap-x-4 sm:gap-x-8 bg-gradient-to-br from-lime-600 to-sky-500 w-96 h-28 md:w-52 md:h-20"
        >
            <img
                class="w-14 h-14 md:w-9 md:h-9"
                src="{{asset('image/rubika.png')}}"
                alt=""
            />
            <a href="https://rubika.ir/Fire__Ball">
                <div
                    class="text-white text-3xl md:text-base font-bold hover:text-sky-400"
                >
                    دنبال کردن
                </div>
            </a>
        </div>

        <div
            class="flex items-center justify-center gap-x-4 md:gap-x-8 bg-gradient-to-br from-purple-400 to-sky-500 w-96 h-28 sm:w-52 sm:h-20"
        >
            <img
                srcset="
              https://img.icons8.com/?size=50&amp;id=TCnKnYZFoOzM&amp;format=png  1x,
              https://img.icons8.com/?size=100&amp;id=TCnKnYZFoOzM&amp;format=png 2x
            "
                width="50"
                height="50"
                alt="Telegram icon"
                data-v-ef2c1d0b=""
                class="w-14 h-14 md:w-8 md:h-8"
            />
            <a href="https://t.me/Fire_ball00">
                <div
                    class="text-white text-3xl  md:text-base font-bold hover:text-sky-400"
                >
                    دنبال کردن
                </div>
            </a>
        </div>
    </div>
</div>

<div
    class="w-[926px]  sm:w-[1006px] md:w-[1166px] lg:w-[1326px] ml-24 sm:ml-24 md:ml-14 xl:ml-0 mt-24"
    dir="rtl"
>
    <div class="grid grid-cols-1 xl:grid-cols-2 xl:justify-items-center">
        <div class="mt-14 pl-20 -mr-72 xl:-mr-0 xl:pl-0">
            <div>
                <div class="flex items-center justify-center mr-96">
                    <hr class="w-[720px]"/>
                    <span class="font-bold text-3xl md:text-base mr-20">Samp</span>
                </div>

                <div class="gap-x-72 md:gap-x-0 grid grid-cols-3 justify-items-center mr-80 mt-10">
                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="flex items-end justify-end">
                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[76px]"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-24 mr-12 w-56 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <div class="flex items-center justify-center mr-96">
                    <hr class="w-[720px]"/>
                    <span class="font-bold text-3xl md:text-base mr-20">Minecraft</span>
                </div>

                <div class="gap-x-72 md:gap-x-0 grid grid-cols-3 justify-items-center mr-80 mt-10">
                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="flex items-end justify-end">
                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[76px]"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-24 mr-12 w-56 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <div class="flex items-center justify-center mr-96">
                    <hr class="w-[720px]"/>
                    <span class="font-bold text-3xl md:text-base mr-20">MTA</span>
                </div>

                <div class="gap-x-72 md:gap-x-0 grid grid-cols-3 justify-items-center mr-80 mt-10">
                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="flex items-end justify-end">
                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[76px]"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-24 mr-12 w-56 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <div class="flex items-center justify-center mr-96">
                    <hr class="w-[720px]"/>
                    <span class="font-bold text-3xl md:text-base mr-20">GATV</span>
                </div>

                <div class="gap-x-72 md:gap-x-0 grid grid-cols-3 justify-items-center mr-80 mt-10">
                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="flex items-end justify-end">
                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[76px]"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-24 mr-12 w-56 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>

                    <div class="bg-slate-200/70 w-80 h-80 md:w-60 md:h-52">
                        <div class="mr-32 grid grid-cols-2 justify-items-end">
                            <div>
                                <div
                                    class="bg-slate-300 w-52 h-16 md:w-36 md:h-14 -mt-4 rounded-lg font-bold"
                                >
                      <span class="flex items-center justify-center text-2xl md:text-base"
                      >پیشنهاد توپ اتشین</span
                      >
                                    <div class="flex items-end justify-end">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="lime"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-8 h-8 md:w-6 md:h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gray-300 flex items-center justify-center -mt-3 -ml-3 w-12 h-12 md:w-8 md:h-8 rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8 md:w-6 md:h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-center text-3xl md:text-base font-bold mt-[72px] md:mt-16"
                            dir="ltr"
                        >
                            IP: -- -- --
                        </div>

                        <div
                            class="bg-slate-300 flex items-center justify-center mt-[90px] mr-8 md:mr-12 w-52 h-16 text-3xl md:text-base  md:w-36 md:h-12 font-bold rounded-tl-xl"
                        >
                            اسم سرور
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="flex items-center justify-center cursor-pointer text-orange-500 font-bold text-3xl md:text-lg mr-[380px] xl:mr-210 mt-10"
            >
                جهت اضافه کردن سرور خود کلیک کنید
            </div>
        </div>

        <div
            class="mr-24 sm:mr-48 md:mr-56 lg:mr-64 xl:mr-72 grid grid-cols-2 xl:grid-cols-1 space-y-14"
        >

            <div
                class="mt-14 relative xl:mt-0 flex overflow-hidden items-center justify-center w-80 h-72 md:w-64 md:h-60 bg-orange-500"
            >

                <p class="cursor-pointer absolute font-bold text-white text-2xl md:text-base hover:text-sky-600">
                    جهت تبلیغ در این کادر کلیک کنید
                </p>
                <img class="w-full h-full" src="{{asset('image/1.png')}}" alt="">
            </div>


            <div class="flex items-center overflow-hidden justify-center w-80 h-72 md:w-64 md:h-60  bg-orange-500">
                <p class="cursor-pointer absolute font-bold text-white text-2xl md:text-base hover:text-sky-600">
                    جهت تبلیغ در این کادر کلیک کنید
                </p>
                <img class="w-full h-full" src="{{asset('image/2.png')}}" alt="">
            </div>

            <div class="flex items-center overflow-hidden justify-center w-80 h-72 md:w-64 md:h-60  bg-orange-500">
                <p class="cursor-pointer absolute font-bold text-white text-2xl md:text-base hover:text-sky-600">
                    جهت تبلیغ در این کادر کلیک کنید
                </p>
                <img class="w-full h-full" src="{{asset('image/3.png')}}" alt="">
            </div>

            <div class="flex items-center overflow-hidden justify-center w-80 h-72 md:w-64 md:h-60 bg-orange-500">
                <p class="cursor-pointer absolute font-bold text-white text-2xl md:text-base hover:text-sky-600">
                    جهت تبلیغ در این کادر کلیک کنید
                </p>
                <img class="w-full h-full" src="{{asset('image/4.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="hidden xl:block mt-10 relative" dir="rtl">
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
                        <p class="hover:text-blue-300">صفحه اصلی</p>
                        <p class="hover:text-blue-300">معرفی و دانلود بازی</p>
                        <p class="hover:text-blue-300">لیست سرور ها</p>
                        <p class="hover:text-blue-300">تبلیغات</p>
                    </div>
                </div>

                <div
                    class="mt-4 md:mt-0 space-y-2 flex flex-col ml-4 items-end justify-end"
                >
                    <div>
                        تلفن :
                        <span class="mr-1 font-bold" dir="ltr">0938-972-5209</span>
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
                        <span class="mr-1" dir="ltr">0939-113-1209</span>
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
