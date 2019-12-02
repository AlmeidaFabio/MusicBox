<?php 
require 'template.php';


$array = array(
    "titulo" => "Kozah",
    "musica" => "Heavens",
    "estilo" => "Eletrônicas",
    "artist" => "kozah",
    "music" => "kozah_heavens.mp3",
    "texto" => "",   
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
);


$tpl = new Template('template.phtml');
$tpl->render($array);