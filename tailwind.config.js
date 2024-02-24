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
                brand: {
                    50: "#ffffff",
                    100: "#cfd8dc",
                    200: "#C6DBCE",
                    300: "#90a4ae",
                    400: "#28292C",
                    500: "bg-gradient-to-r from-blue-800 to-indigo-900",
                    600: "#546e7a",
                    700: "#334155",
                    800: "#1e293b",
                    900: "#101115",
                    950: "#101115",
                },

                button: {
                    800: "#2993FF",
                },
                star: {
                    400: "#FF6452",
                },
            },
            fontFamily: {
                sans: "Roboto Mono, monospace",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
