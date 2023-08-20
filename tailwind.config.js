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
        "primary-light": "#1278C2",
        secondary: "#F4F9FD",
        "secondary-dark": "#D8EFFF",
        content: "#414141",
        "d-yellow": "#FFC700",
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
      screens: {
        tv: "1920px",
      },
    },
  },
  plugins: [],
};
