/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            sblack:'#333333',
            syellow: '#FFED00',
            syellowinv: '#eada0b',
            slgray: '#F5F5F5',
            sgray: '#B4C5C5'
        },

        fontSize: {
            normal: ['14px', '18px'],
            midi: ['12px', '16px'],
            min: ['10px', '14px'],
        },

        fontFamily: {
            sans: ['"Source Sans 3"', 'sans-serif'],
        },
    },
  },
  plugins: [],
}
