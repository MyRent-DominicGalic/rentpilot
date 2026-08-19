const defaultTheme = require('tailwindcss/defaultTheme')



module.exports = {
    //mode: 'jit',
    purge: {
        content: [
          "./src/**/*.scss",
          "./**/*.htm",
          "./../../**/**/*.htm"
        ],
    },
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                serif: ['Montserrat', ...defaultTheme.fontFamily.serif],
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '8xl': '112rem',
                '32': '8rem',
                '36': '9rem',
                '44': '11rem',
                '48': '12rem'
            },
            height: {
                '128': '35rem'
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                primary: '#2C6C78',
                secondary: '#1EBDBD',
                black: {
                    DEFAULT: '#231F20',
                    alt: '#272E35'
                },
                white: '#FFFFFF',
                gray: {
                    light: '#999999',
                    DEFAULT: '#666666',
                    dark: '#333333'
                },
                silver: {
                    lighter: '#F6F6FB',
                    light: '#F3F3F3',
                    DEFAULT: '#CCCCCC',
                    alt: '#E7E7E7'
                },
                teal: {
                    light: '#00F1F1',
                    DEFAULT: '#00808C'
                },
                red: '#CE1010'
            },
        },
        borderRadius: {
            'none': '0',
            'sm': '0.125rem',
            DEFAULT: '0.25rem',
            'md': '0.375rem',
            'lg': '0.5rem',
            'xl': '0.75rem',
            '2xl': '1rem',
            '3xl': '1.5rem',
            'full': '9999px',
            'large': '32px',
        },
        fontSize: {
            xs: '0.75rem', // 12px
            sm: '0.875rem', // 14px
            base: '1rem', // 16px
            lg: '1.125rem', // 18px
            xl: '1.25rem', // 20px
            '2xl': '1.5rem', // 24px
            '3xl': '1.75rem', // 24px
            '4xl': '2rem', // 32px
            '5xl': '2.5rem',  // 40px
            '6xl': '3.5rem', // 56px
        },
        container: {
          center: true,
          padding: '1rem',
          screens: {
              DEFAULT: '1232px',
          }
        },
    },
    variants: {},
    plugins: [],
}
