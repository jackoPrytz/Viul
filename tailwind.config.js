const defaultTheme = require("tailwindcss/defaultTheme");
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],

  plugins: [require("@tailwindcss/forms"),
  require('@tailwindcss/typography')],
}

