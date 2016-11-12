$('.novidades').addClass('painel-compacto');

$('.novidades button').click(function() {
	$('.novidades').removeClass('painel-compacto');
});

$('.mais-vendidos').addClass('painel-compacto');

$('.mais-vendidos button').click(function() {
	$('.mais-vendidos').removeClass('painel-compacto');
});


//Criar dois botoes no html. Um para esconder e outro para mostrar. Aplixar lógica reversa
/*
var painel = $(".painel");
var verMais = $(".ver-mais");

function verMais(){
	painel.toogleClass('painel-compacto');
	
	if(!painel.hasClass('painel-compacto')){
		verMais.html("Ver menos");
	}
	else{
		verMais.html("Ver mais");
	}
}
*/