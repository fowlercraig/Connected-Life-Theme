const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '1rem',
        lg: '2rem',
        xl: '3rem',
      },
    },
    aspectRatio: {
      'none': 0,
      'square': [1, 1],
      '16/9': [16, 9], 
      '4/3': [4, 3],   
      '21/9': [21, 9], 
      '3/4': [3,4],   
      '4/5': [4,5],   
    },
    extend: {
      height: theme => ({
        "screen-mobile":"calc(var(--vh, 1vh) * 100);",
        "screen/2": "50vh",
        "screen/3": "calc(100vh / 3)",
        "screen/4": "calc(100vh / 4)",
        "screen/5": "calc(100vh / 5)",
        "screen-header": "calc(100vh - 3.5rem)",
      }),
      fontFamily: {
        sans: ['urw-din','Inter var', ...defaultTheme.fontFamily.sans],
        'condensed': ['din-condensed','Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    scale: ['responsive', 'hover', 'focus', 'group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'group-hover'],
    translate: ['responsive', 'hover', 'focus', 'group-hover'],
    display: ['responsive', 'hover', 'focus', 'group-hover'],
    width: ['responsive', 'hover', 'focus', 'group-hover'],
    borderWidth: ['responsive', 'hover', 'focus', 'group-hover','last'],
    extend: {},
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-aspect-ratio'),
  ],
}
