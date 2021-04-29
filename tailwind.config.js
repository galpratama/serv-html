module.exports = {
  purge: [
    './public/**/*.{vue,js,ts,jsx,tsx,blade.php,html}'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'serv-bg': '#082431',
        'serv-text': '#A2ADB1',
        'serv-email-text': '#537180',
        'serv-border': '#16303D',
        'serv-button': '#22B07D',
        'serv-email': '#0B2D3D'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
