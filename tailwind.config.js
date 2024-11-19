import defaultTheme from 'tailwindcss/defaultTheme'

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
            colors: {
                primaryGray: '#666666', // Define el color gris
                primaryBlue: '#043e81', // Define el color azul
                primaryRed: '#610001' //Color vino
            },
            fontFamily: {
                roboto: ['Roboto', 'sans-serif'], // Define la fuente Roboto
            },
            fontSize: {
                'h1-base': '35px',
                'h1-lg': '42px', // Tamaño para pantallas grandes
                'h1-inner': '30px', // Tamaño del texto interno en móvil

                'h2-base': '25px',
                'h2-lg': '32px', // Tamaño para pantallas grandes
            },
            lineHeight: {
                'h1-line': '44.5455px', // Line-height específico
            },
            fontWeight: {
                black: 900, // Peso para el texto del h1
                800: 800,
            },
        },
    },
    plugins: [],
}
