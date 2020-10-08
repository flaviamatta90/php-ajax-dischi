const $ = require("jquery");

const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax({

    "url": "http://localhost:81/php-ajax-dischi/server.php",
    "method": "GET",
    "seccess": function(data){
      var response = data.response;
      render(data);
      console.log(data.response);
    },
    "error": function(err){
      alert("Errore");
    }
  })
});


function render(server){

  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for(var i = 0; i < server.length; i++){

    var album = server[i];

    var context = {
      "poster" : album.poster,
      "title" : album.title,
      "author" : album.author,
      "year" : album.year
    };

    var html = template(context);

    $(".inside-main").append(html);
  }
};
