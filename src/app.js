const $ = require('jquery');
const Handlebars = require('handlebars');

$( document ).ready(function() {
  $.getJSON("get_homepage.php", processRooms);
});

function processRooms (data, status, xhr){

console.log(data);
}
