<?php 
require 'template.php';


$array = array(
    "titulo" => "Led Zeppelin",
    "musica" => "Rock And Roll",
    "estilo" => "Rock",
    "artist" => "led zeppelin",
    "music" => "Rock And Roll.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);