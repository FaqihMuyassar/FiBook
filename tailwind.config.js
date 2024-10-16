/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors : {
            'nav' : '#EFBC9B',
            'test' : '#785E4B',
            'button' : '#698474',
            'hoverbt' : '#4B6154',
            'admin' : '#D6DAC8',
        }
    },
  },
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    themes: [],
    darkTheme: "light",
    base: true,
    styled: true,
    utils: true,
    prefix: "",
    logs: true,
    themeRoot: ":root",
  },
}

