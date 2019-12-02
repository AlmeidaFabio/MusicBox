<?php 
require 'template.php';


$array = array(
    "titulo" => "Guns N' Roses",
    "musica" => "Sweet Child O' Mine",
    "estilo" => "Rock",
    "artist" => "guns",
    "music" => "SweetChildO'Mine.mp3",
    "texto1" => "Guns N' Roses (por vezes abreviado como G N' R ou GnR) é uma banda norte-americana de hard rock formada em Los Angeles, Califórnia, em 1985",   
    "texto2" => "A banda já lançou seis álbuns de estúdio, três EPs e um álbum ao vivo.",
    "texto3" => "A banda já vendeu mais de 100 milhões de cópias em todo o mundo, sendo cerca de 43 milhões somente nos Estados Unidos.",
    "texto4" => "O seu álbum de estreia lançado em 1987, Appetite for Destruction, vendeu cerca de 33 milhões de cópias no mundo todo, sendo certificado 18 vezes platina pela RIAA (Associação da Indústria de Gravação da América), se tornando o álbum de estreia mais vendido da história da música.",
    "texto5" => "A formação atual inclui o vocalista e pianista Axl Rose, os guitarristas Slash e Richard Fortus, o baixista Duff McKagan, o baterista Frank Ferrer e os teclistas Dizzy Reed e Melissa Reese.",
    "texto6" => "A discografia da banda consiste em cinco álbuns de estúdio, dois EP, um álbum ao vivo e três DVDs, sendo que o álbum mais recente da banda é Chinese Democracy, lançado em 2008 como primeiro trabalho com novas faixas desde The Spaghetti Incident?, de 1993.",
    "texto7" => "A banda também possui em sua discografia canções que entraram para a história do rock como Welcome to the Jungle, Paradise City, Don't Cry, Patience, November Rain e muitas outras.",
    "link" => "https://pt.wikipedia.org/wiki/Guns_N%27_Roses",
);


$tpl = new Template('template.phtml');
$tpl->render($array);