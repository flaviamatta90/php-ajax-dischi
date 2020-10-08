const $ = require("jquery");

const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax({

    "url": "http://localhost:81/server.php",
    "method": "GET",
    "seccess": function(data){
      render(data);
    },
    "error": function(err){
      alert("Errore");
    }
  })
});


var source = $("#entry-template").html();
var template = Handlebars.compile(source);

var context = {
  


 };
var html = template(context);
