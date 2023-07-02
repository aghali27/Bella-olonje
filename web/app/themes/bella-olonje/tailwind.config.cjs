// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        orange: '#FA4A0C',
        grey: '#5C5C5C',
        white: '#FAFAFA',
        dark_black: '#252B42',
      },
      fontFamily: {
      sans: ['Montserrat'],
      } 
    },
  },
  plugins: [],
};
