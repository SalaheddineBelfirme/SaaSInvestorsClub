/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: [],
  purge: [ './resources/**/*.{vue,js,ts,jsx,tsx}'],
   darkMode: 'class', // or 'media' or 'class'
   theme: {
     extend: { 

  },
   },
   variants: {
     extend: {
     
     },
   },
   plugins: [
    require('flowbite/plugin','daisyui')
  ],
  content: [
    "./node_modules/flowbite/**/*.js",
]
 }

