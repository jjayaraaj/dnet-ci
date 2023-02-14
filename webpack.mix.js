// webpack.mix.js

//run npx mix watch

let mix = require("laravel-mix");

// mix.js("src/app.js", "public/js").setPublicPath("dist");
mix
  .js("src/app.js", "public/js")
  .postCss("src/app.css", "public/css", [require("tailwindcss")]);
