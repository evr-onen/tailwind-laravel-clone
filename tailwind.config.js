/** @type {import('tailwindcss').Config} */

export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Poppins", "barlow", "sans-serif"],
        barlow: ["Barlow Condensed", "sans-serif"],
        Poppins: ["Poppins", "sans-serif"],
      },
    },
  },
  plugins: [],
}
