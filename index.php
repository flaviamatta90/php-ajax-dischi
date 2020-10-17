<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>Album PHP</title>
  </head>
  <body>
    <header>
      <div class="inside-header">
        <img class="logo" src="logo.png" alt="logo">
        <select id="author-select" class="authors" name="authors">
          <option value ="all"> ALL </option>
        </select>
      </div>
    </header>

    <main>
      <div class="inside-main"></div>
    </main>

    <script id="entry-template" type="text/x-handlebars-template">
      <div class="container-main">
        <img class="album-img" src="{{poster}}" alt="copertina">
        <h3>{{title}}</h3>
        <h4> {{author}} </h4>
        <h4> {{year}} </h4>
      </div>
    </script>
    <script id="author-template" type="text/x-handlebars-template">
      <option value="{{author}}">{{author}} </option>
    </script>


    <script src= dist/app.js type="text/javascript" charset="utf-8" async defer></script>

  </body>
</html>
