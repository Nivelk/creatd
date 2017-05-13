// inicio funcinalidade do menu
$(function(){
	$('.menu-mobile').click(function(){
		$('.fundo-menu').slideToggle(200);
	});
	$('.fechar').click(function(){
		$('.fundo-menu').slideToggle();	
	});
	
	$('.1').click(function(){
		$('.2').hide();
		$('.1').hide();
		$('.3').hide();
		$('.conteudo').slideToggle('fast');
	});
	
	$('.2').click(function(){
		$('.2').hide();
		$('.1').hide();
		$('.3').hide();
		$('.conteudo').slideToggle('fast');
	});
	
	$('.3').click(function(){
		$('.2').hide();
		$('.1').hide();
		$('.3').hide();
		$('.conteudo').slideToggle('fast');
	});
	$('.bt-login').click (function(){
		$('.fundo').toggle();
		$('.login').show();
	});
	
	$('.fechar2').click (function(){
		$('.conteudo').hide();
		$('.1').show();
		$('.2').show();
		$('.3').show();
	});
	$('.fundo').click(function(){
		$('.fundo').hide();		
		$('.login').hide();		
	});
	
	$('.cadastrase-bt').click(function(){
		
		$('.fundo').show();
		$('.form-cadastro').show();
		
	});
	
	$('.cadastrase').click(function(){
		$('.login').hide();
		$('.cadastro').show();
		$('.form-cadastro').show();
		
	});
	$('.fundo').click(function(){
		$('.cadastro').hide();		
		$('.form-cadastro').hide();				
	});
	
	var tela = $(window).height();
	$('.banner').css({"height": tela+"px"});
	
	var tela = $(window).height();
	$('.sub-opcao').css({"height": tela+"px"});
	
	
	
	
	
	$('.bt-cadastrar-preco').click(function(){
		$('.form-configurar-produto').fadeIn(1000);
		
		$('.form-produto').hide();
		$('.form-produto').hide();
		$('.form-configuracao-produto').show();
		$('.bt-cadastrar').hide();
		$('.bt-cadastrar-preco').hide();
	});
	
	
	$("#meuspedidos").click(function(){
		$(".bemvindo").hide();
		$(".monitoramento").hide();
		$(".configuracao").hide();
		//abre pedidos
		$(".pedidos").fadeIn(800);
	});
	
	$("#configuracaoconta").click(function(){
		$(".bemvindo").hide();
		$(".monitoramento").hide();
		$(".pedidos").hide();
		//abre configuração de conta
		$(".configuracao").fadeIn(800);
	});
	
	$("#monitoramentopedido").click(function(){
		$(".bemvindo").hide();
		$(".configuracao").hide();
		$(".pedidos").hide();
		//abre configuração de conta
		$(".monitoramento").fadeIn(800);
	});
	
	
	
	
	
	
});

//fim funcionalidade menu
