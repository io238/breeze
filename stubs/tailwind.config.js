const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.html',
        './resources/**/*.blade.php',
        './resources/**/*.vue',
        './resources/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Public Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gray: colors.coolGray,
                brand: colors.teal,
                secondary: colors.trueGray,
                info: {
                    '50':  '#f3f9fb',
                    '100': '#e4f7f8',
                    '200': '#c2edf0',
                    '300': '#95dde8',
                    '400': '#50c0db',
                    '500': '#249dca',
                    '600': '#1b7bae',
                    '700': '#1d618a',
                    '800': '#1b4a66',
                    '900': '#183c50',
                },
                success: {
                    '50':  '#f9fbf7',
                    '100': '#f4fbe5',
                    '200': '#e3f6ae',
                    '300': '#c6ec6b',
                    '400': '#7cd928',
                    '500': '#3bc20d',
                    '600': '#27a407',
                    '700': '#25830a',
                    '800': '#20620e',
                    '900': '#1a4b0f',
                },
                warning: {
                    '50':  '#f9f6e7',
                    '100': '#faf1c1',
                    '200': '#f6e87f',
                    '300': '#f0d73b',
                    '400': '#efc009',
                    '500': '#dc9b06',
                    '600': '#c67704',
                    '700': '#a45a07',
                    '800': '#84460d',
                    '900': '#6a380f',
                },
                danger: {
                    '50':  '#fcf7f4',
                    '100': '#fcede8',
                    '200': '#fad5d0',
                    '300': '#f9b3a6',
                    '400': '#f9826b',
                    '500': '#fa573f',
                    '600': '#ef2609',
                    '700': '#d72929',
                    '800': '#af2228',
                    '900': '#8d1d23',
                }
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('tailwindcss-brand-colors'),
    ],
};
