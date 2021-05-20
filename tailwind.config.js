module.exports = {
  mode: 'jit',
  purge: [
    './public/**/*.{vue,js,ts,jsx,tsx,php,blade.php,html}'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      extend: {
        verticalAlign: ['sub'],
      },
      colors: {
        'serv-bg': '#082431',
        'serv-bg-explore': '#F8F8FD',
        'serv-text': '#A2ADB1',
        'serv-email-text': '#537180',
        'serv-border': '#16303D',
        'serv-button': '#22B07D',
        'serv-email': '#0B2D3D',
        'serv-login-bg': '#D5D5E1',
        'serv-login-text': '#5C5C69',
        'serv-services-bg': '#F4F4FA',
        'serv-hr': '#EFEFEF',
        'serv-testimonial-border': '#ECECF4',
        'serv-yellow': '#FFBF47',
        'serv-explore-button': '#F0F0FC'
      },
      spacing: {
        '13': '3.25rem',
        '15': '3.75rem',
        '128': '32rem',
        '144': '36rem',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
