<?php 
require 'template.php';


$array = array(
    "titulo" => "Racionais Mc's",
    "musica" => "Estilo Cachooro",
    "estilo" => "Rap",
    "artist" => "racionais",
    "music" => "estilo_cachorro.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);