<?php 
require 'template.php';


$array = array(
    "titulo" => "Metallica",
    "musica" => "Enter Sandman",
    "estilo" => "Rock",
    "artist" => "metallica",
    "music" => "EnterSandman.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);