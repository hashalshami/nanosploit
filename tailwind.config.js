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
                },
            },
           
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                ar: ['"Noto Naskh Arabic"', 'serif'],

            },
        },
    },

    plugins: [
        forms, 
        typography,
        // require('flowbite/plugin'),
    ],
};
