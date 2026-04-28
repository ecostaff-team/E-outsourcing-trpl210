/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                brand: {
                    DEFAULT: '#16a34a',
                    dark: '#15803d',
                    light: '#dcfce7',
                    mid: '#bbf7d0'
                }
            }
        }
    },
    plugins: [],

}

