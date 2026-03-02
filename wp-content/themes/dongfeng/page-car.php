<?php
/**
 * Template Name: Car Page
 * Car model page template for the Dongfeng Lietuva theme.
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

get_header();


// Add to functions.php
function render_responsive_picture($image_field, $class = '', $sizes = []) {
    if (!$image_field) return '';
    
    // Default sizes if none provided
    $default_sizes = [
        'desktop' => '2048x2048',
        'laptop' => 'post-thumbnail',
        'tablet' => 'large',
        'mobile' => 'medium_large'
    ];
    
    // Merge custom sizes with defaults
    $sizes = array_merge($default_sizes, $sizes);
    
    // Get alt text
    $alt = $image_field['alt'] ?: '';
    
    ob_start();
    ?>
    <picture class="<?php echo esc_attr($class); ?>">
        <source 
            srcset="<?php echo esc_url($image_field['sizes'][$sizes['desktop']]); ?>" 
            media="(min-width: 1200px)"
        >
        <source 
            srcset="<?php echo esc_url($image_field['sizes'][$sizes['laptop']]); ?>" 
            media="(min-width: 1024px)"
        >
        <source 
            srcset="<?php echo esc_url($image_field['sizes'][$sizes['tablet']]); ?>" 
            media="(min-width: 768px)"
        >
        <img 
            src="<?php echo esc_url($image_field['sizes'][$sizes['mobile']]); ?>" 
            alt="<?php echo esc_attr($alt); ?>"
            decoding="async"
            loading="lazy"
        >
    </picture>
    <?php
    return ob_get_clean();
}
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
		<button href="" class="button button--dark"><?php echo get_field('button_text'); ?></button>

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

	<section class="car-gallery centered">
		<div class="container">
			<hr>
			<?php echo get_field('colours_title_and_tagline'); ?>
		</div>
		
		<div class="car-gallery__slider" data-car-gallery>
			<div class="car-gallery__viewport flex flex-center">
				<picture class="car-gallery__viewport--background">
                    <source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/box-background-1440x810.png" media="(min-width: 1400px)">
                    <source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/box-background-1200x675.png" media="(min-width: 1200px)">
                    <source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/box-background-1000x563.png" media="(min-width: 992px)">
                    <source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/box-background-780x439.png" media="(min-width: 768px)">
                    <img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-background-375x211.png" alt="">
                </picture>
			</div>
		</div>
		<div class="car-gallery__tabs flex flex-center">
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-green-2.png" data-color="rgba(185,227,78,0.65)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-green-color-2.png" alt="">
				<span>Yellow</span>
			</button>
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-blue-2.png" data-color="rgba(149,177,191,0.65)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-blue-color-2.png" alt="">
				<span>Blue</span>
			</button>
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-white-2.png" data-color="rgba(0,0,0,0.35)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-white-color-2.png" alt="">
				<span>White</span>
			</button>
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-grey.png" data-color="rgba(170,180,191,0.25)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-grey-color-2.png" alt="">
				<span>Grey</span>
			</button>
			<button class="car-gallery__tabs-tab active" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-greenwhite-3.png" data-color="rgba(185,227,78,0.25)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-greenwhite-color-2.png" alt="">
				<span>Yellow with white</span>
			</button>
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-violetwhite-2.png" data-color="rgba(152,93,173,0.25)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-violetwhite-color-2-1.png" alt="">
				<span>Purple with white</span>
			</button>
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-bluewhite-2.png" data-color="rgba(149,177,191,0.25)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-bluewhite-color-2.png" alt="">
				<span>Blue with white</span>
			</button>
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-red-2.png" data-color="rgba(221,82,82,0.29)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-redwhite-color-2.png" alt="">
				<span>Red</span>
			</button>
			<button class="car-gallery__tabs-tab" data-car-image="https://dongfengwess.lv/wp-content/uploads/2024/11/box-pink-2.png" data-color="rgba(221,126,126,0.3)" tabindex="0">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/box-ROSEwhite-color-2.png" alt="">
				<span>Pink</span>
			</button>
		</div>
	</section>

	<section class="car-intro container">
		<button href="" class="button button--dark"><?php echo get_field('button_text'); ?></button>
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
		</div>
	</section>

	<section class="car-interior flex flex-column centered">
		<div class="container">
			<hr>
			<?php echo get_field('gallery_content'); ?>
		</div>
		<div class="car-interior__slider-container" data-interior-slider aria-live="polite">
			<div class="car-interior__slider-track">
			<div class="car-interior__slider-slide" role="group" aria-label="1 / 3">
				<?php
					$spec_image = get_field('slide_1_image');
					echo render_responsive_picture($spec_image, ' ');
				?>
				<div class="car-interior__slider-caption">
					<?php echo get_field('slide_1_content'); ?>
				</div>
			</div>
			<div class="car-interior__slider-slide" role="group" aria-label="2 / 3">
				<?php
					$spec_image = get_field('slide_2_image');
					echo render_responsive_picture($spec_image, ' ');
				?>
				<div class="car-interior__slider-caption">
					<?php echo get_field('slide_2_content'); ?>
				</div>
			</div>
			<div class="car-interior__slider-slide" role="group" aria-label="3 / 3">
				<?php
					$spec_image = get_field('slide_3_image');
					echo render_responsive_picture($spec_image, ' ');
				?>
				<div class="car-interior__slider-caption">
					<?php echo get_field('slide_3_content'); ?>
				</div>
			</div>
			</div>
		</div>
		<div class="car-interior__slider-tabs">
			<button class="car-interior__slider-tabs-tab active" data-interior-tab="0"><img src="<?php echo get_field('slide_1_image')['sizes']['thumbnail']; ?>" /></button>
			<button class="car-interior__slider-tabs-tab" data-interior-tab="1"><img src="<?php echo get_field('slide_2_image')['sizes']['thumbnail']; ?>"></button>
			<button class="car-interior__slider-tabs-tab" data-interior-tab="2"><img src="<?php echo get_field('slide_3_image')['sizes']['thumbnail']; ?>"></button>
		</div>
	</section>

	<section class="car-specifications centered container">
		<button href="" class="button button--dark"><?php echo get_field('button_text'); ?></button>
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
		</div>
		<hr>
	</section>

	<section class="car-interior-gallery">
		<div class="container centered">
			<?php echo get_field('slider_content'); ?>
		</div>
		<div class="car-interior-gallery-wrapper">
			<div class="hero__slider" data-hero-slider>
				<div class="hero__track">
					<article class="hero__slide hero__slide--one">
						<?php
							$spec_image = get_field('slide_image_1');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>

					<article class="hero__slide hero__slide--two">
						<?php
							$spec_image = get_field('slide_image_2');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>

					<article class="hero__slide hero__slide--three">
						<?php
							$spec_image = get_field('slide_image_3');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>

					<article class="hero__slide hero__slide--four">
						<?php
							$spec_image = get_field('slide_image_4');
							echo render_responsive_picture($spec_image, ' ');
						?>
					</article>
				</div>

				<div class="hero__meta">
					<div class="hero__indicator" role="tablist">
						<button class="hero__dot is-active" type="button" aria-label="Slide 1" data-hero-dot="0"></button>
						<button class="hero__dot" type="button" aria-label="Slide 2" data-hero-dot="1"></button>
						<button class="hero__dot" type="button" aria-label="Slide 3" data-hero-dot="2"></button>
						<button class="hero__dot" type="button" aria-label="Slide 4" data-hero-dot="3"></button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="car-page__actions">
		<div class="car-page__actions-item">
			<button aria-label="Price list" class="car-page__actions-btn" data-action="price-list" data-file-url="<?php echo get_field('kainorastis'); ?>">
				<img decoding="async" src="/wp-content/themes/dongfeng/assets/img/arrow-down.svg" alt="Kainoraštis">
			</button>
			<div class="car-page__actions-tooltip" role="tooltip">Kainoraštis</div>
		</div>                            
		<div class="car-page__actions-item">
			<button aria-label="Test drive" class="car-page__actions-btn" data-action="test-drive">
				<img decoding="async" src="/wp-content/themes/dongfeng/assets/img/car.svg" alt="Bandomasis važevimas">
			</button>
			<div class="car-page__actions-tooltip" role="tooltip">Bandomasis važevimas</div>
		</div>                            
		<div class="car-page__actions-item">
			<button aria-label="Get an offer" class="car-page__actions-btn" data-action="get-offer">
				<img decoding="async" src="/wp-content/themes/dongfeng/assets/img/file.svg" alt="Gauti pasiūlymą">
			</button>
			<div class="car-page__actions-tooltip" role="tooltip">Gauti pasiūlymą</div>
		</div>                   
	</div>

</main>

<?php
get_footer();
