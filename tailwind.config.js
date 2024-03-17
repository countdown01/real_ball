/** @type {import('tailwindcss').Config} */
export default {
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

