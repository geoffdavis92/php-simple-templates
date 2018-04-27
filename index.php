<?php 

include_once('./template.php');

function meta_title() { return "Simple Views Demo"; }
function page_styles() {
  return "
    body {
      color: #333;
      font-family: sans-serif;
      font-size: 20px;
    }
  ";
}
function greeting() { return 'Hello World'; }

$config_array = array(
  "meta_description" => "A demo of Geoff's simple PHP templating concept",
  "footer" => "<footer><small>&copy;2018 Geoff Davis for Archer Malmo</small></footer>"
);

render_template($config_array)
?>