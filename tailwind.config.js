import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/layouts/_blog/*.blade.php",
        "./resources/views/components/*.blade.php",
        "./resources/views/blog/*.blade.php",
        // "./resources/views/**/*.blade.php",
        "./resources/views/layouts/app.blade.php",
        "./resources/views/layouts/blog.blade.php",
        "./resources/views/layouts/guest.blade.php",
        "./resources/views/layouts/navigation.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
