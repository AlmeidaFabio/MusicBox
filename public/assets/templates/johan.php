<?php 
require 'template.php';


$array = array(
    "titulo" => "Johan Glossner",
    "musica" => "Turn it up Ahlstrom (remix)",
    "estilo" => "Eletrônicas",
    "artist" => "johan glossner",
    "music" => "turn_it_up_ahlstrom_remix.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);