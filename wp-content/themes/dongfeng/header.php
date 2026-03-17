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

$main_fields = $args['main_data'] ?? [];

$icons = [
	'Elektromobilis' => ['electric.png', 'EV'],
	'Hibridas' => ['hybrid.png', 'HEV'],
	'Beznininis/dyzelinis' => ['petrol.png', 'ICE']
];

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="nxqaUCC4v9IVZeVq6sQdWvSqzrtiUGUtFnahIXVPG5w"/>

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
										<a href="<?php echo $main_fields['box_nuoroda']['value']['url']; ?>" style="">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['box_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['box_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['box_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['box_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['box_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['box_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['box_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['box_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3">
										<a href="<?php echo $main_fields['mage_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['mage_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['mage_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['mage_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['mage_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['mage_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['mage_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['mage_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['mage_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide" role="group" aria-label="3 / 3">
										<a href="<?php echo $main_fields['huge_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['huge_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['huge_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['huge_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['huge_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['huge_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['huge_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['huge_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['huge_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>

								</ul>

								<div class="swiper-button-prev swiper-button-prev-0 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-1944de2b3b1d6c43" aria-disabled="true"></div><div class="swiper-button-next swiper-button-next-0 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-1944de2b3b1d6c43" aria-disabled="true"></div></span></span></span></span></span></span></div>
							</li>
							<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children brand-slider"><div class="brand"><div class="brand-content"><img src="/wp-content/uploads/2026/03/forthing-menu-logo-200x80-1.png" alt="Forthing logotips"><span class="title"></span><span class="sub-title">ICE | HEV | BEV</span><span class="brand-name">Forthing</span></div></div>
							<div class="swiper swiper-menu-item-1 swiper-initialized swiper-horizontal swiper-pointer-events">
								<ul class="swiper-wrapper" id="swiper-wrapper-10657f7108acc176e5" aria-live="polite" >
									<li class="swiper-slide swiper-slide-active"  role="group" aria-label="1 / 4">
										<a href="<?php echo $main_fields['t5_evo_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['t5_evo_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['t5_evo_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['t5_evo_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['t5_evo_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['t5_evo_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['t5_evo_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['t5_evo_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['t5_evo_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide swiper-slide-next"  role="group" aria-label="2 / 4">
										<a href="<?php echo $main_fields['u_tour_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['u_tour_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['u_tour_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['u_tour_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['u_tour_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['u_tour_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['u_tour_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['u_tour_nuoroda']['value']['title']; ?></span
													><span class="sub-title"><?php echo $main_fields['u_tour_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide"  role="group" aria-label="3 / 4">
										<a href="<?php echo $main_fields['forthing_v9_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['forthing_v9_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['forthing_v9_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['forthing_v9_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['forthing_v9_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['forthing_v9_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['forthing_v9_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['forthing_v9_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['forthing_v9_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide"  role="group" aria-label="4 / 4">
										<a href="<?php echo $main_fields['forthing_s7_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['forthing_s7_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['forthing_s7_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['forthing_s7_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['forthing_s7_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['forthing_s7_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['forthing_s7_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['forthing_s7_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['forthing_s7_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							<div class="swiper-button-prev swiper-button-prev-1 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-10657f7108acc176e5" aria-disabled="true"></div><div class="swiper-button-next swiper-button-next-1 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-10657f7108acc176e5" aria-disabled="true"></div></span></span></span></span></span></span></div>
							</li>
							<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children brand-slider"><div class="brand"><div class="brand-content"><img src="/wp-content/uploads/2026/03/voyah-menu-logo-200x80-1.png" alt="Voyah logotips"><span class="title">Premium</span><span class="sub-title">REV | PHEV | BEV</span><span class="brand-name">Voyah</span></div></div>
							<div class="swiper swiper-menu-item-2 swiper-initialized swiper-horizontal swiper-pointer-events">
								<ul class="swiper-wrapper" id="swiper-wrapper-48e610cc106c5e638d" aria-live="polite" >
								    <li class="swiper-slide swiper-slide-active"  role="group" aria-label="1 / 3">
										<a href="<?php echo $main_fields['voyah_free_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['voyah_free_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['voyah_free_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['voyah_free_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['voyah_free_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['voyah_free_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['voyah_free_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['voyah_free_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['voyah_free_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide swiper-slide-active"  role="group" aria-label="1 / 3">
										<a href="<?php echo $main_fields['voyah_dream_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['voyah_dream_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['voyah_dream_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['voyah_dream_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['voyah_dream_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['voyah_dream_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['voyah_dream_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['voyah_dream_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['voyah_dream_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide swiper-slide-next"  role="group" aria-label="3 / 3">
										<a href="<?php echo $main_fields['voyah_courage_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['voyah_courage_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['voyah_courage_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['voyah_courage_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['voyah_courage_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['voyah_courage_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['voyah_courage_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['voyah_courage_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['voyah_courage_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							<div class="swiper-button-prev swiper-button-prev-2 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-48e610cc106c5e638d" aria-disabled="true"></div><div class="swiper-button-next swiper-button-next-2 swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-48e610cc106c5e638d" aria-disabled="true"></div></span></span></span></span></span></span></div>
							</li>
							<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children brand-slider"><div class="brand"><div class="brand-content"><img src="/wp-content/uploads/2026/03/mhero-logo-menu-200x80-1.png" alt="M-Hero"><span class="title">Luxury Off-Road</span><span class="sub-title">REV | PHEV | BEV</span><span class="brand-name">MHERO</span></div></div>
							<div class="swiper swiper-menu-item-3 swiper-initialized swiper-horizontal swiper-pointer-events">
								<ul class="swiper-wrapper" id="swiper-wrapper-b8435210934510d25f" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
									<li class="swiper-slide swiper-slide-active"  role="group" aria-label="1 / 1">
										<a href="<?php echo $main_fields['mhero_nuoroda']['value']['url']; ?>">
											<div class="model">
												<div>
													<div class="fuel-types">
														<?php foreach ((array)$main_fields['mhero_tipas']['value'] as $type) { 
															if ($icon = $icons[trim($type)] ?? null) {
																echo '<img src="/wp-content/uploads/2026/03/' . $icon[0] . '" alt="' . $icon[1] . '" class="fuel-icon">';
														} } ?>
													</div>
													<?php if($main_fields['mhero_etikete']['value']) { ?><div class="labels"><span class="<?php if($main_fields['mhero_etikete']['value'][0] == 'Akcija') { echo 'red'; } ?>"><?php echo $main_fields['mhero_etikete']['value'][0]; ?></span></div><?php } ?>
												</div>
												<div class="car">
													<img decoding="async" src="<?php echo $main_fields['mhero_img']['value']['sizes']['large']; ?>" alt="<?php echo $main_fields['mhero_img']['value']['alt'] ?>">
													<span class="title"><?php echo $main_fields['mhero_nuoroda']['value']['title']; ?></span>
													<span class="sub-title"><?php echo $main_fields['mhero_kaina']['value']; ?></span>
												</div>
											</div>
										</a>
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

	
