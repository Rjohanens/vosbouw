import animations from "@midudev/tailwind-animations";

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                primary: "#fc7d14",
                secondary: "#f8f7fa",
                dark: "#0f0f10",
            },
        },
        fontFamily: {
            rubik: ["Rubik", "sans-serif"],
        },
    },
    plugins: [animations, require("daisyui")],
};
