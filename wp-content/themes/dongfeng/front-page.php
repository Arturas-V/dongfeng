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
		<div class="hero__slider" data-hero-slider>
			<div class="hero__track">
				<article class="hero__slide hero__slide--one">
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<p class="hero__eyebrow">Special leasing and affordable performance. Your family in comfort and safety on every trip.</p>
						<h1>Voyah Dream</h1>
						<div class="hero__actions">
							<a class="button button--light" href="#">Find out more</a>
						</div>
					</div>
				</article>

				<article class="hero__slide hero__slide--two">
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<p class="hero__eyebrow">Electric range that keeps up with your workweek and weekend escape.</p>
						<h1>Voyah Free EV</h1>
						<div class="hero__actions">
							<a class="button button--light" href="#">Find out more</a>
						</div>
					</div>
				</article>

				<article class="hero__slide hero__slide--three">
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<p class="hero__eyebrow">Premium hybrid performance for confident long-distance travel.</p>
						<h1>Voyah Passion</h1>
						<div class="hero__actions">
							<a class="button button--light" href="#">Find out more</a>
						</div>
					</div>
				</article>

				<article class="hero__slide hero__slide--four">
					<div class="hero__overlay"></div>
					<div class="hero__content">
						<p class="hero__eyebrow">City-focused agility with standout design and smart tech.</p>
						<h1>Dongfeng Mage</h1>
						<div class="hero__actions">
							<a class="button button--light" href="#">Find out more</a>
						</div>
					</div>
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
	</section>

	<section class="tabs">
		<button class="tabs__item is-active" type="button" data-tab="1">All cars</button>
		<button class="tabs__item" type="button" data-tab="2">Electric cars</button>
		<button class="tabs__item" type="button" data-tab="3">Hybrid cars</button>
		<button class="tabs__item" type="button" data-tab="4">Petrol / Diesel</button>
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

	<section class="split-section">
		<div class="container split-section__wrap">
			<div class="split-section__media">
				<div class="split-section__icon">◎</div>
			</div>
			<div class="split-section__content">
				<h2>About Dongfeng Motor</h2>
				<p>Dongfeng Motor is one of China’s leading manufacturers, delivering innovation, durability and sustainability in every model.</p>
				<p>Our models are carefully curated to meet the daily and long-distance needs of Lithuanian drivers while offering premium comfort.</p>
			</div>
		</div>
	</section>

	<section class="split-section split-section--reverse">
		<div class="container split-section__wrap">
			<div class="split-section__content">
				<h2>About Wess Select</h2>
				<p>As Wess Select we offer the best service, financing and ownership support for Dongfeng vehicles in the Baltics.</p>
				<p>Our experts will guide you through model selection, warranties and care so that your ownership is effortless.</p>
			</div>
			<div class="split-section__media split-section__media--light"></div>
		</div>
	</section>

	<section class="info-map">
		<div class="info-map__stats">
			<div class="stat-card">
				<h3 class="stat-card__title">30+ years of experience</h3>
				<p>Wess Select has been the trusted partner of premium automotive brands for decades.</p>
			</div>
		</div>
		<div class="info-map__map">
			<div class="info-map__map-pin">◎</div>
			<div class="info-map__map-pin">◎</div>
			<div class="info-map__map-pin">◎</div>
			<p class="info-map__caption">Showrooms across Lithuania</p>
		</div>
	</section>
</main>

<?php
get_footer();
