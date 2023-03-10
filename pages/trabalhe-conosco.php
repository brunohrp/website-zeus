<section id="banner">

	<div class="content">
	
		<header class="column">
			
			<h1>É a sua oportunidade de fazer parte da nossa revolução agro</h1>
			<h2>e a nossa chance de conhecer um <br> revolucionário como Você!</h2>
		
		</header>
	
	</div>

</section>
<section id="curriculum">

	<div class="content column">
	
		<h3>Envie seu <mark>currículo</mark> através do formulário abaixo.</h3>
		<form class="column">
		
			<input type="text" placeholder="Nome Completo:">
			<input type="text" placeholder="Email:">
			<div class="row">
			
				<input type="text" placeholder="Telefone:">
				<input type="text" placeholder="Whatsapp:">
			
			</div>
			<div class="column labeled">
			
				<label for="file">Anexar currículo</label>
				<label class="column">
				
					<i><?php include 'assets/svgs/send-file.svg' ?></i>
					<p>Escolher arquivo</p>
					<input type="file" id="file" hidden>
					<p></p>
				
				</label>
			
			</div>
			<button class="btn">Enviar</button>
			
		</form>
		<h4>Siga nossa pagina no <mark>LinkedIn</mark> e fique por dentro das vagas.</h4>
		<a href="#" class="linkedin"><?php include 'assets/svgs/follow-linkedin.svg' ?></a>
	
	</div>

</section>
<script>

	$(document).on('change', '#file', function(){
		
		var path = $(this).val().split('\\');
	   console.log(path);
		$(this).next().html(path[path.length - 1]);
		
	});

</script>