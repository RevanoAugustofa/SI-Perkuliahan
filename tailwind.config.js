module.exports = {
  content: ["./view/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    themes: [
      "light",
      "dark",
    ],
  },
}