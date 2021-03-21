module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'body':['Saira Semi Condensed', 'sans-serif'],
            'nav':['Anonymous Pro', 'monospace'],
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
