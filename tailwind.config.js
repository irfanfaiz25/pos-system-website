/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Fira Sans", "sans-serif"],
            },
            colors: {
                "main-bg": "#FFFF",
                "secondary-bg": "#F14A00",
                "main-border": "#F14A00",
                "main-text": "#1E201E",
                "secondary-text": "#929AAB",
                "tertiary-text": "#F14A00",
                "fourtiary-text": "#FF9D23",
            },
        },
    },
    plugins: [],
};
