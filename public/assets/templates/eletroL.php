<?php 
require 'template.php';


$array = array(
    "titulo" => "Eletro Light",
    "musica" => "Symbolism",
    "estilo" => "Eletrônicas",
    "artist" => "eletro-light",
    "music" => "symbolism.mp3",
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