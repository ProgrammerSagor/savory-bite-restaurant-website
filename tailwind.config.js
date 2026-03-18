/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#c2410c",
                "primary-dark": "#9a3412",
            },
        },
    },
    plugins: [],
};
