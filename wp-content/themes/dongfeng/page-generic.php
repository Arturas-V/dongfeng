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

	<section class="generic-intro">
		<div class="container">
			<h2 class="generic-intro__title">After-Sale Services</h2>
			<p class="generic-intro__text">Our certified technicians are trained to the highest standards, ensuring your Dongfeng vehicle receives the care it deserves. From routine maintenance to complex repairs, we've got you covered.</p>
		</div>
	</section>


	<section class="generic-cards">
		<div class="generic-cards__grid container">
			<article class="generic-card">
				<div class="generic-card__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/generic-maintenance.jpg" alt="Regular Maintenance">
				</div>
				<div class="generic-card__content">
					<h3 class="generic-card__title">Regular Maintenance</h3>
					<p class="generic-card__text">Keep your vehicle running smoothly with scheduled maintenance services including oil changes, filter replacements, brake inspections, and fluid checks.</p>
				</div>
			</article>

			<article class="generic-card">
				<div class="generic-card__content">
					<h3 class="generic-card__title">Electrical Diagnostics</h3>
					<p class="generic-card__text">Advanced diagnostic equipment to identify and resolve electrical issues, software updates, and electronic system calibrations.</p>
				</div>
				<div class="generic-card__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/generic-diagnostics.jpg" alt="Electrical Diagnostics">
				</div>
			</article>

			<article class="generic-card">
				<div class="generic-card__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/generic-bodywork.jpg" alt="Car Paint and Body Repairs">
				</div>
				<div class="generic-card__content">
					<h3 class="generic-card__title">Car Paint and Body Repairs</h3>
					<p class="generic-card__text">Professional body repairs and paint services to restore your vehicle to its original condition after accidents or wear.</p>
				</div>
			</article>

			<article class="generic-card">
				<div class="generic-card__content">
					<h3 class="generic-card__title">Dongfeng Detailing</h3>
					<p class="generic-card__text">Complete interior and exterior detailing services to keep your vehicle looking showroom-fresh, including ceramic coating and paint protection.</p>
				</div>
				<div class="generic-card__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/generic-detailing.jpg" alt="Dongfeng Detailing">
				</div>
			</article>
		</div>
	</section>


	<section class="generic-why">
		<div class="container">
			<h2 class="generic-why__title">Why Choose Our Service Center</h2>
			<div class="generic-why__grid">
				<div class="generic-why__item">
					<div class="generic-why__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<circle cx="12" cy="12" r="3"/>
							<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
						</svg>
					</div>
					<h3 class="generic-why__item-title">Certified Technicians</h3>
					<p class="generic-why__item-text">Factory-trained specialists with extensive knowledge of Dongfeng vehicles and systems.</p>
				</div>

				<div class="generic-why__item">
					<div class="generic-why__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
							<line x1="8" y1="21" x2="16" y2="21"/>
							<line x1="12" y1="17" x2="12" y2="21"/>
						</svg>
					</div>
					<h3 class="generic-why__item-title">Modern Equipment</h3>
					<p class="generic-why__item-text">State-of-the-art diagnostic tools and equipment for precise analysis and repairs.</p>
				</div>

				<div class="generic-why__item">
					<div class="generic-why__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
							<circle cx="12" cy="7" r="4"/>
						</svg>
					</div>
					<h3 class="generic-why__item-title">Customer Focus</h3>
					<p class="generic-why__item-text">Transparent communication, fair pricing, and commitment to your complete satisfaction.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="generic-booking" id="booking">
		<div class="container">
			<h2 class="generic-booking__title">Rezervacija</h2>

			<?php echo do_shortcode('[contact-form-7 id="8de8343" title="Rezervacija"]'); ?>

		</div>
	</section>

</main>

<?php
get_footer();
