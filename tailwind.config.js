import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                dark: {
                    body: '#090c10',
                    text: {
                        main: '#cbcbcb',
                    },
                },
                tag:{
                    orange:'#f9b960',
                    termh:'#4e898c',
                }
            },
            screens: {
                'mx': { 'max': '640px' }, // => @media (max-width: 640px) { ... }
            },
           
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                ar: ['"Noto Naskh Arabic"', ...defaultTheme.fontFamily.serif],
                display: ['Cairo', 'sans-serif'],
                en: ['Roboto', 'sans-serif', 'Arial', 'Tahoma'],
            },
        },
    },

    plugins: [
        forms, 
        typography,
        // require('flowbite/plugin'),
    ],
};
