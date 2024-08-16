/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors:{
            "Ocbrow": "RGB(205, 117, 14)"
        }
    },
  },
  plugins: [],
}

