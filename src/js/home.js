//boas vindas
let diaNome = '';

switch (new Date().getDay()) { //exemplo de uso do switch
	case 0:
		diaNome = 'Domingo';
		break;
	case 1:
		diaNome = 'Segunda-Feira';
		break;
	case 2:
		diaNome = 'Terça-Feira';
		break;
	case 3:
		diaNome = 'Quarta-Feira';
		break;
	case 4:
		diaNome = 'Quinta-Feira';
		break;
	case 5:
		diaNome = 'Sexta-Feira, SEXTOU!!!'
		break;
	case 6:
		diaNome = 'Sábado, Bom fim de semana!!!';
		break;

	default:
		diaNome = 'Erro ao determinar o dia da semana';
};

document.getElementById("welcome").innerHTML = "Bem Vindo(a), hoje é"+" "+diaNome;


//menu
let menuArea = document.getElementById("menu-area");

function menuToggle() {

	if (menuArea.style.width == '0px') {
		menuArea.style.width = '260px';
	} else {
		menuArea.style.width = '0px';
	}
};