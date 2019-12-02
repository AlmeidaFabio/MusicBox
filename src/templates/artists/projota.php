<?php 
require 'template.php';


$array = array(
    "titulo" => "Projota",
    "musica" => "Muleque de vila (ao vivo)",
    "estilo" => "Rap",
    "artist" => "projota",
    "music" => "muleque_de_vila_ao_vivo.mp3",
    "texto1" => "José Tiago Sabino Pereira (São Paulo, 11 de abril de 1986)",   
    "texto2" => "mais conhecido pelo nome artístico Projota, é um rapper, compositor e ator brasileiro.",
    "texto3" => "Projota perdeu a mãe cedo: quando o filho tinha apenas sete anos de idade, Dirce Sabino Pereira teve um AVC, permanecendo em estado vegetativo durante cerca de dois anos, quando morreu.",
    "texto4" => "Atribui o gosto pela música à mãe, que, além de cantar, chegou a atuar, escrever e compor",
    "texto5" => "Seu primeiro nome artístico foi JT, mas como existiam muitos com o mesmo pseudônimo, decidiu por Projota.",
    "texto6" => "O nome Projota é a junção de pro = profissionalismo e Jota, inicial do seu primeiro nome.",
    "texto7" => "Em 2006, Projota ingressou pela primeira vez em uma batalha de MC. Conseguiu vencer por quatro vezes a Batalha do Santa Cruz, três a Rinha dos MCs e chegou à final da Liga dos MCs de 2007, o evento mais tradicional do estilo no país.",
    "link" => "https://pt.wikipedia.org/wiki/Projota"
);


$tpl = new Template('template.phtml');
$tpl->render($array);