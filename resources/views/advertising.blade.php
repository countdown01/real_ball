<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire-Ball</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
<section class="flex justify-center items-center">
    <div class="bg-stone-200 w-1/2 h-64 mt-72 relative">
        <div>
            <div class="ml-96 pt-4">
                <!--icons web-->
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="orange"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-10 h-10"
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
            <p class="absolute top-5 right-10 font-bold text-lg font-mono">توپ اتشین</p>
        </div>
        <div class="font-bold text-lg mt-10 ml-72">این بخش در حال اماده سازی است</div>

        <a href="{{route('/')}}">
        <div class="bg-stone-500 w-28 h-10 text-white text-center pt-2 rounded-md mt-28 ml-80 cursor-pointer">
            بازگشت به خانه
        </div>
        </a>
    </div>

</section>
</body>
</html>
