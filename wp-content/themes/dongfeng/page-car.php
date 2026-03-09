<?php
/**
 * Template Name: Car Page
 * Car model page template for the Dongfeng Lietuva theme.
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */



$main_fields = get_field_objects(10);

get_header('', ['main_data' => $main_fields]);

?>

<main id="site-content" class="car-page">

	<?php get_template_part( 'template-parts/hero', get_post_type() ); ?>

	<section class="car-specs-bar">
		<div class="car-specs__car-image">
			<?php
				$spec_image = get_field('car_spec_image');
				echo render_responsive_picture($spec_image, 'car-specs__car-image-img');
			 ?>
		</div>
		<div class="car-specs-bar__inner">
			<?php 
				$ilgis = get_field_object('ilgis');
				$plotis = get_field_object('plotis');
				$aukstis = get_field_object('aukstis');
				$vaziuokles_baze = get_field_object('vaziuokles_baze');
			?>
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label"><?php echo $ilgis['label']; ?></span>
				<span class="car-specs-bar__value"><?php echo $ilgis['value']; ?></span>
			</div>
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label"><?php echo $plotis['label']; ?></span>
				<span class="car-specs-bar__value"><?php echo $plotis['value']; ?></span>
			</div>
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label"><?php echo $aukstis['label']; ?></span>
				<span class="car-specs-bar__value"><?php echo $aukstis['value']; ?></span>
			</div>
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label"><?php echo $vaziuokles_baze['label']; ?></span>
				<span class="car-specs-bar__value"><?php echo $vaziuokles_baze['value']; ?></span>
			</div>
		</div>
	</section>

	<section class="flex flex-center car-features">
		<button type="button" data-popup="test-drive" class="button button--dark"><?php echo get_field('button_text'); ?></button>

		<div class="car-features__wrap flex">
			<div class="car-features__wrap-item">
				<?php
					$spec_image = get_field('section_1_image');
					echo render_responsive_picture($spec_image, 'car-features__wrap-item-image flex flex-center');
				?>
				<div class="car-features__wrap-item-text">
					<?php echo get_field('section_1_content'); ?>
				</div>
			</div>
			<div class="car-features__wrap-item">
				<?php
					$spec_image = get_field('section_2_image');
					echo render_responsive_picture($spec_image, 'car-features__wrap-item-image flex flex-center');
				?>
				<div class="car-features__wrap-item-text">
					<?php echo get_field('section_2_content'); ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/car-color-gallery', get_post_type() ); ?>

	<section class="car-intro container">
		<button type="button" data-popup="test-drive" class="button button--dark"><?php echo get_field('button_text'); ?></button>
		<hr>
		<div class="car-intro__inner">
			<div class="car-intro__line flex flex-row">
				<div class="car-intro__line-image">
					<?php
						$spec_image = get_field('intro_image_1');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="car-intro__line-content">
					<?php echo get_field('intro_text_1'); ?>
				</div>
			</div>
			<div class="car-intro__line flex flex-row-reverse">
				<div class="car-intro__line-image">
					<?php
						$spec_image = get_field('intro_image_2');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="car-intro__line-content">
					<?php echo get_field('intro_text_2'); ?>
				</div>
			</div>
			<div class="car-intro__line flex flex-row">
				<div class="car-intro__line-image">
					<?php
						$spec_image = get_field('intro_image_3');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="car-intro__line-content">
					<?php echo get_field('intro_text_3'); ?>
				</div>
			</div>
			<?php if(get_field('intro_text_4')){ ?>
			<div class="car-intro__line flex flex-row-reverse">
				<div class="car-intro__line-image">
					<?php
						$spec_image = get_field('intro_image_4');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="car-intro__line-content">
					<?php echo get_field('intro_text_4'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('intro_text_5')){ ?>
			<div class="car-intro__line flex">
				<div class="car-intro__line-image">
					<?php
						$spec_image = get_field('intro_image_5');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="car-intro__line-content">
					<?php echo get_field('intro_text_5'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('intro_text_6')){ ?>
			<div class="car-intro__line flex flex-row-reverse">
				<div class="car-intro__line-image">
					<?php
						$spec_image = get_field('intro_image_6');
						echo render_responsive_picture($spec_image, ' ');
					?>
				</div>
				<div class="car-intro__line-content">
					<?php echo get_field('intro_text_6'); ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>

	<section class="car-interior flex flex-column centered">
		<div class="container">
			<hr>
			<?php echo get_field('gallery_content'); ?>
		</div>
		<div class="car-interior__slider-container" data-interior-slider aria-live="polite">
			<div class="car-interior__slider-track">
			<?php if(get_field('slide_1_image')) { ?>
			<div class="car-interior__slider-slide" role="group" aria-label="1 / 3">
				<?php
					$spec_image = get_field('slide_1_image');
					echo render_responsive_picture($spec_image, ' ');
				?>
				<div class="car-interior__slider-caption">
					<?php echo get_field('slide_1_content'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('slide_2_image')) { ?>
			<div class="car-interior__slider-slide" role="group" aria-label="2 / 3">
				<?php
					$spec_image = get_field('slide_2_image');
					echo render_responsive_picture($spec_image, ' ');
				?>
				<div class="car-interior__slider-caption">
					<?php echo get_field('slide_2_content'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('slide_3_image')) { ?>
			<div class="car-interior__slider-slide" role="group" aria-label="3 / 3">
				<?php
					$spec_image = get_field('slide_3_image');
					echo render_responsive_picture($spec_image, ' ');
				?>
				<div class="car-interior__slider-caption">
					<?php echo get_field('slide_3_content'); ?>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="car-interior__slider-tabs">
			<?php if(get_field('slide_1_image') && get_field('slide_2_image')) { ?>
			<button class="car-interior__slider-tabs-tab active" data-interior-tab="0"><img src="<?php echo get_field('slide_1_image')['sizes']['thumbnail']; ?>" /></button>
			<?php } ?>
			<?php if(get_field('slide_2_image')) { ?>
			<button class="car-interior__slider-tabs-tab" data-interior-tab="1"><img src="<?php echo get_field('slide_2_image')['sizes']['thumbnail']; ?>"></button>
			<?php } ?>
			<?php if(get_field('slide_3_image')) { ?>
			<button class="car-interior__slider-tabs-tab" data-interior-tab="2"><img src="<?php echo get_field('slide_3_image')['sizes']['thumbnail']; ?>"></button>
			<?php } ?>
		</div>
	</section>

	<section class="car-specifications centered container">
		<button type="button" data-popup="test-drive" class="button button--dark"><?php echo get_field('button_text'); ?></button>
		<hr>
		<div class="car-specifications__wrapper">
			<div class="car-specifications__line flex flex-row">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="<?php echo get_field('detailed_image_1')['sizes']['large']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php get_field('detailed_image_1')['sizes']['large']; ?>" media="(min-width: 1200px)">
						<img decoding="async" src="<?php echo get_field('detailed_image_1')['sizes']['large']; ?>" alt="<?php echo get_field('detailed_image_1')['alt'] ?>">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<?php echo get_field('detailed_content_1'); ?>
				</div>
			</div>
			<div class="car-specifications__line flex flex-row-reverse">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="<?php echo get_field('detailed_image_2')['sizes']['large']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php get_field('detailed_image_2')['sizes']['large']; ?>" media="(min-width: 1200px)">
						<img decoding="async" src="<?php echo get_field('detailed_image_2')['sizes']['large']; ?>" alt="<?php echo get_field('detailed_image_2')['alt'] ?>">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<?php echo get_field('detailed_content_2'); ?>
				</div>
			</div>
			<?php if(get_field('detailed_content_3')){ ?>
			<div class="car-specifications__line flex flex-row">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="<?php echo get_field('detailed_image_3')['sizes']['large']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php get_field('detailed_image_3')['sizes']['large']; ?>" media="(min-width: 1200px)">
						<img decoding="async" src="<?php echo get_field('detailed_image_3')['sizes']['large']; ?>" alt="<?php echo get_field('detailed_image_3')['alt'] ?>">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<?php echo get_field('detailed_content_3'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('detailed_content_4')){ ?>
			<div class="car-specifications__line flex flex-row-reverse">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="<?php echo get_field('detailed_image_4')['sizes']['large']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php get_field('detailed_image_4')['sizes']['large']; ?>" media="(min-width: 1200px)">
						<img decoding="async" src="<?php echo get_field('detailed_image_4')['sizes']['large']; ?>" alt="<?php echo get_field('detailed_image_4')['alt'] ?>">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<?php echo get_field('detailed_content_4'); ?>
				</div>
			</div>
			<?php } ?>
			<?php if(get_field('detailed_content_5')){ ?>
			<div class="car-specifications__line flex flex-row">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="<?php echo get_field('detailed_image_5')['sizes']['large']; ?>" media="(min-width: 1400px)">
						<source srcset="<?php get_field('detailed_image_5')['sizes']['large']; ?>" media="(min-width: 1200px)">
						<img decoding="async" src="<?php echo get_field('detailed_image_5')['sizes']['large']; ?>" alt="<?php echo get_field('detailed_image_5')['alt'] ?>">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<?php echo get_field('detailed_content_5'); ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>

	<section class="car-interior-gallery">
		<?php if(get_field('slider_content')) { ?>
		<div class="container centered">
			<hr>
			<?php echo get_field('slider_content'); ?>
		</div>
		<?php } ?>
		<?php if(get_field('slide_image_1')) { ?>
		<div class="car-interior-gallery-wrapper">
			<div class="hero__slider" data-hero-slider>
				<div class="hero__track">
					<?php if(get_field('slide_image_1')) { ?>
					<article class="hero__slide hero__slide--one">
						<?php
							$spec_image = get_field('slide_image_1');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>
					<?php } ?>
					<?php if(get_field('slide_image_2')) { ?>
					<article class="hero__slide hero__slide--two">
						<?php
							$spec_image = get_field('slide_image_2');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>
					<?php } ?>
					<?php if(get_field('slide_image_3')) { ?>
					<article class="hero__slide hero__slide--three">
						<?php
							$spec_image = get_field('slide_image_3');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>
					<?php } ?>
					<?php if(get_field('slide_image_4')) { ?>
					<article class="hero__slide hero__slide--four">
						<?php
							$spec_image = get_field('slide_image_4');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>
					<?php } ?>
				</div>

				<div class="hero__meta">
					<div class="hero__indicator" role="tablist">
						<?php if(get_field('slide_image_1')) { ?>
						<button class="hero__dot is-active" type="button" aria-label="Slide 1" data-hero-dot="0"></button>
						<?php } ?>
						<?php if(get_field('slide_image_2')) { ?>
						<button class="hero__dot" type="button" aria-label="Slide 2" data-hero-dot="1"></button>
						<?php } ?>
						<?php if(get_field('slide_image_3')) { ?>
						<button class="hero__dot" type="button" aria-label="Slide 3" data-hero-dot="2"></button>
						<?php } ?>
						<?php if(get_field('slide_image_4')) { ?>
						<button class="hero__dot" type="button" aria-label="Slide 4" data-hero-dot="3"></button>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</section>

	<?php if(get_field('formos_turinys')) { ?>
	<section class="generic-booking"">
		<div class="container">
			<hr>
			<?php echo get_field('formos_turinys'); ?>
		</div>
	</section>
	<?php } ?>

	<div class="booking-popup" data-popup-id="test-drive">
		<div class="booking-popup__overlay"></div>
		<div class="booking-popup__content">
			<button class="booking-popup__close" aria-label="Close popup">×</button>
			<div class="booking-popup__body">
				
				<div class="container">
					<hr>
					<h2><?php echo get_field('button_text'); ?></h2>
					<?php echo do_shortcode('[contact-form-7 id="473d69b" title="Registruotis bandomajam važiavimui"]'); ?>
				</div>
			</div>
		</div>
    </div>

	<div class="booking-popup" data-popup-id="get-offer">
		<div class="booking-popup__overlay"></div>
		<div class="booking-popup__content">
			<button class="booking-popup__close" aria-label="Close popup">×</button>
			<div class="booking-popup__body">
				
				<div class="container">
					<hr>
					<h2>Prašyti pasiūlymo</h2>
					<?php echo do_shortcode('[contact-form-7 id="10e1f0b" title="Prašyti pasiūlymo"]'); ?>
				</div>
			</div>
		</div>
    </div>

	<div class="car-page__actions">
		<?php if(get_field('kainorastis')) { ?>
		<div class="car-page__actions-item">
			<a aria-label="Price list" class="car-page__actions-btn" href="<?php echo get_field('kainorastis')['url']; ?>" download>
				<img decoding="async" src="/wp-content/themes/dongfeng/assets/img/arrow-down.svg" alt="Kainoraštis">
			</a>
			<div class="car-page__actions-tooltip" role="tooltip">Kainoraštis</div>
		</div>          
		<?php } ?>                  
		<div class="car-page__actions-item">
			<button aria-label="Test drive" class="car-page__actions-btn" data-popup="test-drive">
				<img decoding="async" src="/wp-content/themes/dongfeng/assets/img/car.svg" alt="Bandomasis važevimas">
			</button>
			<div class="car-page__actions-tooltip" role="tooltip">Bandomasis važevimas</div>
		</div>                            
		<div class="car-page__actions-item">
			<button aria-label="Get an offer" class="car-page__actions-btn" data-popup="get-offer">
				<img decoding="async" src="/wp-content/themes/dongfeng/assets/img/file.svg" alt="Gauti pasiūlymą">
			</button>
			<div class="car-page__actions-tooltip" role="tooltip">Gauti pasiūlymą</div>
		</div>                   
	</div>

</main>

<?php
get_footer();
