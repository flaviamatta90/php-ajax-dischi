const $ = require("jquery");

const Handlebars = require("handlebars");

$(document).ready(function(){

  $.ajax(
    {
      "url": "http://localhost:82/php-ajax-dischi/server.php",
      "method": "GET",
      "success": function(data){
        render(data);
        authorSelect(data);
      },
    "error": function(err){
      alert("Errore");
    }
  });


  $('#author-select').change(function(){
    var author = $(this).val();

    $.ajax(
      {
        "url":'http://localhost:82/php-ajax-dischi/server.php',
        "data": {
          "author": author
        },
        "method":'GET',
        "success": function (data){
          render(data);
        },
        "error": function(err){
          alert("Errore");
      }
    });

  });

});

function render(data){
  $(".inside-main").html("");

  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for(var i = 0; i < data.length; i++){

    var html = template(data[i]);
    $(".inside-main").append(html);
  }
};

  function authorSelect(data){
    
    var authors = [];

    for(var i = 0; i < data.length; i++){
     var author = data[i]["author"];

     if(!authors.includes(author)){

      var source = $("#author-template").html();
      var template = Handlebars.compile(source);

      var context = {
        "author": author
    };

      var html = template(context);

      $("#author-select").append(html);
      authors.push(author);
    }
  }
}
