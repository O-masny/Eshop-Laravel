import defaultTheme from 'tailwindcss/defaultTheme';
import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: { 
        extend: { 
            fontFamily: { 
                tanker: ['Tanker', 'sans-serif'], 
                generalSans: ['GeneralSans', 'sans-serif'], 
                gambetta: ['Gambetta', 'serif'], 
            }, 
        }, 
    }, 
    plugins: [], 
};