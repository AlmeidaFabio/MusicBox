<?php 
require 'template.php';


$array = array(
    "titulo" => "Metallica",
    "musica" => "Enter Sandman",
    "estilo" => "Rock",
    "artist" => "metallica",
    "music" => "EnterSandman.mp3",
    "texto1" => "Metallica é uma banda norte-americana de heavy metal originária de Los Angeles, mas com base em San Francisco. ",   
    "texto2" => "O seu repertório inclui tempos rápidos, pesados, melódicos, instrumentais e musicalidade agressiva, a qual os colocou no lugar de pioneiros do thrash metal e uma das bandas fundadoras do Big Four of Thrash, conjuntamente com Slayer, Megadeth e Anthrax.",
    "texto3" => "O Metallica formou-se em 1981, após James Hetfield responder a um anúncio que Lars Ulrich colocou no jornal local.",
    "texto5" => "A sua formação atual apresenta os fundadores Ulrich (bateria) e Hetfield (vocal e guitarra base), o guitarrista Kirk Hammett (que se juntou à banda em 1983), e o baixista Robert Trujillo (membro desde 2003).",
    "texto4" => "Antes de chegarem à sua formação atual, a banda teve outros integrantes, sendo eles: Dave Mustaine (guitarra), Ron McGovney, Cliff Burton e Jason Newsted (baixo).",
    "texto6" => "Com os lançamentos de seus quatro primeiros álbuns, o Metallica ganhou uma crescente base de fãs na comunidade de música underground, e alguns críticos dizem que Master of Puppets (1986) é um dos álbuns de thrash metal mais influentes.",
    "texto7" => "Logo após, a banda alcançou enorme sucesso comercial com o seu álbum auto-intitulado de 1991 (também conhecido como The Black Album), que já vendeu 40 milhões de cópias pelo mundo até hoje.",
    "link" => "https://pt.wikipedia.org/wiki/Metallica",
);


$tpl = new Template('template.phtml');
$tpl->render($array);