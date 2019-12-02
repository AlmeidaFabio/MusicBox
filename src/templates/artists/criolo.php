<?php 
require 'template.php';


$array = array(
    "titulo" => "Criolo",
    "musica" => "Subirusdoistiozin",
    "estilo" => "Rap",
    "artist" => "criolo",
    "music" => "subirusdoistiozin.mp3",
    "texto1" => "Kleber Cavalcante Gomes (São Paulo, 5 de setembro de 1975)",
    "texto2" => "mais conhecido sob o nome artístico de Criolo ou, anteriormente, Criolo Doido",
    "texto3" => "é um cantor, rapper, compositor, professor e ator brasileiro, indicado ao Grammy Latino de 2019.",
    "texto4" => "Criolo começou a participar de disputas de rap em 1989, sendo que em 2004 começou a publicar gravações caseiras de suas músicas em sua página no Myspace.",
    "texto5" => "Em 2006, lançou seu primeiro álbum de estúdio, intitulado Ainda Há Tempo.",
    "texto6" => "Ainda em 2006, fundou a Rinha dos MC's, existente até hoje.",
    "texto7" => "Ela abriga batalhas de freestyle, shows semanais, exposições de graffitti e fotografias.",
    "link" => "https://pt.wikipedia.org/wiki/Criolo_(cantor)"
);



$tpl = new Template('template.phtml');
$tpl->render($array);
