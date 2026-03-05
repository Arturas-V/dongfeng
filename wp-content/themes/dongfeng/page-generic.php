<?php
/**
 * Template Name: Generic Page
 * Service page template for the Dongfeng Lietuva theme.
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

get_header();
?>

<main id="site-content" class="generic-page">

	<?php get_template_part( 'template-parts/hero', get_post_type() ); ?>

	<?php if(get_field('pirmo_bloko_turinys')) { ?>
	<section class="generic-intro container">
		<hr>
		<?php echo get_field('antraste_ir_aprasymas_detalizuotas'); ?>
		<div class="generic-intro__inner">
			<?php if(get_field('pirmo_bloko_turinys')){ ?>
			<div class="generic-intro__line flex flex-row">
				<div class="generic-intro__line-image">
					<?php
						$spec_image = get_field('pirmo_bloko_img');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="generic-intro__line-content">
					<?php echo get_field('pirmo_bloko_turinys'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('antro_bloko_turinys')){ ?>
			<div class="generic-intro__line flex flex-row-reverse">
				<div class="generic-intro__line-image">
					<?php
						$spec_image = get_field('antro_bloko_img');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="generic-intro__line-content">
					<?php echo get_field('antro_bloko_turinys'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('trecio_bloko_turinys')){ ?>
			<div class="generic-intro__line flex flex-row">
				<div class="generic-intro__line-image">
					<?php
						$spec_image = get_field('trecio_bloko_img');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="generic-intro__line-content">
					<?php echo get_field('trecio_bloko_turinys'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('ketvirto_bloko_turinys')){ ?>
			<div class="generic-intro__line flex flex-row-reverse">
				<div class="generic-intro__line-image">
					<?php
						$spec_image = get_field('ketvirto_bloko_img');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="generic-intro__line-content">
					<?php echo get_field('ketvirto_bloko_turinys'); ?>
				</div>
			</div>
			<?php } ?>
		</div>
		<hr>
	</section>
	<?php } ?>

	<?php if(get_field('titulas_ir_aprasymas')) { ?>
	<section class="generic-why">
		<div class="container">
			<?php echo get_field('titulas_ir_aprasymas'); ?>
			<div class="generic-why__grid">
				<div class="generic-why__item">
					<?php if(get_field('kortele_1_img')) { ?>
					<div class="generic-why__icon">
						<img src="<?php echo get_field('kortele_1_img')['url']; ?>" alt="<?php echo get_field('kortele_1_img')['title']; ?>" />
					</div>
					<?php } ?>
					<?php if(get_field('kortele_1_turinys')) { echo get_field('kortele_1_turinys'); } ?>
				</div>

				<div class="generic-why__item">
					<?php if(get_field('kortele_2_img')) { ?>
					<div class="generic-why__icon">
						<img src="<?php echo get_field('kortele_2_img')['url']; ?>" alt="<?php echo get_field('kortele_2_img')['title']; ?>" />
					</div>
					<?php } ?>
					<?php if(get_field('kortele_2_turinys')) { echo get_field('kortele_2_turinys'); } ?>
				</div>

				<div class="generic-why__item">
					<?php if(get_field('kortele_3_img')) { ?>
					<div class="generic-why__icon">
						<img src="<?php echo get_field('kortele_3_img')['url']; ?>" alt="<?php echo get_field('kortele_3_img')['title']; ?>" />
					</div>
					<?php } ?>
					<?php if(get_field('kortele_3_turinys')) { echo get_field('kortele_3_turinys'); } ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if(get_field('korteles_1_turinys')) { ?>
	<section class="generic-specifications centered container">
		<hr>
		<div class="generic-specifications__wrapper">
			<div class="generic-specifications__line flex flex-row">
				<div class="generic-specifications__line-image">
					<picture>
						<source srcset="<?php echo get_field('korteles_1_img')['sizes']['large']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php get_field('korteles_1_img')['sizes']['large']; ?>" media="(min-width: 1200px)">
						<img decoding="async" src="<?php echo get_field('korteles_1_img')['sizes']['large']; ?>" alt="<?php echo get_field('korteles_1_img')['alt'] ?>">
					</picture>
				</div>
				<div class="generic-specifications__line-content flex flex-column">
					<?php echo get_field('korteles_1_turinys'); ?>
				</div>
			</div>
			<div class="generic-specifications__line flex flex-row-reverse">
				<div class="generic-specifications__line-image">
					<picture>
						<source srcset="<?php echo get_field('korteles_2_img')['sizes']['large']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php get_field('korteles_2_img')['sizes']['large']; ?>" media="(min-width: 1200px)">
						<img decoding="async" src="<?php echo get_field('korteles_2_img')['sizes']['large']; ?>" alt="<?php echo get_field('korteles_2_img')['alt'] ?>">
					</picture>
				</div>
				<div class="generic-specifications__line-content flex flex-column">
					<?php echo get_field('korteles_2_turinys'); ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if(get_field('papildomo_turinio_turinys')) { ?>
	<section class="generic-additional">
		<div class="container">
			<hr><br>
			<?php echo get_field('papildomo_turinio_sekcija'); ?>
			<div class="generic-additional__content flex">
				<?php if(get_field('papildomo_turinio_paveikslelis')) { ?>
					<img src="<?php echo get_field('papildomo_turinio_paveikslelis')['url']; ?>" alt="<?php echo get_field('papildomo_turinio_paveikslelis')['title']; ?>" />
				<?php } ?>
				<?php if(get_field('papildomo_turinio_turinys')) {  ?>
					<div class="generic-additional__text flex flex-column">
						<?php echo get_field('papildomo_turinio_turinys'); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php if(get_field('formo_turinys')) { ?>
	<section class="generic-booking" id="booking">
		<div class="container">
			<?php echo get_field('formo_turinys'); ?>
		</div>
	</section>
	<?php } ?>

	<?php if(get_field('zemelapio_vaizdavimas')) { 
		$google_api_key = get_field('google_api_raktas');
	?>

	<section class="map-section flex flex-row">
		<div class="map-section__content">
			<?php echo get_field('zemelapio_turinys'); ?>
		</div>
		<div class="map-section__net">
			<?php 
			$location = get_field('zemelapio_vaizdavimas');
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

	<div class="booking-popup" data-popup-id="get-tech-appointment">
		<div class="booking-popup__overlay"></div>
		<div class="booking-popup__content">
			<button class="booking-popup__close" aria-label="Close popup">×</button>
			<div class="booking-popup__body">
				
				<div class="container">
					<hr>
					<?php if(get_field('issokanti_formapopup')) { echo get_field('issokanti_formapopup'); } ?>
				</div>
			</div>
		</div>
    </div>

	<div class="booking-popup" data-popup-id="get-insurance-offer">
		<div class="booking-popup__overlay"></div>
		<div class="booking-popup__content">
			<button class="booking-popup__close" aria-label="Close popup">×</button>
			<div class="booking-popup__body">
				
				<div class="container">
					<hr>
					<?php if(get_field('issokanti_formapopup')) { echo get_field('issokanti_formapopup'); } ?>
				</div>
			</div>
		</div>
    </div>
	

</main>

<?php
get_footer();
