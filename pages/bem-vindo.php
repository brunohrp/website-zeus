<section id="onboarding">

	<div class="content column">
	
		<img src="<?=BASE?>/assets/images/onboarding/onboarding.png" alt="Onboarding ZEUS">
		<h1>BEM VINDOS AO <mark>ONBOARDING</mark> ZEUS!</h1>
	
	</div>

</section>
<section id="integration">

	<div class="content grid">
	
		<h3>Separamos esse espaço para que você <mark>encontre as informações</mark> que te ajudarão no processo <mark>de integração</mark></h3>
	
	</div>

</section>
<section id="meeting">

	<div class="content column">
	
		<header class="grid">
		
			<div class="column">
			
				<h3><mark>CONHECENDO A ZEUS</mark></h3>
				<p>Empresa de gestão meteorológica fundada em 2016 que atua no setor Agro oferecendo soluções que garantam valor para o agricultor de maneira sustentável e inovadora. <br><br> Desvendamos as chuvas e criamos juntos a maior rede colaborativa da Agricultura Brasileira.</p>
			
			</div>
			<i class="logo"><?php include 'assets/svgs/logo.svg' ?></i>
		
		</header>
		<article class="diferentials grid">
		
			<h5><mark>NOSSOS DIFERENCIAIS</mark></h5>
			<article class="column accentBg iconed">

				<i><?php include 'assets/svgs/like.svg' ?></i>
				<h5><mark>SATISFAÇÃO <br> GARANTIDA</mark></h5>
				<p>Diferenciar-se por meio da qualidade dos serviços e relacionamento com o cliente.</p>

			</article>
			<article class="column accentBg iconed">

				<i><?php include 'assets/svgs/inovacao.svg' ?></i>
				<h5><mark>INOVAÇÃO</mark></h5>
				<p>Praticar a inovação como instrumento de garantia da perenidade.</p>

			</article>
			<article class="column accentBg iconed">

				<i><?php include 'assets/svgs/specific.svg' ?></i>
				<h5><mark>PRODUTO ÚNICO <br> E ESPECÍFICO</mark></h5>
				<p>Promover uma solução integrada, que vai do desenvolvimento do produto ao serviço. Da estação meteorológica, PIC Plataforma Inteligente de Coleta ao processamento dos dados</p>

			</article>
		
		</article>
		
	</div>

</section>
<section id="addresses">

	<div class="content grid">
	
		<h3><mark>ONDE ESTAMOS?</mark></h3>
		<a href="#">
		
			<article class="accentBg column">

				<h5><mark>SEDE</mark></h5>
				<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/addresses/location01.jpg">
				<address>Av. Princesa Isabel, 275 Centro - Uberlândia/MG</address>

			</article>
			
		</a>
		<a href="#">
		
			<article class="accentBg column">

				<h5><mark>INDÚSTRIA</mark></h5>
				<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/addresses/location02.jpg">
				<address>Rua Venezuela, 777 Tibery - Uberlândia/MG</address>

			</article>
			
		</a>
	
	</div>

</section>
<section id="onboardingSlider" class="grid">

	<?php
	
		$contacts = array(

			array(
				'h5' => 'LISTA DE CONTATOS',
				'p' => 'Tenha acesso a lista de contatos de cada área, caso precise de mais informações você pode entrar em contato direto.'
			),
			array(
				'h5' => 'BENEFÍCIOS',
				'p' => 'Conheça os benefícios que a Zeus fornece para seus colaboradores.'
			),
			array(
				'h5' => 'TANGERINO',
				'p' => 'Dúvidas com relação a controle de jornada e como bater seu ponto? Conheça o Tangerino.'
			),
			array(
				'h5' => 'MÍDIA KIT',
				'p' => 'Acesse a pasta clicando no botão abaixo, e baixe o wallpaper e a capa da Zeus para o LinkedIn.'
			),
			array(
				'h5' => 'CONVÊNIA',
				'p' => 'Para colaboradores CLT, o acesso ao holerite, solicitação de férias e atualizações de dados pessoais são feitos através do CONVÊNIA.'
			),

		)
	
	?>
	
	<div class="column">

		<h3><mark>MATERIAL DE APOIO</mark></h3>
		<wm-slider class="column">

			<wm-slider-mat>

				<?php foreach($contacts as $contact): ?>
				<wm-slider-row>

					<article class="accentBg column">

						<h5><mark><?=$contact['h5']?></mark></h5>
						<p><?=$contact['p']?></p>
						<a href="#" class="btn">Saiba mais</a>

					</article>

				</wm-slider-row>
				<?php endforeach; ?>

			</wm-slider-mat>
			<wm-slider-controls>

				<wm-slider-trigger slide-to="left"><?php include 'assets/svgs/left-arrow.svg' ?></wm-slider-trigger>
				<wm-slider-trigger slide-to="right"><?php include 'assets/svgs/right-arrow.svg' ?></wm-slider-trigger>

			</wm-slider-controls>

		</wm-slider>
	
	</div>

</section>
<section id="purpose">

	<div class="content column">
	
		<h3>NOSSO PROPÓSITO</h3>
		<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/purpose.jpg" alt="Acreditamos que quem abastece o mundo não pode parar">
		<div class="grid">
		
			<article class="column accentBg iconed">

				<i><?php include 'assets/svgs/missao.svg' ?></i>
				<h5><mark>MISSÃO</mark></h5>
				<p>“Acreditamos que quem abastece o mundo não pode parar.” <br> Colocamos o produtor sempre em primeiro lugar, somos seu parceiro estratégico fornecendo informações valiosas para a melhor tomada de decisão, visando a maximização dos resultados da sua fazenda.</p>

			</article>
			<article class="column accentBg iconed">

				<i><?php include 'assets/svgs/visao.svg' ?></i>
				<h5><mark>VISÃO</mark></h5>
				<p>“Criar o futuro da agricultura lado a lado com o agricultor, suprindo-o sempre com tecnologia de ponta e informações de qualidade para a melhor tomada de decisão na sua fazenda.”</p>

			</article>
			<article class="column accentBg iconed">

				<i><?php include 'assets/svgs/valores.svg' ?></i>
				<h5><mark>VALORES</mark></h5>
				<p>Paixão, Integridade, Ética e Transparência, Humildade, Responsabilidade Social</p>

			</article>
		
		</div>
	
	</div>

</section>
<section id="deliver">

	<div class="content grid">
	
		<h3>Conheça a entrega de valor de cada área do negócio.</h3>
		<article class="column longWhiteCard">
		
			<div class="thumb"><img src="<?=BASE?>/assets/images/onboarding/bem-vindo/article-thumb.png"></div>
			<h5><mark>COMERCIAL</mark></h5>
			<h6><mark>MISSÃO</mark></h6>
			<p>Oferecer a melhor solução agrometeorológica para os agricultores auxiliando-os nas melhores tomadas de decisões para produzir com maior eficiência e sustentabilidade.</p>
			
		</article>
		<article class="column longWhiteCard">
		
			<div class="thumb"><img src="<?=BASE?>/assets/images/onboarding/bem-vindo/article-thumb.png"></div>
			<h5><mark>TECNOLOGIA E OPERAÇÕES</mark></h5>
			<h6><mark>MISSÃO</mark></h6>
			<p>Desenvolver Soluções Disruptivas de Hardware e Software, sempre com foco na qualidade, resiliência, experiencia do usuário e custo/prazo adequados, gerando valor para sua atividade agrícola.</p>
			
		</article>
		<article class="column longWhiteCard">
		
			<div class="thumb"><img src="<?=BASE?>/assets/images/onboarding/bem-vindo/field-service.png"></div>
			<h5><mark>SUCESSO DO CLIENTE E FIELD SERVICE</mark></h5>
			<h6><mark>MISSÃO</mark></h6>
			<p>Encantar, Fidelizar e ser a voz do cliente na companhia. <br> Ser o combustível para impulsionar e atrair novos negócios.</p>
			
		</article>
	
	</div>
	
</section>