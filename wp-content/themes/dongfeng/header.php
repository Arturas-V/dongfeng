<?php
/**
 * Header file for the Dongfeng Lietuva theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

$main_data = $args['main_data'] ?? [];

// var_dump();

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
		<link rel="manifest" href="/site.webmanifest" />

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="site-header__upper flex flex-row">
			<div class="site-header__upper-left">
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				<?php endif; ?>
			</div>
			<div class="site-header__upper-right">
				<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				<?php endif; ?>
			</div>
		</div>

		<header class="site-header" id="site-header">
			
			<div class="site-header__inner">
				<div class="site-header__brand">
					<?php
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						the_custom_logo();
					} else {
						?>
						<span class="site-header__logo-text">Dongfeng</span>
						<?php
					}
					?>
					<span class="site-header__logo-sub"><span class="site-header__logo-brand"><img class="site-header__logo-brand-img" src="/wp-content/uploads/2026/03/logo2020.png" alt="DOW" />DOW</span></span>
				</div>

				<div class="mobile-menu-button" id="mobile-menu-button">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>

				<nav class="site-header__nav" aria-label="Primary">
					<div class="menu-item menu-item-toggle">
						<span class="menu-item_link">Modeliai</span>
						<ul class="sub-menu sub-menus__models">

							<li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children brand-slider"><div class="brand"><div class="brand-content"><img src="/wp-content/uploads/2026/03/dongfeng-menu-logo-200x80-1.png" alt="Dongfeng logotips"><span class="title"></span><span class="sub-title">ICE | HEV | BEV</span><span class="brand-name">Dongfeng</span></div></div>
							<div class="swiper swiper-menu-item-0 swiper-initialized swiper-horizontal swiper-pointer-events">
								<ul class="swiper-wrapper" id="swiper-wrapper-1944de2b3b1d6c43" aria-live="polite" >

									<li class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3">
										<a href="/dongfeng-box/" style=""><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/fuel-type/electric.png" alt="electric"></div><div class="labels"><span class="red">OFFER!</span></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/box-menu-240x135-1.png" alt="Dongfeng Box"></div><span class="title">Box</span><span class="sub-title">from 21 980 €</span></div></div></a>
									</li>
									<li class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3">
										<a href="/dongfeng-mage"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/petrol.png" alt="ice"><img src="/wp-content/uploads/2026/03/hybrid.png" alt="hybrid"></div><div class="labels"><span class="grey">Debut!</span></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/mage_green-240x135-1.png" alt="Dongfeng Mage"></div><span class="title">Mage</span><span class="sub-title">from 24 990  €</span></div></div></a>
									</li>
									<li class="swiper-slide" role="group" aria-label="3 / 3">
										<a href="/dongfeng-huge"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/petrol.png" alt="ice"><img src="/wp-content/uploads/2026/03/hybrid.png" alt="hybrid"></div><div class="labels"><span class="grey">Debut!</span></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/huge-trang-den-1-240x139-1.png" alt="Dongfeng Huge"></div><span class="title">Huge</span><span class="sub-title">from 29 990 €</span></div></div></a>
									</li>

								</ul>

								<div class="swiper-button-prev swiper-button-prev-0 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-1944de2b3b1d6c43" aria-disabled="true"></div><div class="swiper-button-next swiper-button-next-0 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-1944de2b3b1d6c43" aria-disabled="true"></div></span></span></span></span></span></span></div>
							</li>
							<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children brand-slider"><div class="brand"><div class="brand-content"><img src="/wp-content/uploads/2026/03/forthing-menu-logo-200x80-1.png" alt="Forthing logotips"><span class="title"></span><span class="sub-title">ICE | HEV | BEV</span><span class="brand-name">Forthing</span></div></div>
							<div class="swiper swiper-menu-item-1 swiper-initialized swiper-horizontal swiper-pointer-events">
								<ul class="swiper-wrapper" id="swiper-wrapper-10657f7108acc176e5" aria-live="polite" >
									<li class="swiper-slide swiper-slide-active"  role="group" aria-label="1 / 4">
										<a href="/forthing-t5-evo"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/petrol.png" alt="ice"><img src="/wp-content/uploads/2026/03/hybrid.png" alt="hybrid"></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/t5evo-menu-240x135-1.png" alt="Forthing T5 EVO"></div><span class="title">T5 Evo</span><span class="sub-title">from 27 490 €</span></div></div></a>
									</li>
									<li class="swiper-slide swiper-slide-next"  role="group" aria-label="2 / 4">
										<a href="/forthing-u-tour"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/petrol.png" alt="ice"><img src="/wp-content/uploads/2026/03/hybrid.png" alt="hybrid"></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/utour-menu-240x135-1.png" alt="Forthin U-TOUR"></div><span class="title">U-TOUR (M4)</span><span class="sub-title">from 33 990 €</span></div></div></a>
									</li>
									<li class="swiper-slide"  role="group" aria-label="3 / 4">
										<a href="/forthing-v9"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/hybrid.png" alt="hybrid"></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/V9-240x135-1.png" alt=""></div><span class="title">Forthing V9</span><span class="sub-title">49 990 €</span></div></div></a>
									</li>
									<li class="swiper-slide"  role="group" aria-label="4 / 4">
										<a href="/forthing-s7"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/electric.png" alt="electric"></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/s7-240x135-1.png" alt=""></div><span class="title">Forthing S7</span><span class="sub-title">from 39 990 €</span></div></div></a>
									</li>
								</ul>
							<div class="swiper-button-prev swiper-button-prev-1 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-10657f7108acc176e5" aria-disabled="true"></div><div class="swiper-button-next swiper-button-next-1 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-10657f7108acc176e5" aria-disabled="true"></div></span></span></span></span></span></span></div>
							</li>
							<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children brand-slider"><div class="brand"><div class="brand-content"><img src="/wp-content/uploads/2026/03/voyah-menu-logo-200x80-1.png" alt="Voyah logotips"><span class="title">Premium</span><span class="sub-title">REV | PHEV | BEV</span><span class="brand-name">Voyah</span></div></div>
							<div class="swiper swiper-menu-item-2 swiper-initialized swiper-horizontal swiper-pointer-events">
								<ul class="swiper-wrapper" id="swiper-wrapper-48e610cc106c5e638d" aria-live="polite" >
									<li class="swiper-slide swiper-slide-active"  role="group" aria-label="1 / 2">
										<a href="/voyah-dream"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/electric.png" alt="electric"></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/dream-menu-240x135-1.png" alt="Voyah Dream"></div><span class="title">Voyah Dream</span><span class="sub-title">from 96 990 €</span></div></div></a>
									</li>
									<li class="swiper-slide swiper-slide-next"  role="group" aria-label="2 / 2">
										<a href="/voyah-courage"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/electric.png" alt="electric"></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/courage-menu-240x135-1.png" alt="Voyah Courage"></div><span class="title">Voyah Courage</span><span class="sub-title">from 46 990 €</span></div></div></a>
									</li>
								</ul>
							<div class="swiper-button-prev swiper-button-prev-2 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-48e610cc106c5e638d" aria-disabled="true"></div><div class="swiper-button-next swiper-button-next-2 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-48e610cc106c5e638d" aria-disabled="true"></div></span></span></span></span></span></span></div>
							</li>
							<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children brand-slider"><div class="brand"><div class="brand-content"><img src="/wp-content/uploads/2026/03/mhero-logo-menu-200x80-1.png" alt="M-Hero"><span class="title">Luxury Off-Road</span><span class="sub-title">REV | PHEV | BEV</span><span class="brand-name">MHERO</span></div></div>
							<div class="swiper swiper-menu-item-3 swiper-initialized swiper-horizontal swiper-pointer-events">
								<ul class="swiper-wrapper" id="swiper-wrapper-b8435210934510d25f" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
									<li class="swiper-slide swiper-slide-active"  role="group" aria-label="1 / 1">
										<a href="/mhero"><div class="model"><div><div class="fuel-types"><img src="/wp-content/uploads/2026/03/electric.png" alt="electric"></div></div><div class="car"><div><img src="/wp-content/uploads/2026/03/mhero-menu-1-240x135-1.png" alt="M-Hero"></div><span class="title">MHERO</span><span class="sub-title">169 990 €</span></div></div></a>
									</li>
								</ul>
							<div class="swiper-button-prev swiper-button-prev-3 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b8435210934510d25f" aria-disabled="true"></div><div class="swiper-button-next swiper-button-next-3 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b8435210934510d25f" aria-disabled="true"></div></span></span></span></span></span></span></div>
							</li>
						</ul>
					</div>
					<div class="menu-item menu-item-toggle">
						<span class="menu-item_link">Servisas ir Garantija</span>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary_2',
								'container'      => false,
								'menu_class'     => 'sub-menu'
							)
						);
						?>
					</div>
					<div class="menu-item menu-item-toggle">
						<span class="menu-item_link">Savininkams</span>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary_3',
								'container'      => false,
								'menu_class'     => 'sub-menu'
							)
						);
						?>
					</div>
					<div class="menu-item menu-item-toggle">
						<span class="menu-item_link">Apie Mus</span>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary_4',
								'container'      => false,
								'menu_class'     => 'sub-menu'
							)
						);
						?>
					</div>
					<div class="menu-item menu-item-toggle">
						<span class="menu-item_link">Pasiūlymai</span>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary_5',
								'container'      => false,
								'menu_class'     => 'sub-menu'
							)
						);
						?>
					</div>
					<div class="desktop-hide site-header__nav-mobile">
						<div class="site-header__upper-left">
							<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
								<?php dynamic_sidebar( 'sidebar-4' ); ?>
							<?php endif; ?>
						</div>
						<div class="site-header__upper-right">
							<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
								<?php dynamic_sidebar( 'sidebar-3' ); ?>
							<?php endif; ?>
						</div>
					</div>
				</nav>
			</div>
		</header>

	
