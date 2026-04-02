/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './app/Livewire/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                body: ['"DM Sans"', 'sans-serif'],
                parslay: ['Parslay', 'cursive'],
                nineties: ['"Behind The Nineties"', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
