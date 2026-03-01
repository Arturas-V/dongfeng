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
?>

<main id="site-content" class="car-page">

	<?php get_template_part( 'template-parts/hero', get_post_type() ); ?>

	<section class="car-specs-bar">
		<div class="car-specs__car-image">
			<picture class="car-specs__car-image-img"">
				<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sizes-1.jpg" media="(min-width: 1400px)">
				<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sizes-1.jpg" media="(min-width: 1200px)">
				<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sizes-1-1200x800.jpg" alt="Urban electric car Dongfeng Box in blue color with white roof">
			</picture>
		</div>
		<div class="car-specs-bar__inner">
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label">Ilgis</span>
				<span class="car-specs-bar__value">3333 mm</span>
			</div>
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label">Plotis</span>
				<span class="car-specs-bar__value">4442 mm</span>
			</div>
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label">Aukštis</span>
				<span class="car-specs-bar__value">234 mm</span>
			</div>
			<div class="car-specs-bar__item">
				<span class="car-specs-bar__label">Važiuoklės bazė</span>
				<span class="car-specs-bar__value">2323 mm</span>
			</div>
		</div>
	</section>

	<section class="flex flex-center car-features">
		<a href="" class="button button--dark">Registruotis bandomajam važiavimui</a>

		<div class="car-features__wrap flex">
			<div class="car-features__wrap-item">
				<picture class="car-features__wrap-item-image flex flex-center">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2.jpg" media="(min-width: 1400px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2.jpg" media="(min-width: 1200px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2-780x604.jpg" media="(min-width: 992px)">
					<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2-780x604.jpg" alt="Bright yellow electric car Dongfeng Box driving down city street — a stylish and eco-friendly solution for everyday life">
				</picture>

				<div class="car-features__wrap-item-text">
					<h2>Sustainable and dynamic</h2>
					<p>Small, smart, and 100% electric: all this makes sustainability even more elegant and easier to integrate into everyday life. Drive through city streets, park effortlessly, and enjoy its attractive looks. Join the future of driving in style, and be environmentally efficient. Sustainability has never been so easy. The top-tier version comes with a 95 horsepower electric motor and a 42.3 kWh battery that promises some 310 kilometres per charge as per the WLTP driving cycle.</p>
				</div>
			</div>
			<div class="car-features__wrap-item">
				<picture class="car-features__wrap-item-image flex flex-center">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2.jpg" media="(min-width: 1400px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2.jpg" media="(min-width: 1200px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2-780x604.jpg" media="(min-width: 992px)">
					<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Sustainable-2-780x604.jpg" alt="Bright yellow electric car Dongfeng Box driving down city street — a stylish and eco-friendly solution for everyday life">
				</picture>

				<div class="car-features__wrap-item-text">
					<h2>Sustainable and dynamic</h2>
					<p>Small, smart, and 100% electric: all this makes sustainability even more elegant and easier to integrate into everyday life. Drive through city streets, park effortlessly, and enjoy its attractive looks. Join the future of driving in style, and be environmentally efficient. Sustainability has never been so easy. The top-tier version comes with a 95 horsepower electric motor and a 42.3 kWh battery that promises some 310 kilometres per charge as per the WLTP driving cycle.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="car-gallery centered">
		<hr>
		<h2 class="car-gallery__title">Colours with personality</h2>
		<p class="car-gallery__tagline">Choose from a unique colour palette that will make your car visible in the city and give it a unique flair.</p>
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
		<a href="" class="button button--dark">Registruotis bandomajam važiavimui</a>
		<hr>
		<div class="car-intro__inner">
			<div class="car-intro__line flex flex-row">
				<div class="car-intro__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Doors.jpg" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Doors-1200x900.jpg" alt="Frameless side door of Dongfeng Box car">
					</picture>
				</div>
				<div class="car-intro__line-content">
					<h3>Frameless doors</h3>
					<p>Elegant and modern, frameless doors give a refined and smooth look to Box, highlighting its premium nature.</p>
				</div>
			</div>
			<div class="car-intro__line flex flex-row-reverse">
				<div class="car-intro__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Lights.jpg" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Lights-1200x900.jpg" alt="LED headlight with expressive design">
					</picture>
				</div>
				<div class="car-intro__line-content">
					<h3>Elegant lights</h3>
					<p>The attractive design of the headlights creates a friendly and stylish look, providing excellent visibility and attractive lighting.</p>
				</div>
			</div>
			<div class="car-intro__line flex flex-row">
				<div class="car-intro__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Handles.webp" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Handles.webp" alt="Retractable door handles integrated into Dongfeng Box body">
					</picture>
				</div>
				<div class="car-intro__line-content">
					<h3>Hidden door handles</h3>
					<p>Smooth and futuristic, the hidden door handles blend with the car’s visual design, for an elegant and innovative exterior.</p>
				</div>
			</div>
			<div class="car-intro__line flex flex-row-reverse">
				<div class="car-intro__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/df-box-2-colors-2.jpg" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/df-box-2-colors-2-1200x900.jpg" alt="Top view of Dongfeng Box with two-tone body and contrasting roof">
					</picture>
				</div>
				<div class="car-intro__line-content">
					<h3>Two-colour body option</h3>
					<p>The two-colour combination makes Dongfeng BOX even more appealing with contrasting roof and body combinations.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="car-interior flex flex-column centered">
		<hr>
		<h2 class="car-interior__title">Eco-friendly and elegant interiors</h2>
		<p class="car-interior__tagline container">The interior of Dongfeng BOX impresses with the combination of comfort and modern design that it offers. Diamond-stitched leather trim and an improved infotainment touchscreen deliver a premium high-tech experience.</p>
		<div class="car-interior__slider-container" data-interior-slider aria-live="polite">
			<div class="car-interior__slider-track">
			<div class="car-interior__slider-slide" role="group" aria-label="1 / 3">
				<picture>
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-BlackWhite.jpg" media="(min-width: 1200px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-BlackWhite.jpg" media="(min-width: 992px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-BlackWhite.jpg" media="(min-width: 768px)">
					<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-BlackWhite.jpg" alt="">
				</picture>
				<div class="car-interior__slider-caption">
					<h3>Black with white</h3>
					<p>The black and white interior creates a bold contrast. The seats and trim have dark black and bright white elements with smooth seams resulting in a modern look.</p>
				</div>
			</div>
			<div class="car-interior__slider-slide" role="group" aria-label="2 / 3">
				<picture>
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Black.jpg" media="(min-width: 1200px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Black.jpg" media="(min-width: 992px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Black.jpg" media="(min-width: 768px)">
					<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Black.jpg" alt="">
				</picture>
				<div class="car-interior__slider-caption">
					<h3>Black with dark grey</h3>
					<p>The neutral tones offer a balanced and modern look, a perfect fit for all tastes.</p>
				</div>
			</div>
			<div class="car-interior__slider-slide" role="group" aria-label="3 / 3">
				<picture>
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Violet.jpg" media="(min-width: 1200px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Violet.jpg" media="(min-width: 992px)">
					<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Violet.jpg" media="(min-width: 768px)">
					<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Violet.jpg" alt="">
				</picture>
				<div class="car-interior__slider-caption">
					<h3>Black with light purple</h3>
					<p>The gentle lavender tones with bold white create for a unique and dynamic look. Purple highlights on the seats, dashboard, and trim add a flair of individuality and elegance.</p>
				</div>
			</div>
			</div>
		</div>
		<div class="car-interior__slider-tabs">
			<button class="car-interior__slider-tabs-tab active" data-interior-tab="0"><img src="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-BlackWhite.jpg" /></button>
			<button class="car-interior__slider-tabs-tab" data-interior-tab="1"><img src="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Black.jpg"></button>
			<button class="car-interior__slider-tabs-tab" data-interior-tab="2"><img src="https://dongfengwess.lv/wp-content/uploads/2024/11/Df-Box-Interior-Violet.jpg"></button>
		</div>
	</section>

	<section class="car-specifications centered container">
		<a href="" class="button button--dark">Registruotis bandomajam važiavimui</a>
		<hr>
		<div class="car-specifications__wrapper">
			<div class="car-specifications__line flex flex-row">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1400px)">
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" alt="Dongfeng Box interior with diamond quilting on panel and doors">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<h3>Refinement in details</h3>
					<p>The interior trim has diamond stitching that creates a stronger feel of refinement and comfort. This elaborate pattern is used on the seats, door panels, and some other parts of the trim, creating a luxurious texture that stands out while discreetly blending with the overall aesthetic of the interior.</p>
				</div>
			</div>
			<div class="car-specifications__line flex flex-row-reverse">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1400px)">
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" alt="Dongfeng Box interior with diamond quilting on panel and doors">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<h3>Refinement in details</h3>
					<p>The interior trim has diamond stitching that creates a stronger feel of refinement and comfort. This elaborate pattern is used on the seats, door panels, and some other parts of the trim, creating a luxurious texture that stands out while discreetly blending with the overall aesthetic of the interior.</p>
				</div>
			</div>
			<div class="car-specifications__line flex flex-row">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1400px)">
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" alt="Dongfeng Box interior with diamond quilting on panel and doors">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<h3>Refinement in details</h3>
					<p>The interior trim has diamond stitching that creates a stronger feel of refinement and comfort. This elaborate pattern is used on the seats, door panels, and some other parts of the trim, creating a luxurious texture that stands out while discreetly blending with the overall aesthetic of the interior.</p>
				</div>
			</div>
			<div class="car-specifications__line flex flex-row-reverse">
				<div class="car-specifications__line-image">
					<picture>
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1400px)">
						<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" media="(min-width: 1200px)">
						<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-InteriorEco-768x576.jpg" alt="Dongfeng Box interior with diamond quilting on panel and doors">
					</picture>
				</div>
				<div class="car-specifications__line-content flex flex-column">
					<h3>Refinement in details</h3>
					<p>The interior trim has diamond stitching that creates a stronger feel of refinement and comfort. This elaborate pattern is used on the seats, door panels, and some other parts of the trim, creating a luxurious texture that stands out while discreetly blending with the overall aesthetic of the interior.</p>
				</div>
			</div>
		</div>
		<hr>
	</section>

	<section class="car-interior-gallery">
		<div class="container centered">
			<h2 class="car-interior-gallery__title">Comfort as a standard feature</h2>
			<p class="car-interior-gallery__tagline">Enjoy comfort in BOX with a luxurious driver’s seat equipped with heating, ventilation, and memory mode. Its compact design offers plenty of space even for taller passengers, and the advanced audio system delivers an excellent driving experience. The front seats can be folded down to create a comfortable resting area in the rear.</p>
		</div>
		<div class="car-interior-gallery-wrapper">
			<div class="hero__slider" data-hero-slider>
				<div class="hero__track">
					<article class="hero__slide hero__slide--one">
						<picture>
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-1.webp" media="(min-width: 1400px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-1-1440x810.webp" media="(min-width: 1200px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-1-1200x675.webp" media="(min-width: 992px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-1-1000x563.webp" media="(min-width: 768px)">
							<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-1-780x439.webp" alt="Smiling couple in modern Dongfeng Box cabin with light-colored panel finish">
						</picture>
					</article>

					<article class="hero__slide hero__slide--two">
						<picture>
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-2.webp" media="(min-width: 1400px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-2-1440x960.webp" media="(min-width: 1200px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-2-1200x800.webp" media="(min-width: 992px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-2-1000x667.webp" media="(min-width: 768px)">
							<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/Dongfeng-BOX-EV-2-780x520.webp" alt="Woman sitting in Dongfeng Box cabin where front seats are folded to create relaxation area">
						</picture>
					</article>

					<article class="hero__slide hero__slide--three">
						<picture>
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort3.jpg" media="(min-width: 1400px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort3.jpg" media="(min-width: 1200px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort3-1200x694.jpg" media="(min-width: 992px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort3-1000x578.jpg" media="(min-width: 768px)">
							<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort3-780x451.jpg" alt="Family enjoying ride in comfortable interior of Dongfeng Box electric car">
						</picture>
					</article>

					<article class="hero__slide hero__slide--four">
						<picture>
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort2.jpg" media="(min-width: 1400px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort2.jpg" media="(min-width: 1200px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort2-1200x674.jpg" media="(min-width: 992px)">
							<source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort2-1000x562.jpg" media="(min-width: 768px)">
							<img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/DF-Box-Comfort2-780x438.jpg" alt="Mother and daughter spending cozy time in spacious Dongfeng Box trunk against city backdrop">
						</picture>
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


</main>

<?php
get_footer();
