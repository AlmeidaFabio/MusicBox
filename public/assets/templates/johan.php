<?php 
require 'template.php';


$array = array(
    "titulo" => "Johan Glossner",
    "musica" => "Turn it up Ahlstrom (remix)",
    "estilo" => "Eletrônicas",
    "artist" => "johanglossner",
    "music" => "turn_it_up_ahlstrom_remix.mp3",
    "texto" => "",   
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
);


$tpl = new Template('template2.phtml');
$tpl->render($array);