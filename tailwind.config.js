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
                "dark-main-bg": "#252525",
                "secondary-bg": "#F14A00",
                "tertiary-bg": "#e8e8e8",
                "dark-tertiary-bg": "#1c1c1c",
                "main-border": "#F14A00",
                "main-text": "#3C3D37",
                "dark-main-text": "#FBFBFB",
                "secondary-text": "#929AAB",
                "tertiary-text": "#F14A00",
                "fourtiary-text": "#FF9D23",
            },
        },
    },
    plugins: [],
};
