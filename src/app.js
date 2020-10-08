const $ = require("jquery");

const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax({

    "url": "http://localhost:81/php-ajax-dischi/server.php",
    "method": "GET",
    "success": function(data){
      render(data);
    },
    "error": function(err){
      alert("Errore");
    }
  });

$('.author-select').change(function(){
  var author = $(this).val();
  console.log(author);

  $.ajax(
    {
      "url":'http://localhost:88/php-ajax-dischi/server.php',
      "method":'GET',
      "data": {
        author: author
      },
      "success": function (data){
        render(data);
      },
      "error": function(err){
        alert("Errore");
      }
    });
  });

});


function render(result){

  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for(var i = 0; i < result.length; i++){
    if (result.length > 0) {
      var album = result[i];

      var context = {
        "poster" : album.poster,
        "title" : album.title,
        "author" : album.author,
        "year" : album.year
      };

      var html = template(context);

      $(".inside-main").append(html);
    }
  }
};
