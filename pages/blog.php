<section id="posts">

	<div class="content grid">
	
		<?php for($i = 0; $i < 4; $i++): ?>
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
					<<?=($i === 0) ? 'h3' : 'h5'?>>Lorem ipsum dolor sit amet consectetur. Massa velit ipsum vulputate nec nunc interdum leo urna nec. Potenti nulla mattis ut tincidunt risus ac velit nulla posuere.</<?=($i === 0) ? 'h3' : 'h5'?>>
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