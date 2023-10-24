/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/components/*.blade.php",
        "./resources/views/layouts/_blog/*.blade.php",
        "./resources/views/layouts/blog.blade.php",
        "./resources/views/blog/*.blade.php",
        "./resources/views/newblog/*.blade.php",
        "./resources/views/layouts/_newblog/*.blade.php",
        "./resources/views/layouts/auth.blade.php",
        "./resources/views/layouts/newblog.blade.php",
    ],
    theme: {
        container: {
            center: true,
            padding: "24px",
        },
        extend: {
            colors: {
                primary: "#1b8415",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
