import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.indigo,
                secondary: colors.zinc,
                dark: colors.gray,
                green: colors.emerald,
                baseblue: {
                    DEFAULT: '#227b8b'
,                    100: '#e6f3f5', // Very light
                    200: '#cce7eb',
                    300: '#99cfd8',
                    400: '#66b7c4',
                    500: '#339bb1',
                    600: '#227b8b', // Your base color
                    700: '#1b5f6b',
                    800: '#14444c',
                    900: '#0d292d'  // Very dark
                }
            },
            borderWidth: {
                '3': '3px',
            }
        },
    },
    plugins: [],
};
