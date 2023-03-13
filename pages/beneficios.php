<section id="onboarding">

	<div class="content column">
	
		<img src="<?=BASE?>/assets/images/onboarding/onboarding.png" alt="Onboarding ZEUS">
	
	</div>

</section>
<section id="onboardingSlider" class="grid">

	<?php
	
		$contacts = array(

			array(
				'h5' => 'TICKET ALIMENTAÇÃO',
				'p' => 'O benefício é disponibilizado no cartão Ticket no final de cada mês.'
			),
			array(
				'h5' => 'VALE TRANSPORTE',
				'p' => 'Esse beneficio é facultativo e cabe ao colaborador informar ao RH, se vai optar ou não. É feito um desconto¹ em folha conforme rege a CLT. A Zeus disponibiliza o vale transporte no primeiro dia de cada mês.'
			),
			array(
				'h5' => 'DAY OFF',
				'p' => 'Temos um presente para você! Colaboradores da Zeus têm 01 (um) dia de folga remunerada na data de seu aniversário².'
			),
			array(
				'h5' => 'GYMPASS',
				'p' => 'Atividade física é essencial para a qualidade de vida, e a Zeus incentiva e apoia essa a pratica de exercícios. E para facilitar colaborares Zeus tem acesso ao Gympass, plataforma corporativa que dá acesso a milhares de academias, estúdios e aulas ao vivo com apenas uma única mensalidade.'
			),
			array(
				'h5' => 'CASUAL DAY',
				'p' => 'Não importa se é inverno ou verão. Na Zeus, toda sexta-feira podemos trabalhar de bermuda e chinelo.'
			),

		)
	
	?>
	
	<div class="column">

		<h3>BENEFÍCIOS ZEUS</h3>
		<wm-slider class="column">

			<wm-slider-mat>

				<?php foreach($contacts as $contact): ?>
				<wm-slider-row>

					<article class="accentBg column">

						<h5><mark><?=$contact['h5']?></mark></h5>
						<p><?=$contact['p']?></p>

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
	<p class="content">1- A concessão do Vale-Transporte autoriza o empregador a descontar, mensalmente, do beneficiário que exercer o respectivo direito, o valor da parcela equivalente a 6% (seis por cento) do seu salário básico ou vencimento. 2 -a data pode ser negociada dentro do mês de aniversário junto ao gestor (a).</p>

</section>