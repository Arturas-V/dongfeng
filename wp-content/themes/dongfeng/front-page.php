<?php
/**
 * Front page template for the Dongfeng Lietuva theme.
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

$main_fields = get_field_objects(10);

get_header('', ['main_data' => $main_fields]);

?>

<main id="site-content" class="homepage">
	<section class="hero">
		<div class="hero__slider" data-hero-slider data-hero-slider-delay="43">
			<div class="hero__track">

				<?php
				$video = $main_fields['pirmas_slide_img']['value'];
				if($video) { 
					?>
				<article class="hero__slide hero__slide--one">
					<div class="hero__slide-video">
						<video src="<?php echo esc_url($video['url']); ?>" autoplay="" muted="" loop="" playsinline=""></video>
					</div>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo $main_fields['pirmas_slide_turinys']['value']; ?>
					</div>
				</article>
				<?php } ?>

				<?php if($main_fields['antras_slide_img']['value']) { ?>
				<article class="hero__slide hero__slide--two">
					<picture class="hero__slide-image">
						<source srcset="<?php echo $main_fields['antras_slide_img']['value']['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo $main_fields['antras_slide_img']['value']['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo $main_fields['antras_slide_img']['value']['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo $main_fields['antras_slide_img']['value']['sizes']['medium_large']; ?>" alt="<?php echo $main_fields['antras_slide_img']['value']['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo $main_fields['antras_slide_turinys']['value']; ?>
					</div>
				</article>
				<?php } ?>

				<?php if($main_fields['trecias_slide_img']['value']) { ?>
				<article class="hero__slide hero__slide--three">
					<picture class="hero__slide-image">
						<source srcset="<?php echo $main_fields['trecias_slide_img']['value']['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo $main_fields['trecias_slide_img']['value']['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo $main_fields['trecias_slide_img']['value']['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo $main_fields['trecias_slide_img']['value']['sizes']['medium_large']; ?>" alt="<?php echo $main_fields['antras_slide_img']['value']['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo $main_fields['trecias_slide_turinys']['value']; ?>
					</div>
				</article>
				<?php } ?>

				<?php if($main_fields['ketvirtas_slide_img']['value']) { ?>
				<article class="hero__slide hero__slide--four">
					<picture class="hero__slide-image">
						<source srcset="<?php echo $main_fields['ketvirtas_slide_img']['value']['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo $main_fields['ketvirtas_slide_img']['value']['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo $main_fields['ketvirtas_slide_img']['value']['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo $main_fields['ketvirtas_slide_img']['value']['sizes']['medium_large']; ?>" alt="<?php echo $main_fields['antras_slide_img']['value']['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo $main_fields['ketvirtas_slide_turinys']['value']; ?>
					</div>
				</article>
				<?php } ?>

				<?php if($main_fields['penktas_slide_img']['value']) { ?>
				<article class="hero__slide hero__slide--four">
					<picture class="hero__slide-image">
						<source srcset="<?php echo $main_fields['penktas_slide_img']['value']['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo $main_fields['penktas_slide_img']['value']['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo $main_fields['penktas_slide_img']['value']['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo $main_fields['penktas_slide_img']['value']['sizes']['medium_large']; ?>" alt="<?php echo $main_fields['antras_slide_img']['value']['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo $main_fields['penktas_slide_turinys']['value']; ?>
					</div>
				</article>
				<?php } ?>

			</div>

			<div class="hero__meta">
				<div class="hero__indicator" role="tablist">
					<?php if($main_fields['pirmas_slide_img']['value']) { ?>
					<button class="hero__dot is-active" type="button" aria-label="Slide 1" data-hero-dot="0"></button>
					<?php } ?>
					<?php if($main_fields['antras_slide_img']['value']) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 2" data-hero-dot="1"></button>
					<?php } ?>
					<?php if($main_fields['trecias_slide_img']['value']) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 3" data-hero-dot="2"></button>
					<?php } ?>
					<?php if($main_fields['ketvirtas_slide_img']['value']) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 4" data-hero-dot="3"></button>
					<?php } ?>
					<?php if($main_fields['penktas_slide_img']['value']) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 5" data-hero-dot="4"></button>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<section class="car-showcase car-showcase__3-cards" data-showcase="1">
		<button class="car-showcase__arrow car-showcase__arrow--prev" type="button" aria-label="Previous" data-showcase-prev>‹</button>
		<div class="car-showcase__desc container flex flex-column flex-center container">
			<?php echo $main_fields['sdongfeng_aprasymas']['value']; ?>
		</div>
		<div class="car-showcase__viewport">
			<div class="car-showcase__track">

				<div class="car-card">
					<?php if($main_fields['box_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['box_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['box_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['box_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['box_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['box_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['box_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['box_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

				<div class="car-card">
					<?php if($main_fields['mage_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['mage_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['mage_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['mage_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['mage_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['mage_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['mage_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['mage_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

				<div class="car-card">
					<?php if($main_fields['huge_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['huge_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['huge_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['huge_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['huge_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['huge_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['huge_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['huge_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

			</div>
		</div>
		<button class="car-showcase__arrow car-showcase__arrow--next" type="button" aria-label="Next" data-showcase-next>›</button>
	</section>

	<section class="car-showcase car-showcase__4-cards" data-showcase="2">
		<button class="car-showcase__arrow car-showcase__arrow--prev" type="button" aria-label="Previous" data-showcase-prev>‹</button>
		<div class="car-showcase__desc container flex flex-column flex-center container">
			<?php echo $main_fields['forthing_aprasymas']['value']; ?>
		</div>
		<div class="car-showcase__viewport">
			<div class="car-showcase__track">
				
				<div class="car-card">
					<?php if($main_fields['t5_evo_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['t5_evo_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['t5_evo_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['t5_evo_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['t5_evo_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['t5_evo_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['t5_evo_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['t5_evo_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

				<div class="car-card">
					<?php if($main_fields['u_tour_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['u_tour_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['u_tour_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['u_tour_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['u_tour_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['u_tour_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['u_tour_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['u_tour_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

				<div class="car-card">
					<?php if($main_fields['forthing_v9_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['forthing_v9_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['forthing_v9_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['forthing_v9_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['forthing_v9_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['forthing_v9_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['forthing_v9_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['forthing_v9_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

				<div class="car-card">
					<?php if($main_fields['forthing_s7_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['forthing_s7_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['forthing_s7_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['forthing_s7_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['forthing_s7_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['forthing_s7_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['forthing_s7_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['forthing_s7_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

			</div>
		</div>
		<button class="car-showcase__arrow car-showcase__arrow--next" type="button" aria-label="Next" data-showcase-next>›</button>
	</section>

	<section class="car-showcase car-showcase__2-cards" data-showcase="3">
		<button class="car-showcase__arrow car-showcase__arrow--prev" type="button" aria-label="Previous" data-showcase-prev>‹</button>
		<div class="car-showcase__desc container flex flex-column flex-center container">
			<?php echo $main_fields['voyah_aprasymas']['value']; ?>
		</div>
		<div class="car-showcase__viewport">

			<div class="car-showcase__track">

				<div class="car-card">
					<?php if($main_fields['voyah_dream_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['voyah_dream_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['voyah_dream_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['voyah_dream_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['voyah_dream_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['voyah_dream_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['voyah_dream_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['voyah_dream_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

				<div class="car-card">
					<?php if($main_fields['voyah_courage_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['voyah_courage_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['voyah_courage_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['voyah_courage_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['voyah_courage_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['voyah_courage_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['voyah_courage_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['voyah_courage_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

			</div>
		</div>
		<button class="car-showcase__arrow car-showcase__arrow--next" type="button" aria-label="Next" data-showcase-next>›</button>
	</section>

	<section class="car-showcase car-showcase__1-cards">
		<div class="car-showcase__desc container flex flex-column flex-center container">
			<?php echo $main_fields['mhero_aprasymas']['value']; ?>
		</div>
		<div class="car-showcase__viewport">
			<div class="car-showcase__track flex-center">

				<div class="car-card">
					<?php if($main_fields['mhero_etikete']['value']) { ?>
					<div class="car-card__badge <?php if($main_fields['mhero_etikete']['value'][0] == 'Akcija') { echo 'car-card__badge-red'; } ?>"><?php echo $main_fields['mhero_etikete']['value'][0]; ?></div>
					<?php } ?>
					<div class="car-card__image">
						<img decoding="async" src="<?php echo $main_fields['mhero_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['mhero_img']['value']['alt'] ?>">
					</div>
					<h3><?php echo $main_fields['mhero_nuoroda']['value']['title']; ?></h3>
					<div class="car-card__price"><?php echo $main_fields['mhero_kaina']['value']; ?></div>
					<div class="car-card__actions flex flex-column">
						<a href="<?php echo $main_fields['mhero_nuoroda']['value']['url']; ?>" class="button button--dark">Sužinok daugiau</a>
						<button data-popup="test-drive" class="button button--light" type="button">Bandomasis važevimas</button>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php if($main_fields['about_content']['value']) { ?>
	<section class="split-section container">
		<div class="container split-section__wrap flex flex-row">
			<div class="split-section__media">
				<picture>
					<source srcset="<?php echo $main_fields['about_image']['value']['sizes']['large']; ?>" media="(min-width: 1400px)">
					<source srcset="<?php $main_fields['about_image']['value']['sizes']['large']; ?>" media="(min-width: 1200px)">
					<img decoding="async" src="<?php echo $main_fields['about_image']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['about_image']['value']['alt'] ?>">
				</picture>
			</div>
			<div class="split-section__content flex flex-column">
				<?php echo $main_fields['about_content']['value']; ?>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if($main_fields['about_content_2']['value']) { ?>
	<section class="split-section container">
		<div class="container split-section__wrap flex flex-row-reverse">
			<div class="split-section__media">
				<picture>
					<source srcset="<?php echo $main_fields['about_image_2']['value']['sizes']['large']; ?>" media="(min-width: 1400px)">
					<source srcset="<?php $main_fields['about_image_2']['value']['sizes']['large']; ?>" media="(min-width: 1200px)">
					<img decoding="async" src="<?php echo $main_fields['about_image_2']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['about_image_2']['value']['alt'] ?>">
				</picture>
			</div>
			<div class="split-section__content flex flex-column">
				<?php echo $main_fields['about_content_2']['value']; ?>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if($main_fields['zemelapio_lokacija']['value']) { 
		$google_api_key = $main_fields['zemelapio_lokacija']['value'];
	?>

	<section class="map-section flex flex-row">
		<div class="map-section__content">
			<?php echo $main_fields['zemelapio_turinys']['value']; ?>
		</div>
		<div class="map-section__net">
			<?php 
			$location = $main_fields['zemelapio_lokacija']['value'];
			?>
				<div class="acf-map" style="height: 400px; width: 100%;">
					<div class="marker" 
						data-lat="<?php echo esc_attr($location['lat']); ?>"
						data-lng="<?php echo esc_attr($location['lng']); ?>"
						data-icon="<?php echo esc_url(get_template_directory_uri() . '/wp-content/uploads/2026/03/market.png'); ?>">
					</div>
				</div>
			<?php ?>
		</div>
	</section>
	<?php } ?>

	<script>
		const GoogleAPIkey = '<?php echo get_option('google_maps_api_key'); ?>';
	</script>

	<div class="booking-popup" data-popup-id="test-drive">
		<div class="booking-popup__overlay"></div>
		<div class="booking-popup__content">
			<button class="booking-popup__close" aria-label="Close popup">×</button>
			<div class="booking-popup__body">
				
				<div class="container">
					<hr>
					<h2>Užsiregistruoti bandomajam važiavimui</h2>
					<?php echo do_shortcode('[contact-form-7 id="473d69b" title="Registruotis bandomajam važiavimui"]'); ?>
				</div>
			</div>
		</div>
    </div>

</main>

<?php
get_footer();
