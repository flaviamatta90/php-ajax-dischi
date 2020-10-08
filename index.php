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
        <select class="author-select">
          <option value="All">All</option>
          <option value="Bon Jovi">Bon Jovi</option>
          <option value="Dave Weckl">Dave Weckl</option>
          <option value="Deep Purple">Deep Purple</option>
          <option value="Eric Clapton">Eric Clapton</option>
          <option value="Iron Maiden">Iron Maiden</option>
          <option value="Metallica">Metallica</option>
          <option value="Michael Jackson">Michael Jackson</option>
          <option value="Steve Gadd band">Steve Gadd band</option>
          <option value="Sting">Sting</option>
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

    <script src= dist/app.js type="text/javascript" charset="utf-8" async defer></script>

  </body>
</html>
