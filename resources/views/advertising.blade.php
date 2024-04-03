<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>Fire-Ball</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
<section class="-mt-32  flex justify-center items-center">
    <div class="w-[600px] bg-stone-200 xl:w-1/2 h-64 mt-72 relative">
        <div class="mt-24">
            <p class="absolute top-5 right-10 font-bold text-lg font-mono">توپ اتشین</p>
        </div>
        <div class="text-center ml-5 font-bold text-lg mt-10 lg:ml-72">این بخش در حال اماده سازی است</div>

        <a href="{{route('/')}}">
            <div class="bg-stone-500 w-28 h-10 text-white text-center pt-2 rounded-md  mt-20 lg:mt-28 ml-48 lg:ml-80 cursor-pointer">
                بازگشت به خانه
            </div>
        </a>
    </div>

</section>
</body>
</html>
