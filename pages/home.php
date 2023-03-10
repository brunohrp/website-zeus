<section id="banner">

	<div class="content">
	
		<header class="column">
			
			<h1>Produzir mais e melhor está literalmente em suas mãos.</h1>
			<h2>Basta conhecer o panorama hídrico da sua fazenda.</h2>
			<a href="#" class="btn">Entre em contato</a>
		
		</header>
	
	</div>

</section>
<section id="centered" class="column">

	<header class="grid content scrollSnap">

		<h3>INTELIGÊNCIA <mark>MICROCLIMÁTICA</mark> EM TEMPO REAL PARA A SUA <mark>TOMADA DE DECISÃO.</mark></h3>
		<img src="<?=BASE?>/assets/images/home/centered_header_1.png">
		<img src="<?=BASE?>/assets/images/home/centered_header_2.png">
		<h4>Uma solução de <mark>agricultor para agricultor.</mark></h4>

	</header>
	<section id="understandWater" class="column">
	
		<h3 class="content">O que significa entender a <br> água na sua fazenda.</h3>
		<wm-slider>
		
			<wm-slider-mat>
			
				<?php for($i = 0; $i < 15; $i++): ?>
				<wm-slider-row>
				
					<article class="column">
					
						<i><?php include 'assets/svgs/understand_water/ground.svg' ?></i>
						<h5>Tipo de solo</h5>
						<p>Os tipos de solo são muito diferentes ao longo da propriedade, e sua capacidade de retenção de água afeta diretamente o desenvolvimento da plantação.</p>
					
					</article>
				
				</wm-slider-row>
				<?php endfor; ?>
			
			</wm-slider-mat>
			<wm-slider-controls>
			
				<wm-slider-trigger slide-to="left"><?php include 'assets/svgs/left-arrow.svg' ?></wm-slider-trigger>
				<wm-slider-trigger slide-to="right"><?php include 'assets/svgs/right-arrow.svg' ?></wm-slider-trigger>
			
			</wm-slider-controls>
		
		</wm-slider>
		<a href="#" class="btn">Entre em contato</a>
		
	</section>
	<section id="video" class="content row scrollSnap">
	
		<div class="text column">
		
			<p>Nossa solução de coleta de dados conta com <mark>pluviômetros digitais, mapas de chuva e calor, condições de vento e previsão microclimática em rede.</mark></p>
			<h3>Alertas de <mark>riscos</mark> e <mark>recomendações para a execução de processos</mark> operacionais.</h3>
		
		</div>
		<img src="<?=BASE?>/assets/images/home/video-thumb.jpg">
		
	</section>
	
</section>
<section id="info">

	<?php
	
		$infos = array(

			array(
			
				'icon' => 'if-rain.svg',
				'title' => 'Saiba se choveu'
			
			),
			array(
			
				'icon' => 'rain-amount.svg',
				'title' => 'Quanto choveu',
				'dialog' => 'rainAmount'
			
			),
			array(
			
				'icon' => 'target.svg',
				'title' => 'Onde Choveu'
			
			),
			array(
			
				'icon' => 'rain-radar.svg',
				'title' => 'Previsão',
				'description' => '10 dias <br> 4 semanas <br> 5 meses'
			
			),
			array(
			
				'icon' => 'storm-alert.svg',
				'title' => 'Alerta de enxurrada'
			
			),
			array(
			
				'icon' => 'thermometer.svg',
				'title' => 'Temperatura'
			
			),
			array(
			
				'icon' => 'thermovariation.svg',
				'title' => 'Variação de temperatura'
			
			),
			array(
			
				'icon' => 'wind-speed.svg',
				'title' => 'Velocidade do vento'
			
			),
			array(
			
				'icon' => 'wind-direction.svg',
				'title' => 'Direção do vento'
			
			),
			array(
			
				'icon' => 'frost-alert.svg',
				'title' => 'Alerta de geada'
			
			),
			array(
			
				'icon' => 'solar-incidence.svg',
				'title' => 'Incidência solar'
			
			),
			array(
			
				'icon' => 'relative-humidity.svg',
				'title' => 'Umidade relativa do ar'
			
			),
			array(
			
				'icon' => 'hidro-balance.svg',
				'title' => 'Balanço hídrico'
			
			),
			array(
			
				'icon' => 'window-pulverization-alert.svg',
				'title' => 'Alerta de janela pulverização'
			
			),
			array(
			
				'icon' => 'summer-alert.svg',
				'title' => 'Alerta de veranico'
			
			),
			array(
			
				'icon' => 'fire-alert.svg',
				'title' => 'Alerta de incendio'
			
			),
			array(
			
				'icon' => 'fire-alert.svg',
				'title' => 'Alerta de incendio'
			
			),
			array(
			
				'icon' => 'fire-alert.svg',
				'title' => 'Alerta de incendio'
			
			),
			array(
			
				'icon' => 'fire-alert.svg',
				'title' => 'Alerta de incendio'
			
			),
			array(
			
				'icon' => 'fire-alert.svg',
				'title' => 'Alerta de incendio'
			
			),

		);
	
	?>
	
	<div class="content grid">
	
		<h3>Essas são algumas das informações à que <br> você tem acesso</h3>
		<?php foreach($infos as $info): ?>
		
			<?php if(isset($info['dialog'])): ?>		
			<dialog class="column" id="<?=$info['dialog']?>">

				<header class="column">
				
					<div class="row">
					
						<i><?php include 'assets/svgs/info/'.$info['icon'] ?></i>
						<button><?php include 'assets/svgs/close-icon.svg' ?></button>
					
					</div>
					<h5><?=$info['title']?></h5>
					<p>Lorem ipsum dolor sit amet consectetur. Ut congue nunc egestas aliquam nibh nisl vitae senectus.</p>
					
				</header>
				<div class="grid body">
				
					<p>Lorem ipsum dolor sit amet consectetur. Integer egestas amet enim sed est pellentesque fringilla consectetur. Felis ultricies fringilla consequat turpis purus mattis quis. Semper interdum ullamcorper est at netus sit sed. Posuere euismod lacus tellus vel sed ut molestie sem. Nunc sit eget venenatis malesuada ornare nisl leo ridiculus. Sollicitudin placerat urna turpis pellentesque luctus et tellus. At urna feugiat phasellus quam tortor orci imperdiet tellus est. Imperdiet vulputate erat tortor dignissim ipsum nulla libero vel vel. Pellentesque quam purus vitae consequat. Enim malesuada mauris vitae amet in vel interdum in. Ante porttitor feugiat malesuada magna condimentum egestas. <br><br> Urna ornare diam aenean a magna vel magna. Cursus porttitor bibendum eleifend in maecenas id velit mollis. Ultricies tristique ac eu ipsum pretium velit faucibus blandit. Sed tellus lacinia integer amet ut ultrices ipsum eget ultrices. Condimentum varius nunc aliquet justo ut. Penatibus suscipit in maecenas et. Malesuada sem mauris fringilla non elementum quam viverra et volutpat.</p>
					<img src="">
				
				</div>
				<button class="btn">Entendi</button>
				
			</dialog>		
			<?php endif; ?>
			<article class="column accentBg" <?php if(isset($info['dialog'])) echo 'data-dialog="'.$info['dialog'].'"'; ?>>
		
				<i><?php include 'assets/svgs/info/'.$info['icon'] ?></i>
				<header class="column">
					
					<h5><?=$info['title']?></h5>
					<?php if(isset($info['description'])) echo '<p>'.$info['description'].'</p>'; ?>
				
				</header>
		
			</article>
		
		<?php endforeach; ?>
		
	</div>
		
</section>
<section id="howTo" class="scrollSnap">

	<div class="content grid">
	
		<div class="text column">
		
			<h3><mark>Como fazemos <br> o que fazemos?</mark></h3>
			<p>Ou o que torna <br> tudo isso possível?</p>
			<wm-slider>
			
				<wm-slider-mat>
				
					<?php for($i = 0; $i < 4; $i++): ?>
					<wm-slider-row>
					
						<article class="column accentBg">
						
							<h5>COLETA <br> DE DADOS</h5>
							<p>A PIC (Plataforma Inteligente de Coleta) realiza leitura de chuvas em tempo real registrando quando, quanto e onde choveu. Registra também a velocidade e direção do vento, temperatura e umidade relativa do ar, radiação solar e umidade do solo, calculando a evapotranspiração. <br><br> Possibilita ter alertas configuráveis via SMS e Push do App.</p>
						
						</article>
					
					</wm-slider-row>
					<?php endfor; ?>
				
				</wm-slider-mat>
				<wm-slider-controls class="grid">
				
					<div class="row dots">
					
						<?php for($i = 0; $i < 4; $i++): ?>

							<wm-slider-trigger slide-to="<?=$i?>"></wm-slider-trigger>

						<?php endfor; ?>
						
					</div>
					<wm-slider-trigger slide-to="left" class="material-symbols-outlined">arrow_back</wm-slider-trigger>
					<wm-slider-trigger slide-to="right" class="material-symbols-outlined">arrow_forward</wm-slider-trigger>
				
				</wm-slider-controls>
				
			</wm-slider>
		
		</div>
	
	</div>

</section>
<section id="dataCollection">

	<?php
	
		$articles = array(
		
			array(
			
				'icon' => 'four-g.svg',
				'text' => 'Comunicação via satélite, 3G ou 4G.'
			
			),
			array(
			
				'icon' => 'easy-info.svg',
				'text' => 'Dados e informações descomplicadas, diretas e claras.'
			
			),
			array(
			
				'icon' => 'productivity-gain.svg',
				'text' => 'Foco em ganho de produtividade e redução de perdas, custos e desperdícios.'
			
			),
			array(
			
				'icon' => 'maintenance.svg',
				'text' => 'Suporte de profissionais especializados no clima da sua propriedade.'
			
			),
			array(
			
				'icon' => 'in-hand-info.svg',
				'text' => 'Tenha todas as informações importantes de sua propriedade na palma da sua mão.'
			
			)
		
		);
	
	?>	
	<div class="content column">
	
		<h3>Minimize riscos com o apoio de coleta de dados <br> e previsões microclimáticas.</h3>
		<div class="row">
		
			<?php foreach($articles as $article): ?>
			<article class="column accentBg">
			
				<i><?php include 'assets/svgs/data_collection/'.$article['icon'] ?></i>
				<h5><?=$article['text']?></h5>
			
			</article>
			<?php endforeach; ?>
		
		</div>
	
	</div>

</section>
<section id="results">

	<div class="content column">
	
		<h3>Com o uso da nossa rede de <mark>7.000 hectares monitorados</mark> no Brasil, nossos clientes têm tido resultados significativos em seus negócios.</h3>
		<div class="column">
		
			<div class="grid" style="--bg-color: #0058B8">
			
				<p>Saber quando e em qual talhão soltar o plantio, evitando o replantio.</p>
				<i><?php include 'assets/svgs/results/where-to-plant.svg' ?></i>
			
			</div>
			<div class="grid" style="--bg-color: #FF6620">
			
				<p>Soltar aplicações em áreas com condições ideais, evitando assim desperdícios.</p>
				<i><?php include 'assets/svgs/results/ideal-conditions.svg' ?></i>
			
			</div>
			<div class="grid" style="--bg-color: #809B4C">
			
				<p>Otimizar operação direcionando a frente de colheita para as áreas com melhores cenários.</p>
				<i><?php include 'assets/svgs/results/tractor.svg' ?></i>
			
			</div>
			<div class="grid" style="--bg-color: #45683D">
			
				<p>Eliminar grande parte das rotas e trabalhos manuais relacionados à checagem de dados.</p>
				<i><?php include 'assets/svgs/results/data.svg' ?></i>
			
			</div>
		
		</div>
		
	</div>

</section>
<section id="depositions" class="full column accentBg scrollSnap">

	<h3>Confira a história dos nossos clientes.</h3>
	<wm-slider class="grid">
	
		<wm-slider-controls>
		
			<wm-slider-trigger slide-to="left" class="material-symbols-outlined"><?php include 'assets/svgs/left-arrow.svg' ?></wm-slider-trigger>
		
		</wm-slider-controls>
		<wm-slider-mat>
		
			<?php for($i = 0; $i < 3; $i++): ?>
			<wm-slider-row>
			
				<article class="column">
				
					<header class="row">
					
						<img src="<?=BASE?>/assets/images/home/depositions/profile-img.png" alt="">
						<div class="title column">
						
							<h5>Nome Completo</h5>
							<h6>subtítulo</h6>
						
						</div>
						
					</header>
					<p>
						Lorem ipsum dolor sit amet consectetur. Magna diam consectetur amet commodo. Orci at egestas ac a in purus et amet. Morbi aliquam quam sit odio egestas suscipit consequat duis nec. Dui eu duis augue velit eget tristique.
						<br>
						Netus non lectus praesent porta a. At cursus quis dignissim egestas. Facilisis purus pretium amet vitae magna tincidunt. Ut imperdiet morbi malesuada habitant diam euismod ac facilisis orci. Duis libero ut curabitur					
					</p>
				
				</article>
			
			</wm-slider-row>
			<?php endfor; ?>
		
		</wm-slider-mat>
		<wm-slider-controls>
		
			<wm-slider-trigger slide-to="right" class="material-symbols-outlined"><?php include 'assets/svgs/right-arrow.svg' ?></wm-slider-trigger>
		
		</wm-slider-controls>
	
	</wm-slider>

</section>
<section id="blogArticles" class="full column accentBg">

	<h3>Confira a história dos nossos clientes.</h3>
	<wm-slider class="grid">
	
		<wm-slider-controls>
		
			<wm-slider-trigger slide-to="left" class="material-symbols-outlined"><?php include 'assets/svgs/left-arrow.svg' ?></wm-slider-trigger>
		
		</wm-slider-controls>
		<wm-slider-mat>
		
			<?php for($i = 0; $i < 3; $i++): ?>
			<wm-slider-row>
			
				<article class="column">
				
					<img src="<?=BASE?>/assets/images/home/blog_articles/article-thumb.jpg">
					<h5>APM Agro & Zeus | Juntos Movemos o Agro - Casos de Sucesso</h5>
				
				</article>
			
			</wm-slider-row>
			<?php endfor; ?>
		
		</wm-slider-mat>
		<wm-slider-controls>
		
			<wm-slider-trigger slide-to="right" class="material-symbols-outlined"><?php include 'assets/svgs/right-arrow.svg' ?></wm-slider-trigger>
		
		</wm-slider-controls>
	
	</wm-slider>

</section>
<section id="partners" class="column accentBg full">
	
	<h3>Parcerias valiosas para nós</h3>
	<div class="scrollWrap">

		<div class="scrollMat grid">

			<?php for($i = 0; $i < 20; $i++): ?>
			<span class="material-symbols-outlined">star</span>
			<?php endfor; ?>

		</div>

	</div>
	
</section>
<section id="blog">

	<div class="content column">
	
		<div class="row blog">
		
			<div class="column">
			
				<h3><mark>ZEUS <br> BLOG</mark></h3>
				<div class="column scroll">
				
					<?php for($i = 0; $i < 5; $i++): ?>
					<img src="<?=BASE?>/assets/images/home/blog_thumb/small.png">
					<?php endfor; ?>
					
				</div>
			
			</div>
			<img src="<?=BASE?>/assets/images/home/blog_thumb/big1.png">
			<img src="<?=BASE?>/assets/images/home/blog_thumb/big2.png">
			
		</div>
		<section id="followUs" class="row">
		
			<div class="instaBox column">
			
				<h5>Siga a Zeus no instagram</h5>
				<i><?php include 'assets/svgs/instagram.svg' ?></i>
				<a href="#" class="btn" target="_blank">Acessar agora</a>
			
			</div>
			<div class="grid">
			
				<?php
			
					$instaImgs = array_diff(scandir('assets/images/home/follow_us'), array('..', '.'));
				 	foreach($instaImgs as $img):
				
				?>				
				<img src="<?=BASE?>/assets/images/home/follow_us/<?=$img?>">
				<?php endforeach; ?>
			
			</div>
		
		</section>
		
	</div>

</section>
<section id="contact">

	<form class="content column accentBg">
	
		<h3><mark>ENTRE EM <br> CONTATO</mark></h3>
		<p>Estamos aqui <br> para atender você.</p>
		<div class="row">
		
			<div class="column">
			
				<label for="name">Nome</label>
				<input type="text" id="name" placeholder="Seu nome">
			
			</div>
			<div class="column">
			
				<label for="sirname">Sobrenome</label>
				<input type="text" id="sirname" placeholder="Seu sobrenome">
			
			</div>
		
		</div>
		<div class="row">
		
			<div class="column">
			
				<label for="mail">Email</label>
				<input type="email" id="mail" placeholder="Seu melhor email">
			
			</div>
			<div class="column">
			
				<label for="phone">Telefone</label>
				<input type="tel" id="phone" placeholder="Seu telefone">
			
			</div>
		
		</div>
		<div class="column">

			<label for="message">Mensagem</label>
			<textarea id="message" placeholder="Deixe, aqui, sua mensagem"></textarea>

		</div>
		<button class="btn">Enviar</button>
	
	</form>

</section>