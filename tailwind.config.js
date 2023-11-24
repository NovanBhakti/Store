/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
    ],
    theme: {
        extend: {},
    },
    safelist: [
        "animate-[fade-in-left_1s_ease-in-out]",
        "animate-[fade-in-down_1s_ease-in-out]",
    ],
    plugins: [],
};
