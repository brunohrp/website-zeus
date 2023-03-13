<section id="onboarding">

	<div class="content column">
	
		<img src="<?=BASE?>/assets/images/onboarding/onboarding.png" alt="Onboarding ZEUS">
	
	</div>

</section>
<section id="control" class="full column">

	<?php 
	
		$pontos = array(

			array(
				'h5' => 'BAIXE O APP DO TANGERINO',
				'img' => 'tangerino.png',
				'p' => 'Acesse sua loja de aplicativos no seu celular e procure por TANGERINO¹'
			),
			array(
				'h5' => 'ENTRE COM PIN OU QR CODE',
				'p' => 'Informe o usuário e senha informado pelo RH.'
			),
			array(
				'h5' => 'LOCALIZAÇÃO',
				'p' => 'Autorize o aplicativo para que tenha acesso a sua localização².'
			),
			array(
				'h5' => 'SELFIE',
				'img' => 'ponto-4.png',
				'p' => 'Para registrar o ponto, abra o aplicativo TANGERINO, e clique em "REGISTRAR PONTO" . Tire uma selfie³ e envie.'
			),
			array(
				'h5' => 'PRONTO!',
				'p' => '1- Disponível no sistema Android e IOS2- A localização é registrada no momento do registro de ponto para controle interno. A Zeus não compartilha dados pessoais de seus colaboradores, fornecedores e clientes, seguimos as diretrizes da LGPD.3 - A foto não fica armazenada em seu celular, ou seja, não ocupa espaço na memória do aparelho.'
			),

		)
	
	?>
	
	<h3>CONTROLE DE PONTO</h3>
	<wm-slider class="grid">
	
		<wm-slider-controls>
		
			<wm-slider-trigger slide-to="left" class="material-symbols-outlined"><?php include 'assets/svgs/left-arrow.svg' ?></wm-slider-trigger>
		
		</wm-slider-controls>
		<wm-slider-mat>
		
			<?php foreach($pontos as $ponto): ?>
			<wm-slider-row>
			
				<article class="column longWhiteCard">
		
					<div class="thumb grid"><?php include 'assets/svgs/aro.svg' ?></div>
					<h5><mark><?=$ponto['h5']?></mark></h5>
					<?php if(isset($ponto['img'])) echo '<img src="'.BASE.'/assets/images/onboarding/bem-vindo/'.$ponto['img'].'">' ?>
					<p><?=$ponto['p']?></p>

				</article>
			
			</wm-slider-row>
			<?php endforeach; ?>
		
		</wm-slider-mat>
		<wm-slider-controls>
		
			<wm-slider-trigger slide-to="right" class="material-symbols-outlined"><?php include 'assets/svgs/right-arrow.svg' ?></wm-slider-trigger>
		
		</wm-slider-controls>
	
	</wm-slider>

</section>
<section class="steps">

	<div class="content grid">
	
		<header class="column">
		
			<h3><mark>ATESTADO MÉDICO</mark></h3>
			<p>O colaborador deverá apresentar o atestado em até 02 (dois) dias úteis, contatos do atendimento, mesmo que por meio de terceiros. Pode ser anexado no sistema de ponto Tangerino ou enviado por Whatsapp diretamente ao RH.</p>
		
		</header>
		<article class="accentBg column">
		
			<h5><mark>01 - ACESSE O APP DO TANGERINO</mark></h5>
			<p>Clique nos 03 tracinhos no lado superior esquerdo para abrir as opções do aplicativo e clique em Lançar Ajustes.</p>
			<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/atestado/step1.png" alt="">
		
		</article>
		<article class="accentBg column">
		
			<h5><mark>02 - ENVIANDO O ATESTADO</mark></h5>
			<p>Na próxima tela clique em Atestado Médico, em seguida preencha com as datas de início e fim. Clique no anexo e adicione uma foto ou arquivo PDF, e por fim clique em enviar.</p>
			<div class="row">
			
				<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/atestado/step2.png" alt="">
			
			</div>
		
		</article>
	
	</div>

</section>
<section id="correcao" class="steps">
	
	<div class="content grid">
	
		<header class="column">
		
			<h3><mark>CORREÇÃO DE PONTO</mark></h3>
			<p>O colaborador deverá manter seu espelho de ponto sempre correto. Acesse o aplicativo do <br> Tangerino e siga o passo-a-passo.</p>
		
		</header>
		<article class="accentBg column">
		
			<h5><mark>01 - ACESSE O APP DO TANGERINO</mark></h5>
			<p>Clique nos 03 tracinhos no lado superior esquerdo para abrir as opções do aplicativo e clique em Histórico de Pontos.</p>
			<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/correcao/step1.png" alt="">
		
		</article>
		<article class="accentBg column">
		
			<h5><mark>02- SELECIONANDO O PERIODO</mark></h5>
			<p>Quando houver algum erro no registro de ponto os dados apareceram em vermelho como no exemplo abaixo. Clique sobre o ponto de exclamação (!) para dar continuidade ao processo de regularização do ponto.</p>
			<div class="row">
			
				<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/correcao/step2.png" alt="">
			
			</div>
		
		</article>
		<article class="accentBg column">
		
			<h5><mark>03 - LANÇAMENTO DE PONTO ATRASADO</mark></h5>
			<p>Preencha corretamente os dados (data e horário), selecione o motivo pelo qual o ponto não foi registrado. Caso tenha que anexar um justificativa clique em Adicionar Anexo. Verifique todas as informações e caso esteja tudo correto, clique em ENVIAR. Tenha cuidado para não preencher os dados incorretamente.</p>
			<div class="row">
			
				<img src="<?=BASE?>/assets/images/onboarding/bem-vindo/correcao/step3.png" alt="">
			
			</div>
		
		</article>
	
	</div>

</section>