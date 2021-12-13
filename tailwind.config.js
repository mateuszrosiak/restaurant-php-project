const colors = require('tailwindcss/colors');

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
      fontFamily: {
        Poppins: ['Poppins', 'sans-serif'],
      },
      extend: {
        colors: {
          primary: 'F66B56',
          secondary: 'FEE299',
          test: '#000000',
          success: '#587e0e'
        }
      }
  },
  variants: {
    extend: {},
  },
  plugins: []
}
