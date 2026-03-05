<?php
/**
 * Front page template for the Dongfeng Lietuva theme.
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

get_header();
?>

<main id="site-content" class="homepage">
	<section class="hero">
		<div class="hero__slider" data-hero-slider data-hero-slider-delay="43">
			<div class="hero__track">

				<?php
				$video = get_field('pirmas_slide_img');
				if($video) { 
					?>
				<article class="hero__slide hero__slide--one">
					<div class="hero__slide-video">
						<video src="<?php echo esc_url($video['url']); ?>" autoplay="" muted="" loop="" playsinline=""></video>
					</div>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo get_field('pirmas_slide_turinys'); ?>
					</div>
				</article>
				<?php } ?>

				<?php if(get_field('antras_slide_img')) { ?>
				<article class="hero__slide hero__slide--two">
					<picture class="hero__slide-image">
						<source srcset="<?php echo get_field('antras_slide_img')['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo get_field('antras_slide_img')['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo get_field('antras_slide_img')['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo get_field('antras_slide_img')['sizes']['medium_large']; ?>" alt="<?php echo get_field('antras_slide_img')['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo get_field('antras_slide_turinys'); ?>
					</div>
				</article>
				<?php } ?>

				<?php if(get_field('trecias_slide_img')) { ?>
				<article class="hero__slide hero__slide--three">
					<picture class="hero__slide-image">
						<source srcset="<?php echo get_field('trecias_slide_img')['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo get_field('trecias_slide_img')['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo get_field('trecias_slide_img')['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo get_field('trecias_slide_img')['sizes']['medium_large']; ?>" alt="<?php echo get_field('antras_slide_img')['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo get_field('trecias_slide_turinys'); ?>
					</div>
				</article>
				<?php } ?>

				<?php if(get_field('ketvirtas_slide_img')) { ?>
				<article class="hero__slide hero__slide--four">
					<picture class="hero__slide-image">
						<source srcset="<?php echo get_field('ketvirtas_slide_img')['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo get_field('ketvirtas_slide_img')['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo get_field('ketvirtas_slide_img')['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo get_field('ketvirtas_slide_img')['sizes']['medium_large']; ?>" alt="<?php echo get_field('antras_slide_img')['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo get_field('ketvirtas_slide_turinys'); ?>
					</div>
				</article>
				<?php } ?>

				<?php if(get_field('penktas_slide_img')) { ?>
				<article class="hero__slide hero__slide--four">
					<picture class="hero__slide-image">
						<source srcset="<?php echo get_field('penktas_slide_img')['sizes']['2048x2048']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php echo get_field('penktas_slide_img')['sizes']['1536x1536']; ?>" media="(min-width: 1200px)">
						<source srcset="<?php echo get_field('penktas_slide_img')['sizes']['large']; ?>" media="(min-width: 768px)">
						<img decoding="async" src="<?php echo get_field('penktas_slide_img')['sizes']['medium_large']; ?>" alt="<?php echo get_field('antras_slide_img')['alt'] ?>">
					</picture>
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<?php echo get_field('penktas_slide_turinys'); ?>
					</div>
				</article>
				<?php } ?>

			</div>

			<div class="hero__meta">
				<div class="hero__indicator" role="tablist">
					<?php if(get_field('pirmas_slide_img')) { ?>
					<button class="hero__dot is-active" type="button" aria-label="Slide 1" data-hero-dot="0"></button>
					<?php } ?>
					<?php if(get_field('antras_slide_img')) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 2" data-hero-dot="1"></button>
					<?php } ?>
					<?php if(get_field('trecias_slide_img')) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 3" data-hero-dot="2"></button>
					<?php } ?>
					<?php if(get_field('ketvirtas_slide_img')) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 4" data-hero-dot="3"></button>
					<?php } ?>
					<?php if(get_field('penktas_slide_img')) { ?>
					<button class="hero__dot" type="button" aria-label="Slide 5" data-hero-dot="4"></button>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<section class="car-showcase" data-showcase="1">
		<button class="car-showcase__arrow car-showcase__arrow--prev" type="button" aria-label="Previous" data-showcase-prev>‹</button>
		<div class="car-showcase__viewport">
			<div class="car-showcase__track">
				<div class="car-card">
					<div class="car-card__badge">Offer</div>
					<div class="car-card__image car-card__image--lime"></div>
					<h3>Box</h3>
					<p class="car-card__spec">Fuel 2.0L / 189 hp</p>
					<div class="car-card__price">From 25 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--teal"></div>
					<h3>Mage</h3>
					<p class="car-card__spec">Fuel 1.5T / 195 hp</p>
					<div class="car-card__price">From 27 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--silver"></div>
					<h3>Huge</h3>
					<p class="car-card__spec">Fuel 1.5T / 204 hp</p>
					<div class="car-card__price">From 28 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>
			</div>
		</div>
		<button class="car-showcase__arrow car-showcase__arrow--next" type="button" aria-label="Next" data-showcase-next>›</button>
	</section>

	<section class="car-showcase" data-showcase="2">
		<button class="car-showcase__arrow car-showcase__arrow--prev" type="button" aria-label="Previous" data-showcase-prev>‹</button>
		<div class="car-showcase__viewport">
			<div class="car-showcase__track">
				<div class="car-card">
					<div class="car-card__badge">Offer</div>
					<div class="car-card__image car-card__image--lime"></div>
					<h3>Box</h3>
					<p class="car-card__spec">Fuel 2.0L / 189 hp</p>
					<div class="car-card__price">From 25 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--teal"></div>
					<h3>Mage</h3>
					<p class="car-card__spec">Fuel 1.5T / 195 hp</p>
					<div class="car-card__price">From 27 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--silver"></div>
					<h3>Huge</h3>
					<p class="car-card__spec">Fuel 1.5T / 204 hp</p>
					<div class="car-card__price">From 28 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>
			</div>
		</div>
		<button class="car-showcase__arrow car-showcase__arrow--next" type="button" aria-label="Next" data-showcase-next>›</button>
	</section>

	<section class="car-showcase" data-showcase="3">
		<button class="car-showcase__arrow car-showcase__arrow--prev" type="button" aria-label="Previous" data-showcase-prev>‹</button>
		<div class="car-showcase__viewport">
			<div class="car-showcase__track">
				<div class="car-card">
					<div class="car-card__badge">Offer</div>
					<div class="car-card__image car-card__image--lime"></div>
					<h3>Box</h3>
					<p class="car-card__spec">Fuel 2.0L / 189 hp</p>
					<div class="car-card__price">From 25 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--teal"></div>
					<h3>Mage</h3>
					<p class="car-card__spec">Fuel 1.5T / 195 hp</p>
					<div class="car-card__price">From 27 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--silver"></div>
					<h3>Huge</h3>
					<p class="car-card__spec">Fuel 1.5T / 204 hp</p>
					<div class="car-card__price">From 28 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>
			</div>
		</div>
		<button class="car-showcase__arrow car-showcase__arrow--next" type="button" aria-label="Next" data-showcase-next>›</button>
	</section>

	<section class="car-showcase" data-showcase="4">
		<button class="car-showcase__arrow car-showcase__arrow--prev" type="button" aria-label="Previous" data-showcase-prev>‹</button>
		<div class="car-showcase__viewport">
			<div class="car-showcase__track">
				<div class="car-card">
					<div class="car-card__badge">Offer</div>
					<div class="car-card__image car-card__image--lime"></div>
					<h3>Box</h3>
					<p class="car-card__spec">Fuel 2.0L / 189 hp</p>
					<div class="car-card__price">From 25 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--teal"></div>
					<h3>Mage</h3>
					<p class="car-card__spec">Fuel 1.5T / 195 hp</p>
					<div class="car-card__price">From 27 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--charcoal"></div>
					<h3>TS Evo</h3>
					<p class="car-card__spec">Fuel 2.0T / 242 hp</p>
					<div class="car-card__price">From 27 490 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>

				<div class="car-card">
					<div class="car-card__tag">Default</div>
					<div class="car-card__image car-card__image--silver"></div>
					<h3>Huge</h3>
					<p class="car-card__spec">Fuel 1.5T / 204 hp</p>
					<div class="car-card__price">From 28 990 €</div>
					<div class="car-card__actions">
						<button class="button" type="button">Learn more</button>
						<button class="button button--ghost" type="button">Test drive</button>
					</div>
				</div>
			</div>
		</div>
		<button class="car-showcase__arrow car-showcase__arrow--next" type="button" aria-label="Next" data-showcase-next>›</button>
	</section>

	<?php if(get_field('about_content')) { ?>
	<section class="split-section container">
		<div class="container split-section__wrap flex flex-row">
			<div class="split-section__media">
				<picture>
					<source srcset="<?php echo get_field('about_image')['sizes']['large']; ?>" media="(min-width: 1400px)">
					<source srcset="<?php get_field('about_image')['sizes']['large']; ?>" media="(min-width: 1200px)">
					<img decoding="async" src="<?php echo get_field('about_image')['sizes']['large']; ?>" alt="<?php echo get_field('about_image')['alt'] ?>">
				</picture>
			</div>
			<div class="split-section__content flex flex-column">
				<?php echo get_field('about_content'); ?>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if(get_field('about_content_2')) { ?>
	<section class="split-section container">
		<div class="container split-section__wrap flex flex-row-reverse">
			<div class="split-section__media">
				<picture>
					<source srcset="<?php echo get_field('about_image_2')['sizes']['large']; ?>" media="(min-width: 1400px)">
					<source srcset="<?php get_field('about_image_2')['sizes']['large']; ?>" media="(min-width: 1200px)">
					<img decoding="async" src="<?php echo get_field('about_image_2')['sizes']['large']; ?>" alt="<?php echo get_field('about_image_2')['alt'] ?>">
				</picture>
			</div>
			<div class="split-section__content flex flex-column">
				<?php echo get_field('about_content_2'); ?>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if(get_field('zemelapio_lokacija')) { 
		$google_api_key = get_field('google_api_raktas');
	?>

	<section class="map-section flex flex-row">
		<div class="map-section__content">
			<?php echo get_field('zemelapio_turinys'); ?>
		</div>
		<div class="map-section__net">
			<?php 
			$location = get_field('zemelapio_lokacija');
			?>
				<div class="acf-map" style="height: 400px; width: 100%;">
					<div class="marker" 
						data-lat="<?php echo esc_attr($location['lat']); ?>"
						data-lng="<?php echo esc_attr($location['lng']); ?>"
						data-icon="<?php echo esc_url(get_template_directory_uri() . '/wp-content/uploads/2026/03/market.png'); ?>">
						
						<div class="info-window">
							<h3><?php the_title(); ?></h3>
							<p><?php echo esc_html($location['address']); ?></p>
							<?php if (get_field('phone')): ?>
								<p>📞 <?php the_field('phone'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php ?>
		</div>
	</section>
	<?php } ?>

	<script>
		const GoogleAPIkey = '<?php echo get_option('google_maps_api_key'); ?>';
	</script>

</main>

<?php
get_footer();
