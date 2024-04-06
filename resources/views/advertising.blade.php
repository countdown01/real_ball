<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="https://gamefireball.ir/public/image/fire.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>Fire-Ball</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            content: [
                'resources/**/*.{js,blade.php}',
                'resources/**/**/*.{js,blade.php}',
                'resources/**/**/**/*.{js,blade.php}',
                'resources/**/**/**/**/*.{js,blade.php}',
                'resources/**/**/**/**/**/*.{js,blade.php}',
                'resources/**/**/**/**/**/**/*.{js,blade.php}',
                'resources/**/**/**/**/**/**/**/*.{js,blade.php}',
                'resources/**/**/**/**/**/**/**/**/*.{js,blade.php}',
                'resources/**/**/**/**/**/**/**/**/**/*.{js,blade.php}',
            ],
            theme: {
                extend: {
                    spacing: {
                        156: "470px",
                        178: "500px",
                        186: "570px",
                        210: "620px",
                    },
                    screen: {
                        "3xl": "1700px",
                    },
                    colors: {
                        silver: "#ecebff",
                        brown: "#964B00",
                    },
                    borderRadius: {
                        "4xl": "2rem",
                    },
                },
            },
            plugins: [],
        }
    </script>

</head>
<body>
<section class="-mt-32  flex justify-center items-center">
    <div class="w-[600px] bg-stone-200 xl:w-1/2 h-64 mt-72 relative">
        <div class="mt-24">
            <p class="absolute top-5 right-10 font-bold text-lg font-mono">توپ اتشین</p>
        </div>
        <div class="text-center ml-5 font-bold text-lg mt-10 lg:ml-72">این بخش در حال اماده سازی است</div>

        <a href="https://gamefireball.ir/resources/views/index.blade.php">
            <div class="bg-stone-500 w-28 h-10 text-white text-center pt-2 rounded-md  mt-20 lg:mt-28 ml-48 lg:ml-80 cursor-pointer">
                بازگشت به خانه
            </div>
        </a>
    </div>

</section>
</body>
</html>
