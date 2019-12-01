<?php 
require 'template.php';


$array = array(
    "titulo" => "Pink floyd",
    "musica" => "Another Brick in the Wall",
    "estilo" => "Rock",
    "artist" => "pink floyd",
    "music" => "AnotherBrickintheWall.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);