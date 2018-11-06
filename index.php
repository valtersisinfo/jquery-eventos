<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eventos JQuery</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf-8" async defer>
		$(document).ready(function()
		{
			// Seletor e evento para descobrir a ordem
			$('#seletor').on('mouseenter',function(){
				$('#evento').append(' mouseenter');
			});
			$('#seletor').on('mouseover',function(){
				$('#evento').append(' mouseover');
			});
			$('#seletor').on('mousemove',function(){
				$('#evento').append(' mousemove');
			});
			$('#seletor').on('mouseleave',function(){
				$('#evento').append(' mouseleave');
			});
			$('#seletor').on('mouseout',function(){
				$('#evento').append(' mouseout');
			});
			$('#seletor').on('mousedown',function(){
				$('#evento').append(' mousedown');
			});
			$('#seletor').on('mouseup',function(){
				$('#evento').append(' mouseup');
			});
			$('#seletor').on('click',function(){
				$('#evento').append(' click');
			});
			$('#seletor').on('focusin',function(){
				$('#evento').append(' focusin');
			});
			$('#seletor').on('focus',function(){
				$('#evento').append(' focus');
			});
			$('#seletor').on('keydown',function(){
				$('#evento').append(' keydown');
			});
			$('#seletor').on('keypress',function(){
				$('#evento').append(' keypress');
			});
			$('#seletor').on('keyup',function(){
				$('#evento').append(' keyup');
			});
			$('#seletor').on('change',function(){
				$('#evento').append(' change');
			});
			$('#seletor').on('focusout',function(){
				$('#evento').append(' focusout');
			});
			$('#seletor').on('blur',function(){
				$('#evento').append(' blur');
			});
			$('#seletor').on('dblclick',function(){
				$('#evento').append(' dblclick');
			});
			// Normalmente é utilizado desta forma
			$(window).on('resize',function(){
				$('#evento').append(' resize');
			});
			// Função do botão para limpar o textarea
			$('#limpar').on('click',function(){
				$('#evento').html('');
			});

			/*
				A ordem exata é

					Começo
						mouseenter mouseover mousemove mousedown
							ou
						focusin focus

					Meio
						keyup keydown keypress keyup keydown change
							ou
						mouseup click mousedown mouseup click dblclickdblclick mousemove mouseleave mouseout

					Fim
						focusout blur
			 */

		});
	</script>

	<style type="text/css" media="screen">
		body{
			margin:6px;margin-right:12px;padding:0px;
		}

		#seletor{
			resize:none;width:100%;height:50px;
		}

		#seletor:hover{
			border: solid 1px red;
		}

		#evento{
			resize:none;width:100%;height:200px;
		}
	</style>
</head>
<body>

	<ul>
		<li>Ordem dos eventos por Mouse e Teclado:</li>
		<ol>
			<li>Mouse (entra > duplo clique > sai): mouseenter mouseover mousemove mousedown focusin focus mouseup click mousedown mouseup click dblclick mousemove mouseleave mouseout focusout blur</li>
			<li>Teclado (tab > a > tab): focusin focus keyup keydown keypress keyup keydown change focusout blur</li>
		</ol>
	</ul>

	<textarea id="seletor"></textarea>
	<textarea id="evento" disabled></textarea>
	<button id="limpar" type="button">Limpar</button>

</body>
</html>