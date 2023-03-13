<section id="onboarding">

	<?php
	
		$table = array(
		
			array(
				'nome' => 'Adilson Ramiro de Castro',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'Adilson@zeusagro.com'
			),
			array(
				'nome' => 'Administrador ZeusAgro',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'admin@zeusagro.com'
			),
			array(
				'nome' => 'Adriano Sousa Ximendes',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'adriano.ximenes@zeusagro.com'
			),
			array(
				'nome' => 'Adyllyson H. Gomes do Nascimento',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'adyllyson.nascimento@zeusagro.com'
			),
			array(
				'nome' => 'Amanda Barbosa',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'Amanda.barbosa@zeusagro.com'
			),
			array(
				'nome' => 'Andressa Cardoso Pereira Gregorio',
				'setor' => 'Sucesso do Cliente',
				'unidade' => 'WBC',
				'email' => 'Andressa.gregorio@zeusagro.com'
			),
			array(
				'nome' => 'André Tomazeli Vitorassi',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'andre.vitorassi@zeusagro.com'
			),
			array(
				'nome' => 'Antônio Sérgio Tavares',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'antonio.tavares@zeusagro.com'
			),
			array(
				'nome' => 'Bruna Peron',
				'setor' => 'Sucesso do Cliente',
				'unidade' => 'WBC',
				'email' => 'bruna.peron@zeusagro.com'
			),
			array(
				'nome' => 'Bruno Biazeto',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'bruno.biazeto@zeusagro.com'
			),
			array(
				'nome' => 'Carlos Silva Neto',
				'setor' => 'Sucesso do Cliente',
				'unidade' => 'WBC',
				'email' => 'carlos.neto@zeusagro.com'
			),
			array(
				'nome' => 'Caroline Silva Barbosa',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'Caroline.Barbosa@zeusagro.com'
			),
			array(
				'nome' => 'Compras Zeus',
				'setor' => 'Compras',
				'unidade' => 'Daniel Fonseca',
				'email' => 'Compras@zeusagro.com'
			),
			array(
				'nome' => 'Contato Zeus',
				'setor' => 'Comunicação',
				'unidade' => 'WBC',
				'email' => 'contato@zeusagro.com'
			),
			array(
				'nome' => 'Deposito Zeus',
				'setor' => 'Administrativo',
				'unidade' => 'Daniel Fonseca',
				'email' => 'deposito@zeusagro.com'
			),
			array(
				'nome' => 'Edson Simão Jr.',
				'setor' => '-',
				'unidade' => '-',
				'email' => 'edson.simao@zeusagro.com'
			),
			
		)
	
	?>
	
	<div class="content column">
	
		<img src="<?=BASE?>/assets/images/onboarding/onboarding.png" alt="Onboarding ZEUS">
		<h1><mark>CONTATOS ZEUS</mark></h1>
		<table>
		
			<thead class="accentBg">
			
				<tr>
				
					<th>NOME</th>
					<th>SETOR</th>
					<th>UNIDADE</th>
					<th>EMAIL</th>
				
				</tr>
			
			</thead>
			<tbody>
			
				<?php foreach($table as $tr): ?>
				
				<tr>
				
					<th><?=$tr['nome']?></th>
					<th><?=$tr['setor']?></th>
					<th><?=$tr['unidade']?></th>
					<th><a href="mailto:<?=$tr['email']?>"><?=$tr['email']?></a></th>
				
				</tr>
				
				<?php endforeach; ?>
			
			</tbody>
			
		</table>
		
	</div>

</section>