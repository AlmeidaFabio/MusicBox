<?php 
require 'template.php';


$array = array(
    "titulo" => "Syn Cole",
    "musica" => "Feel Good",
    "estilo" => "Eletrônicas",
    "artist" => "sin cole",
    "music" => "Feel_Good.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);