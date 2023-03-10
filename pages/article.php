<article id="single">

	<header class="accentBg">
	
		<div class="content row">
		
			<div class="column">
		
				<p>Zeus blog</p>
				<h1>Lorem ipsum dolor sit amet consectetur. Massa velit ipsum vulputate nec nunc interdum leo urna nec. Potenti nulla mattis ut tincidunt risus ac velit nulla posuere.</h1>

			</div>
			<div class="column">

				<div class="author row">

					<i><?php include 'assets/svgs/author.svg' ?></i>
					<h2>por nome do autor</h2>

				</div>
				<time pubdate datetime="03-09-2023" class="row">

					<i><?php include 'assets/svgs/clock.svg' ?></i>
					<p>Há 1H</p>

				</time>

			</div>
		
		</div>
		
	</header>
	<section>
	
		<div class="content column">
		
			<img src="<?=BASE?>/assets/images/blog/article-bg.jpg">
			<p>Lorem ipsum dolor sit amet consectetur. Habitasse gravida in suspendisse facilisi. Massa suspendisse cursus ut turpis sed etiam. Malesuada metus a ipsum eleifend non sagittis velit feugiat mauris. Amet non ipsum tempus tristique placerat eget dis euismod commodo. Scelerisque quam nec feugiat id. Vel nisl feugiat mi pretium. Volutpat amet aliquam tincidunt cras viverra porttitor. Habitasse quisque eget nibh in velit sit in sollicitudin felis. Mauris semper euismod lorem est quisque blandit euismod. Sapien at ac tellus dignissim risus diam tellus.</p>
			<p>Non eros a semper faucibus. Ultricies eget posuere duis sit et vestibulum aliquet sed. Sit venenatis egestas dignissim iaculis donec at mattis fermentum. Sagittis egestas quis iaculis aliquet lorem. Nunc hendrerit aliquam integer aenean vel. Gravida nisi sapien nam penatibus mauris a sed adipiscing at. Erat et varius egestas dictumst in est ac congue leo. Integer ac habitasse consequat eget hendrerit in quis. Fringilla viverra nibh vulputate sit. Arcu vestibulum laoreet placerat eget faucibus tortor. Eget facilisi amet venenatis senectus vestibulum diam.</p>
		
		</div>
	
	</section>
	<section id="posts">

		<div class="content grid">

			<h3><mark>ARTIGOS RELACIONADOS</mark></h3>
			<?php for($i = 0; $i < 3; $i++): ?>
			<a href="<?=BASE?>/article">

				<article class="accentBg">

					<div class="banner column">

						<div class="row">

							<p>zeus blog</p>
							<time pubdate datetime="03-09-2023" class="row">

								<i><?php include 'assets/svgs/clock.svg' ?></i>
								<p>Há 1H</p>

							</time>

						</div>
						<h5>Lorem ipsum dolor sit amet consectetur. Massa velit ipsum vulputate nec nunc interdum leo urna nec. Potenti nulla mattis ut tincidunt risus ac velit nulla posuere.</h5>
						<p>Lorem ipsum dolor sit amet consectetur. Massa velit ipsum vulputate nec nunc interdum leo urna nec. Potenti nulla mattis ut tincidunt risus ac velit nulla posuere. </p>

					</div>
					<div class="author row">

						<i><?php include 'assets/svgs/author.svg' ?></i>
						<h6>por nome do autor</h6>

					</div>

				</article>

			</a>
			<?php endfor; ?>

		</div>

	</section>
	
</article>