/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#0E619D",
        secondary: "#D8EFFF",
        content: "#414141",
        "d-yellow": "FFC700",
      },
      fontFamily: {
        poppins: ["Poppins"],
        opensans: ["Open Sans", "sans-serif"],
      },
      fontSize: {
        display1: [
          "2.813rem",
          {
            lineHeight: "2.5rem",
          },
        ],
      },
    },
  },
  plugins: [],
};
